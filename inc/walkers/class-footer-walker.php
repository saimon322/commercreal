<?php

class Footer_Walker_Nav_Menu extends Walker_Nav_Menu
{
    
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        
        $classes   = empty($item->classes) ? array() : (array)$item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);
        
        if ($depth == 0) {
            
            $output .= '<aside class="f_widgets_item">';
            $output .= '<div class="f_link">';
            $output .= '<div class="f_title">';
            $output .= '<p class="h3">' . $item->title . '</p>';
            $output .= '</div>';
            $output .= '<ul class="list">';
            
        } else {
            
            $output         .= '<li>';
            $atts           = array();
            $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
            $atts['target'] = ! empty($item->target) ? $item->target : '';
            if ('_blank' === $item->target && empty($item->xfn)) {
                $atts['rel'] = 'noopener';
            } else {
                $atts['rel'] = $item->xfn;
            }
            $atts['href']         = ! empty($item->url) ? $item->url : '';
            $atts['aria-current'] = $item->current ? 'page' : '';
            
            $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
            
            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (is_scalar($value) && '' !== $value && false !== $value) {
                    $value      = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }
            
            $title = apply_filters('the_title', $item->title, $item->ID);
            
            $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);
            
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            
        }
        
    }
    
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if ($depth == 0) {
            $output .= "</ul>";
            $output .= "</div>";
            $output .= "</aside>";
        } else {
            $output .= "</li>";
        }
    }
    
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
    }
    
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
    }
    
}