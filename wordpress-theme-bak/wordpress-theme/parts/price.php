<section id="price" class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto fade-up" data-delay="200">
            <div class="text-center mb-16">
                <h3 class="text-2xl md:text-3xl tracking-[0.2em] font-medium">
                    <?php echo esc_html( get_theme_mod( 'tozem_rate_title', '宿泊料金の詳細（税込）' ) ); ?>
                </h3>
                <div class="mt-6 text-sm text-gray-500 tracking-[0.1em]">
                    <?php echo esc_html( get_theme_mod( 'tozem_rate_base_note', '※1棟貸切 4名様までの基本料金です' ) ); ?>
                </div>
            </div>
            
            <!-- 3 Column Pricing -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16 border-y border-gray-100 py-10">
                <!-- Normal -->
                <div class="text-center space-y-4 md:border-r border-gray-100">
                    <h4 class="text-base tracking-[0.1em] text-gray-600">
                        <?php _e('通常日', 'tozem'); ?>
                    </h4>
                    <p class="text-3xl font-serif text-gray-900 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_normal_price', '¥40,000〜' ) ); ?>
                    </p>
                </div>
                
                <!-- High Season -->
                <div class="text-center space-y-4 md:border-r border-gray-100">
                    <h4 class="text-base tracking-[0.1em] text-gray-600">
                        <?php _e('ハイシーズン', 'tozem'); ?>
                    </h4>
                    <p class="text-3xl font-serif text-gray-900 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_high_price', '¥46,000〜' ) ); ?>
                    </p>
                    <p class="text-xs text-gray-400 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_high_note', '7/13-9/30, GW' ) ); ?>
                    </p>
                </div>

                <!-- Peak Season -->
                <div class="text-center space-y-4">
                    <h4 class="text-base tracking-[0.1em] text-gray-600">
                        <?php _e('特定日', 'tozem'); ?>
                    </h4>
                    <p class="text-3xl font-serif text-gray-900 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_peak_price', '¥52,000〜' ) ); ?>
                    </p>
                    <p class="text-xs text-gray-400 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_peak_note', '8/9-17, 12/20-1/5' ) ); ?>
                    </p>
                </div>
            </div>
            
            <!-- Additional Rates & Discounts -->
            <div class="space-y-6 max-w-3xl mx-auto">
                <div class="flex flex-col md:flex-row md:justify-between py-4 border-b border-gray-50">
                    <h4 class="text-sm tracking-[0.1em] text-gray-600 mb-2 md:mb-0">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_add_label', '追加料金 (1名様あたり)' ) ); ?>
                    </h4>
                    <p class="text-base text-gray-800 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_add_price', '大人: ¥9,000 / 子供: ¥5,000' ) ); ?>
                    </p>
                </div>

                <div class="flex flex-col md:flex-row md:justify-between py-4 border-b border-gray-50">
                    <h4 class="text-sm tracking-[0.1em] text-gray-600 mb-2 md:mb-0">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_discount_label', '連泊割引' ) ); ?>
                    </h4>
                    <p class="text-base text-gray-800 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_discount_text', '2泊目以降 ¥3,000 引き (清掃なし)' ) ); ?>
                    </p>
                </div>

                <div class="flex flex-col md:flex-row md:justify-between py-4 border-b border-gray-50">
                    <h4 class="text-sm tracking-[0.1em] text-gray-600 mb-2 md:mb-0">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_overtime_label', '時間外利用' ) ); ?>
                    </h4>
                    <p class="text-base text-gray-800 tracking-[0.05em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_rate_overtime_text', '¥5,000 / 1h (要相談)' ) ); ?>
                    </p>
                </div>
            </div>
            
            <div class="mt-12 text-center text-sm text-gray-400 tracking-[0.05em] leading-relaxed italic">
                <?php echo nl2br( esc_html( get_theme_mod( 'tozem_rate_note', "※季節や曜日により料金が変動いたします。詳細はお問い合わせください。\n※小学生以下のお子様は無料です。" ) ) ); ?>
            </div>
        </div>
    </div>
</section>
