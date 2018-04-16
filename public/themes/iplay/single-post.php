<?php get_header();
if(have_posts()): while(have_posts()): the_post();
$category = get_the_category()[0];?>
<div class="iplay_widget_hero">
    <canvas class="particles" data-color="#3FBF55"></canvas>
    <div class="hero">
        <div class="hero__content">
            <h1 class="hero__title"><?php the_title(); ?></h1>
            <p class="hero__text">Posted in <?php echo $category->name; ?> on <?php the_time('j F Y'); ?></p>
        </div>
    </div>
</div>
<main role="main" class="content">
    <div class="container news">
            <article class="news-item">
                <?php the_content(); ?>
            </article>
    </div>
</main>
<?php endwhile;
 endif;
 get_footer();?>
