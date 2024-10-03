<?php
/*
Template Name: Escrever Avaliação
*/
get_header(); ?>

<main>
    <section class="escrever-avaliacao">
        <h2>Escrever Avaliação</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>