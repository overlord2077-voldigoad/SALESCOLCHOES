<?php
/*
Template Name: Dúvidas Frequentes
*/
get_header(); ?>

<main>
    <section class="duvidas-frequentes">
        <h2>Dúvidas Frequentes</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>