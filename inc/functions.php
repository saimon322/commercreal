<?php

add_filter('body_class', function ($classes) {
    $classes[] = 'bg_color';
    
    return $classes;
}, 10, 1);

function terms_slugs_to_string(array $terms): string
{
    $cats = '';
    
    foreach ($terms as $term) {
        $cats .= $term->slug . ' ';
    }
    
    return $cats;
}

function terms_names_to_string(array $terms): string
{
    if (count($terms) == 1) {
        return $terms[0]->name;
    }
    
    $names     = '';
    $last_term = array_pop($terms);
    
    foreach ($terms as $term) {
        $names .= $term->name . ' / ';
    }
    
    $names .= $last_term->name;
    
    return $names;
}

add_filter('acf/fields/flexible_content/layout_title/name=characteristics', 'flexible_content_layout_title', 10, 4);
function flexible_content_layout_title($title, $field, $layout, $i)
{
    
    if ($name = get_sub_field('name')) {
        return $name;
    }
    
    return $title;
}

function tcb_pre_get_posts( $query ) {
    if ( ! is_tax() )
       return;

       $query->set( 'posts_per_page', -1 );
}

add_action( 'pre_get_posts', 'tcb_pre_get_posts', 1 );

function send_mail()
{
    
    if ( ! wp_verify_nonce($_POST['nonce'], 'send-mail')) {
        die();
    }
    
    parse_str($_POST['message_data'], $message_data);
    
    if (isset($message_data['name'])) {
        $name = '<br><b>Имя:</b> ' . $message_data['name'];
    }
    if (isset($message_data['email'])) {
        $email = '<br><b>Email:</b> ' . $message_data['email'];
    }
    if (isset($message_data['phone'])) {
        $phone = '<br><b>Телефон:</b> ' . $message_data['phone'];
    }
    if (isset($message_data['message'])) {
        $page = '<br><b>Сообщение:</b> ' . $message_data['message'];
    }
    
    $to       = get_field('email_to', 'option');
    $sendfrom = get_field('email_from', 'option');
    $headers  = 'From: ' . wp_strip_all_tags($sendfrom) . "\r\n";
    $headers  .= 'Reply-To: ' . wp_strip_all_tags($sendfrom) . "\r\n";
    $headers  .= "MIME-Version: 1.0\r\n";
    $headers  .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject  = 'Заявка с сайта commercreal.com';
    $message  = "$page $name $email $phone";
    $send     = wp_mail($to, $subject, $message, $headers);
    
    if ($send) {
        echo '<div id="success" style="display: none;"></div>"';
    } else {
        echo '<center><p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p></center>';
    }
}

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');