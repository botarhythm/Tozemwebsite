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
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array( 'style', 'script' ) );
    add_theme_support( 'align-wide' );

    // Register Navigation Menus
    register_nav_menus( array(
        'header-menu' => __( 'ヘッダーメニュー', 'tozem' ),
    ) );
}
add_action( 'after_setup_theme', 'tozem_theme_setup' );

/**
 * Add Tailwind classes to menu links
 */
function tozem_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( $args->theme_location == 'header-menu' ) {
            // Base Tailwind classes
            $classes = 'nav-link text-sm tracking-[0.15em] transition-colors duration-300 hover:opacity-60 text-white flex flex-col items-center justify-center text-center';
            
            // Adjust for mobile menu context
            if ( isset( $args->is_mobile_menu ) && $args->is_mobile_menu ) {
                $classes = 'mobile-nav-link block text-sm tracking-[0.15em] transition-colors duration-300 text-white text-center';
            }

            $atts['class'] = $classes;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'tozem_nav_menu_link_attributes', 10, 3 );

/**
 * Support for menu subtitles using the '|' separator
 */
function tozem_nav_menu_item_title( $title, $item, $args, $depth ) {
    if ( $args->theme_location == 'header-menu' && strpos( $title, '|' ) !== false ) {
        $parts = explode( '|', $title );
        $main_title = trim( $parts[0] );
        $subtitle = trim( $parts[1] );
        
        $title = sprintf(
            '<span class="main-title font-medium">%s</span><span class="subtitle block text-[10px] opacity-60 mt-1 uppercase font-normal tracking-[0.2em]">%s</span>',
            esc_html( $main_title ),
            esc_html( $subtitle )
        );
    }
    return $title;
}
add_filter( 'nav_menu_item_title', 'tozem_nav_menu_item_title', 10, 4 );

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

/**
 * Customizer Additions
 */
require get_template_directory() . '/inc/customizer.php';
