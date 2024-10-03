<?php
/*
Template Name: Sobre
*/
get_header(); ?>

<main>
    <section class="sobre">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>