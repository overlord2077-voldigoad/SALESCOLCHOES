<?php
/*
Template Name: Encontre a Loja Mais Próxima
*/
get_header(); ?>

<main>
    <section class="encontre-loja">
        <h2>Encontre a Loja Mais Próxima</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>