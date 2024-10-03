<?php
/*
Template Name: Política de Entrega
*/
get_header(); ?>

<main>
    <section class="politica-entrega">
        <h2>Política de Entrega</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>