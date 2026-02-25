<!-- 
  Designed and Developed by Botarhythm AI Studio
  https://botarhythm.com
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="site-navigation" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-transparent py-6">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="#hero" class="site-title text-xl sm:text-2xl tracking-[0.3em] transition-colors duration-300 text-white">
                <?php echo esc_html( get_theme_mod( 'tozem_header_logo_text', 'TOZEM' ) ); ?>
            </a>

            <?php
            if ( has_nav_menu( 'header-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'container'      => false,
                    'menu_class'     => 'hidden md:flex items-center space-x-8 text-white list-none m-0 p-0',
                    'fallback_cb'    => false,
                ) );
            } else {
                // Get sections and their order from customizer
                $sections = array(
                    'concept'     => get_theme_mod('tozem_order_concept', 30),
                    'stay'        => get_theme_mod('tozem_order_stay', 40),
                    'experience'  => get_theme_mod('tozem_order_experience', 50),
                    'activities'  => get_theme_mod('tozem_order_activities', 60),
                    'local-guide' => get_theme_mod('tozem_order_local-guide', 70),
                    'gallery'     => get_theme_mod('tozem_order_gallery', 80),
                    'access'      => get_theme_mod('tozem_order_access', 100),
                    'price'       => get_theme_mod('tozem_order_price', 105),
                    'reservation' => get_theme_mod('tozem_order_reservation', 110),
                );

                // Sort by order value
                asort($sections);

                // Define menu labels and target IDs
                $menu_labels = array(
                    'concept'     => array('ja' => __('藤ゼムとは', 'tozem'), 'en' => 'ABOUT TOZEM'),
                    'stay'        => array('ja' => __('宿泊', 'tozem'), 'en' => 'STAY'),
                    'experience'  => array('ja' => __('工房体験', 'tozem'), 'en' => 'EXPERIENCE'),
                    'activities'  => array('ja' => __('アクティビティ', 'tozem'), 'en' => 'ACTIVITIES'),
                    'local-guide' => array('ja' => __('周辺ガイド', 'tozem'), 'en' => 'GUIDE'),
                    'gallery'     => array('ja' => __('ギャラリー', 'tozem'), 'en' => 'GALLERY'),
                    'access'      => array('ja' => __('アクセス', 'tozem'), 'en' => 'ACCESS'),
                    'price'       => array('ja' => __('宿泊料金', 'tozem'), 'en' => 'PRICE'),
                    'reservation' => array('ja' => __('ご予約', 'tozem'), 'en' => 'RESERVATION'),
                );

                // Generate dynamic nav items
                $nav_items = [];
                foreach ($sections as $section_name => $order) {
                    if (isset($menu_labels[$section_name])) {
                        // For 'local-guide', the ID in the target template is just 'guide' currently.
                        // We will link to the section ID defined in its template part.
                        $target_id = ($section_name === 'local-guide') ? 'guide' : $section_name;
                        
                        $nav_items[] = [
                            'name_ja' => $menu_labels[$section_name]['ja'],
                            'name_en' => $menu_labels[$section_name]['en'],
                            'href'    => '#' . $target_id
                        ];
                    }
                }
            ?>
            <ul class="hidden md:flex items-center space-x-6 lg:space-x-8 text-white list-none m-0 p-0">
                <?php foreach ($nav_items as $item) : ?>
                    <li>
                        <a href="<?php echo esc_url($item['href']); ?>" class="nav-link flex flex-col items-center transition-colors duration-300 hover:opacity-60 text-white group">
                            <span class="text-xs md:text-sm tracking-[0.15em] font-medium leading-tight">
                                <?php echo esc_html($item['name_ja']); ?>
                            </span>
                            <span class="text-[0.6rem] md:text-xs tracking-[0.2em] font-light mt-0.5 opacity-80 uppercase">
                                <?php echo esc_html($item['name_en']); ?>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php } ?>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden transition-colors duration-300 text-white" aria-label="メニュー">
                <!-- Menu Icon -->
                <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
                <!-- X Icon -->
                <svg id="icon-close" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <?php
        if ( has_nav_menu( 'header-menu' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'      => 'div',
                'container_id'   => 'mobile-menu',
                'container_class'=> 'hidden md:hidden mt-6 pb-4 space-y-4',
                'menu_class'     => 'list-none m-0 p-0 flex flex-col space-y-4',
                'fallback_cb'    => false,
                'is_mobile_menu' => true, // custom arg for functions.php filter
            ) );
        } else {
        ?>
        <div id="mobile-menu" class="hidden md:hidden mt-6 pb-4 space-y-4">
            <ul class="list-none m-0 p-0 flex flex-col space-y-4">
                <?php foreach ($nav_items as $item) : ?>
                    <li>
                        <a href="<?php echo esc_url($item['href']); ?>" class="mobile-nav-link block text-sm tracking-[0.15em] transition-colors duration-300 text-white">
                            <?php echo esc_html($item['name']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</nav>
