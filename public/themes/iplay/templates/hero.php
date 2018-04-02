<div class="hero" style="background-image: url(<?php the_field('hero_image')['url'] ?>)">
    <h1 class="hero__heading"><?php the_field('hero_title') ?></h1>
    <?php if (!empty(get_field('hero_paragraph'))): ?>
        <p class="hero__text"><?php the_field('hero_paragraph') ?></p>
    <?php endif; ?>
</div>
