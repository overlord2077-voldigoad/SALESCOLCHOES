<?php
/*
Template Name: Contato
*/
get_header(); ?>

<main>
    <section class="contato">
        <h2>Contato</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <p>Email: contato@salescolchoes.com</p>
        <p>Telefone: (00) 1234-5678</p>
    </section>
</main>

<?php get_footer(); ?>