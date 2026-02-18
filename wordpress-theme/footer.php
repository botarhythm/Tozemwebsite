<footer class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center space-y-8">
                <div>
                    <h3 class="text-2xl md:text-3xl tracking-[0.3em] mb-4">TOZEM</h3>
                    <p class="text-gray-400 text-sm tracking-[0.15em]">藤ゼム</p>
                </div>

                <div class="space-y-2">
                    <p class="text-gray-400 text-sm tracking-[0.1em]">
                        <?php _e('〒294-0315<br />千葉県館山市西川名184-1', 'tozem'); ?>
                    </p>
                </div>

                <div class="flex justify-center space-x-6">
                    <a href="https://www.instagram.com/tozem_tateyama/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
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
                        ];
                        foreach ($footer_nav as $item) : ?>
                            <a href="<?php echo esc_url($item['href']); ?>" class="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]">
                                <?php echo esc_html($item['name']); ?>
                            </a>
                        <?php endforeach; ?>
                    </nav>

                    <p class="text-gray-500 text-sm tracking-[0.1em]">
                        © 2026 TOZEM. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
