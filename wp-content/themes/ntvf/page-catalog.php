<?php get_header(); ?>

<div class="catalog-content">
    <h2>Каталог товаров</h2>
    <?php
    // Query for products using WooCommerce shortcode or custom query
    echo do_shortcode('[products limit="6"]');
    ?>

    <div class="pagination">
        <?php
        global $wp_query;
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages
        ));
        ?>
    </div>
</div>

<?php get_footer(); ?>