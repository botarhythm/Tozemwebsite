<?php

function tozem_theme_scripts() {
    // Enqueue Tailwind (compiled)
    wp_enqueue_style( 'tozem-tailwind', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    
    // Enqueue Main Style (Theme metadata)
    wp_enqueue_style( 'tozem-style', get_stylesheet_uri() );

    // Enqueue Custom JS
    wp_enqueue_script( 'tozem-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tozem_theme_scripts' );

function tozem_theme_setup() {
    load_theme_textdomain( 'tozem', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'tozem_theme_setup' );

/**
 * Output Schema.org JSON-LD for SEO/AIEO
 */
function tozem_add_structured_data() {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'LodgingBusiness',
        'name' => '藤ゼム - Tozem',
        'image' => get_template_directory_uri() . '/assets/images/hero.jpg', // Placeholder, ideally dynamic
        'description' => '都市での忙しい日々の中で、自分を見失っていく感覚。その時、海のそばで過ごした時間が私を本来の自分に還してくれました。藤ゼムは、あなたが自分を取り戻すための余白のある時間を提供します。',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '西川名184-1',
            'addressLocality' => '館山市',
            'addressRegion' => '千葉県',
            'postalCode' => '294-0315',
            'addressCountry' => 'JP'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '34.963936',
            'longitude' => '139.756414'
        ],
        'url' => 'https://tozem.net',
        'email' => 'info@tozem.net',
        'telephone' => '+81-00-0000-0000', // Needs actual phone number if available
        'priceRange' => '$$$' // Estimated
    ];

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
add_action('wp_head', 'tozem_add_structured_data');
