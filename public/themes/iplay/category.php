<?php get_header();
$category = get_the_category()[0];
?>
<div class="iplay_widget_hero">
    <canvas class="particles" data-color="#3FBF55"></canvas>
    <div class="hero">
        <div class="hero__content">
            <h1 class="hero__title"><?php echo $category->name; ?></h1>
        </div>
    </div>
</div>
<main role="main" class="content">
    <div class="container news">
        <?php if (have_posts()): while (have_posts()): the_post();
        ?>
            <article class="news-item">
                <h3><a href="<?php the_permalink($post->ID) ?>"><?php the_title(); ?></a></h3>
                <p class="span">Posted in <?php echo $category->name; ?> on <?php the_time('j F Y'); ?></p>

                <?php the_content(); ?>
            </article>
        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
        <p><a href="#" class="link">Load more posts</a> &darr;</p>
    </div>
</main>

<?php get_footer(); ?>

<?php get_footer();
