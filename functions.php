<?php
function sales_colchoes_setup() {
    // Suporte para menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sales-colchoes'),
    ));

    // Suporte para imagens destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sales_colchoes_setup');
?>