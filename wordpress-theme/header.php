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
                TOZEM
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8 text-white">
                <?php
                $nav_items = [
                    ['name' => __('藤ゼムとは', 'tozem'), 'href' => '#concept'],
                    ['name' => __('宿泊', 'tozem'), 'href' => '#stay'],
                    ['name' => __('倉庫体験', 'tozem'), 'href' => '#experience'],
                    ['name' => __('アクティビティ', 'tozem'), 'href' => '#activities'],
                    ['name' => __('ギャラリー', 'tozem'), 'href' => '#gallery'],
                    ['name' => __('アクセス', 'tozem'), 'href' => '#access'],
                    ['name' => __('ご予約', 'tozem'), 'href' => '#reservation'],
                ];
                foreach ($nav_items as $item) : ?>
                    <a href="<?php echo esc_url($item['href']); ?>" class="nav-link text-sm tracking-[0.15em] transition-colors duration-300 hover:opacity-60 text-white">
                        <?php echo esc_html($item['name']); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden transition-colors duration-300 text-white" aria-label="メニュー">
                <!-- Menu Icon -->
                <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="18" x2="20" y2="18"/></svg>
                <!-- X Icon -->
                <svg id="icon-close" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-6 pb-4 space-y-4">
            <?php foreach ($nav_items as $item) : ?>
                <a href="<?php echo esc_url($item['href']); ?>" class="mobile-nav-link block text-sm tracking-[0.15em] transition-colors duration-300 text-white">
                    <?php echo esc_html($item['name']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
