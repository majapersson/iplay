<div class="hero" style="background-image: url(<?php the_field('hero_image')['url'] ?>)">
    <div class="hero__content">
        <h1 class="hero__title"><?php the_field('hero_title') ?></h1>
        <?php if (!empty(get_field('hero_paragraph'))): ?>
            <p class="hero__text"><?php echo get_field('hero_paragraph', false, false) ?></p>
        <?php endif; ?>
    </div>
</div>
