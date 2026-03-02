<section id="reservation" class="pt-32 pb-32 bg-white" style="padding-top: 8rem;">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-16 md:mb-20 fade-up">
            <h2 class="text-2xl md:text-3xl mb-6 tracking-[0.2em] text-gray-900">
                <?php echo esc_html( get_theme_mod( 'tozem_res_title', __('ご予約・お問い合わせ', 'tozem') ) ); ?>
            </h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6" aria-hidden="true"></div>
            <p class="text-gray-600 tracking-[0.1em] uppercase"><?php echo esc_html( get_theme_mod( 'tozem_res_subtitle', 'Reservation' ) ); ?></p>
        </header>

        <div class="max-w-2xl mx-auto fade-up" data-delay="200">
            <div class="mb-12 text-center space-y-4">
                <p class="text-gray-700 tracking-[0.05em] leading-relaxed">
                    <?php echo nl2br( esc_html( get_theme_mod( 'tozem_res_text', __("ご予約・ご質問は下記フォームよりお問い合わせください。\n3営業日以内にご連絡いたします。", 'tozem') ) ) ); ?>
                </p>
            </div>

            <div class="mt-16 md:mt-24 mb-20 fade-up" data-delay="200">
                <div class="space-y-6">
                    <h3 class="text-xl tracking-[0.1em] text-center"><?php _e('キャンセルポリシー', 'tozem'); ?></h3>
                    <div class="max-w-md mx-auto text-sm tracking-[0.05em] space-y-2">
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span><?php _e('30日〜15日前', 'tozem'); ?></span>
                            <span>10%</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span><?php _e('14日〜8日前', 'tozem'); ?></span>
                            <span>50%</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span><?php _e('7日〜3日前', 'tozem'); ?></span>
                            <span>80%</span>
                        </div>
                        <div class="flex justify-between">
                            <span><?php _e('2日〜当日', 'tozem'); ?></span>
                            <span>100%</span>
                        </div>
                        <p class="text-xs text-gray-400 mt-2 pt-2">
                            <?php _e('※30日以前は全額返金（振込手数料はお客様負担）', 'tozem'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Note: This form needs a backend handler or a WordPress plugin (like Contact Form 7) to function. -->
            <div class="mt-12 bg-gray-50 p-8 sm:p-12 md:p-16 fade-up" data-delay="300">
                <?php 
                // Display Contact Form 7
                // Customizer setting 'tozem_res_cf7_shortcode' can be used to override the default shortcode string.
                $cf7_shortcode = get_theme_mod( 'tozem_res_cf7_shortcode', '[contact-form-7 id="9999999" title="ご予約・お問い合わせ"]' );
                
                if ( !empty($cf7_shortcode) ) {
                    echo do_shortcode( $cf7_shortcode );
                } else {
                    echo '<p class="text-center text-red-500">Contact Form 7のショートコードが設定されていません。カスタマイザーから設定してください。</p>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
