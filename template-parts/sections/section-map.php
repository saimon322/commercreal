<?php 
$map_type = 'map_' . $args['type'];
$map_bg = get_field($map_type, 'option');
$map_point = get_field('map_point', 'option');
?>

<div class="map map--<?=$args['type'];?>" data-aos data-aos-offset="200">
    <img src="<?=$map_bg?>" alt="" class="map__bg">
    <div class="map__points">
        <?php $projects_cats = get_terms(['taxonomy' => 'projects_cats', 'hide_empty' => false]);
        $mapItems = null;
        foreach ($projects_cats as $cat):
            if (get_field($map_type, $cat)):
                $map_pos = get_field($map_type . '_pos', $cat);
                $mapItem = new stdClass();
                $mapItem->name = $cat->name;
                $mapItem->filter = $cat->slug;
                $mapItem->left = $map_pos['left'];
                $mapItem->top = $map_pos['top'];
                $mapItems[] = $mapItem;
            endif;
        endforeach;

        usort($mapItems, fn($a, $b) => strcmp($a->left, $b->left));

        foreach ($mapItems as $mapItem): ?>
            <a href="<?=site_url();?>/proekty/#<?=$mapItem->filter?>"
                class="map__point"
                style="left: <?=$mapItem->left?>%; top: <?=$mapItem->top?>%;">
                    <p><?=$mapItem->name?></p>
                    <img src="<?=$map_point?>" alt="">
            </a>
        <?php endforeach; ?>
    </div>
</div>