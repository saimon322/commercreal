<div class="socials">
    <?php foreach ($options['socials'] as $social): ?>
        <?php $target = 
                $social['type'] == 'phone' || 
                $social['type'] == 'email'
                ? '_blank' : ''; ?>
        <a href="<?= esc_url($social['link']); ?>" target="<?= $target; ?>" class="social">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/icon/social-<?= $social['type']; ?>.png" alt="">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/icon/social-<?= $social['type']; ?>-hover.png" alt="">
            <?php if($social['type'] == 'instagram'): ?>
                <span>*</span>
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</div>