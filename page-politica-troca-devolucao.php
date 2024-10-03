<?php
/*
Template Name: Política de Troca e Devolução
*/
get_header(); ?>

<main>
    <section class="politica-troca-devolucao">
        <h2>Política de Troca e Devolução</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>