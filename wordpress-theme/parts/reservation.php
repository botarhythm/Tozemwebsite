<section id="reservation" class="pt-32 pb-32 bg-white" style="padding-top: 8rem;">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-16 md:mb-20 fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em] text-gray-900">
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

            <!-- Pricing Info -->
            <div class="mt-32 md:mt-40 mb-20 space-y-16 fade-up" data-delay="200">
                <div class="space-y-10">
                    <div class="text-center space-y-4">
                        <h3 class="text-xl md:text-2xl tracking-[0.2em]"><?php _e('宿泊料金の詳細（税込）', 'tozem'); ?></h3>
                        <p class="text-xs md:text-sm text-gray-400 tracking-[0.1em] uppercase"><?php _e('※1棟貸切 4名様までの基本料金です', 'tozem'); ?></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border-y border-gray-100 text-center">
                        <div class="py-6 md:py-8 border-b border-gray-100 md:border-b-0 md:border-r border-gray-100 space-y-3">
                            <h4 class="text-sm font-medium tracking-[0.1em] text-gray-500"><?php _e('通常日', 'tozem'); ?></h4>
                            <p class="text-3xl font-serif tracking-[0.05em]"><?php echo esc_html( get_theme_mod( 'tozem_price_regular', '¥40,000~' ) ); ?></p>
                        </div>
                        <div class="py-6 md:py-8 border-b border-gray-100 md:border-b-0 md:border-r border-gray-100 space-y-3">
                            <h4 class="text-sm font-medium tracking-[0.1em] text-gray-500"><?php _e('ハイシーズン', 'tozem'); ?></h4>
                            <p class="text-3xl font-serif tracking-[0.05em]"><?php echo esc_html( get_theme_mod( 'tozem_price_high', '¥46,000~' ) ); ?></p>
                            <p class="text-xs text-gray-400">7/13-9/30, GW</p>
                        </div>
                        <div class="py-6 md:py-8 space-y-3">
                            <h4 class="text-sm font-medium tracking-[0.1em] text-gray-500"><?php _e('特定日', 'tozem'); ?></h4>
                            <p class="text-3xl font-serif tracking-[0.05em]"><?php echo esc_html( get_theme_mod( 'tozem_price_peak', '¥52,000~' ) ); ?></p>
                            <p class="text-xs text-gray-400">8/9-17, 12/20-1/5</p>
                        </div>
                    </div>

                    <div class="space-y-6 text-sm tracking-[0.05em] text-gray-600 max-w-xl mx-auto">
                        <p class="flex flex-col md:flex-row md:justify-between items-center text-center md:text-left gap-2 py-4 border-b border-gray-50">
                            <span class="font-medium text-gray-900"><?php _e('追加料金（1名様あたり）', 'tozem'); ?></span>
                            <span><?php echo esc_html( get_theme_mod( 'tozem_price_extra', '大人: ¥9,000 / 子供: ¥5,000' ) ); ?></span>
                        </p>
                        <p class="flex flex-col md:flex-row md:justify-between items-center text-center md:text-left gap-2 py-4 border-b border-gray-50">
                            <span class="font-medium text-gray-900"><?php _e('連泊割引', 'tozem'); ?></span>
                            <span><?php echo esc_html( get_theme_mod( 'tozem_price_consecutive', '2泊目以降 ¥3,000 引き（清掃なし）' ) ); ?></span>
                        </p>
                        <p class="flex flex-col md:flex-row md:justify-between items-center text-center md:text-left gap-2 py-4 border-b border-gray-50">
                            <span class="font-medium text-gray-900"><?php _e('時間外利用', 'tozem'); ?></span>
                            <span><?php echo esc_html( get_theme_mod( 'tozem_price_overtime', '¥5,000 / 1h（要相談）' ) ); ?></span>
                        </p>
                    </div>

                    <div class="pt-8 space-y-8">
                        <div class="text-center space-y-2">
                           <h4 class="text-lg tracking-[0.15em]"><?php _e('オプション・レンタル（税込）', 'tozem'); ?></h4>
                           <div class="w-8 h-px bg-gray-200 mx-auto"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4 text-sm tracking-[0.05em] text-gray-600 max-w-xl mx-auto">
                            <?php
                            $options_text = get_theme_mod( 'tozem_options_list', "BBQ施設利用料: ¥5,000\n釣竿レンタル（1日）: ¥3,500\nスノーケル3点セット: ¥3,500\nライフジャケット / タモ網: 各¥500" );
                            $options = explode("\n", $options_text);
                            foreach($options as $option): 
                                if(trim($option)):
                                    $parts = explode(':', $option);
                                    $label = trim($parts[0]);
                                    $price = isset($parts[1]) ? trim($parts[1]) : '';
                            ?>
                                <div class="flex justify-between py-2 border-b border-gray-50">
                                    <span class="font-medium text-gray-900"><?php echo esc_html($label); ?></span>
                                    <span><?php echo esc_html($price); ?></span>
                                </div>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                        <p class="text-xs md:text-sm text-gray-400 text-center"><?php _e('※詳細は周辺ガイドをご確認ください。現地決済となります。', 'tozem'); ?></p>
                    </div>
                </div>

                <div class="space-y-6 pt-12 border-t border-gray-100 mt-20">
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
