<!-- Instagram Feed Section -->
<div class="bg-gray-50 py-16 border-t border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center mb-10 fade-up">
            <h2 class="text-2xl md:text-3xl tracking-[0.2em] font-light mb-2">Instagram</h2>
            <div class="w-8 h-px bg-gray-900 mx-auto"></div>
        </div>
        <div class="fade-up" data-delay="200">
            <?php
            $instagram_shortcode = get_theme_mod( 'tozem_instagram_shortcode', '[instagram-feed]' );
            // Only render if the Smash Balloon plugin is active and a shortcode is configured
            if ( ! empty( $instagram_shortcode ) && function_exists( 'sb_instagram_feed_init' ) ) {
                // Capture output to detect and suppress admin error injections
                ob_start();
                echo do_shortcode( $instagram_shortcode );
                $feed_output = ob_get_clean();

                // If Smash Balloon injected an admin error div, suppress it entirely
                if ( strpos( $feed_output, 'sbi_admin_error' ) === false ) {
                    echo $feed_output;
                }
            }
            ?>
        </div>
        
        <div class="mt-8 text-center fade-up" data-delay="300">
            <a href="<?php echo esc_url( get_theme_mod( 'tozem_footer_instagram', 'https://www.instagram.com/tozem_tateyama/' ) ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center space-x-2 text-sm tracking-widest text-gray-600 hover:text-gray-900 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span>Follow @tozem_tateyama</span>
            </a>
        </div>
    </div>
</div>

<footer class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center space-y-8">
                <div>
                    <h3 class="text-2xl md:text-3xl tracking-[0.3em] mb-4"><?php echo esc_html( get_theme_mod( 'tozem_footer_title', 'TOZEM' ) ); ?></h3>
                    <p class="text-gray-400 text-sm tracking-[0.15em]"><?php echo esc_html( get_theme_mod( 'tozem_footer_subtitle', __('藤ゼム', 'tozem') ) ); ?></p>
                </div>

                <div class="space-y-2">
                    <p class="text-gray-400 text-sm tracking-[0.1em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_footer_address', __("〒294-0315\n千葉県館山市西川名184-1", 'tozem') ) ) ); ?>
                    </p>
                </div>

                <div class="flex justify-center space-x-6">
                    <a href="<?php echo esc_url( get_theme_mod( 'tozem_footer_instagram', 'https://www.instagram.com/tozem_tateyama/' ) ); ?>" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                    <a href="mailto:<?php echo esc_attr( get_theme_mod( 'tozem_footer_email', 'info@tozem.net' ) ); ?>" class="text-gray-400 hover:text-white transition-colors" aria-label="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10z"/><polyline points="22 7 12 13 2 7"/></svg>
                    </a>
                </div>

                <div class="pt-8 border-t border-gray-800">
                    <nav class="flex flex-wrap justify-center gap-6 mb-8">
                        <?php
                        $footer_nav = [
                            ['name' => __('藤ゼムとは', 'tozem'), 'href' => '#concept'],
                            ['name' => __('宿泊', 'tozem'), 'href' => '#stay'],
                            ['name' => __('倉庫体験', 'tozem'), 'href' => '#experience'],
                            ['name' => __('ギャラリー', 'tozem'), 'href' => '#gallery'],
                            ['name' => __('アクセス', 'tozem'), 'href' => '#access'],
                            ['name' => __('ご予約', 'tozem'), 'href' => '#reservation'],
                            ['name' => __('プライバシーポリシー', 'tozem'), 'href' => '/privacy-policy/'],
                        ];
                        foreach ($footer_nav as $item) : ?>
                            <a href="<?php echo esc_url($item['href']); ?>" class="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]">
                                <?php echo esc_html($item['name']); ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>

                    <p class="text-gray-500 text-sm tracking-[0.1em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_footer_copyright', '© 2026 TOZEM. All rights reserved.' ) ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
