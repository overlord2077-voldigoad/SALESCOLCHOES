<?php
/*
Template Name: Política de Privacidade
*/
get_header(); ?>

<main>
    <section class="politica-privacidade">
        <h2>Política de Privacidade</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>