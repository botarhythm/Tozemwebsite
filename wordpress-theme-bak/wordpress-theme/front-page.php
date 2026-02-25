<?php get_header(); ?>

<main class="min-h-screen bg-white">
    <?php
    // Define the available sections and retrieve their custom order
    $sections = array(
        'hero'        => get_theme_mod('tozem_order_hero', 10),
        'news'        => get_theme_mod('tozem_order_news', 20),
        'concept'     => get_theme_mod('tozem_order_concept', 30),
        'stay'        => get_theme_mod('tozem_order_stay', 40),
        'experience'  => get_theme_mod('tozem_order_experience', 50),
        'activities'  => get_theme_mod('tozem_order_activities', 60),
        'local-guide' => get_theme_mod('tozem_order_local-guide', 70),
        'gallery'     => get_theme_mod('tozem_order_gallery', 80),
        'story'       => get_theme_mod('tozem_order_story', 90),
        'access'      => get_theme_mod('tozem_order_access', 100),
        'price'       => get_theme_mod('tozem_order_price', 105),
        'reservation' => get_theme_mod('tozem_order_reservation', 110),
    );

    // Sort the sections array by their customized order value in ascending order
    asort($sections);

    // Iterate through the sorted sections and load their respective template parts
    foreach ($sections as $section_name => $order) {
        get_template_part('parts/' . $section_name);
    }
    ?>
</main>

<?php get_footer(); ?>
