<section id="experience" class="py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-16 md:mb-20 fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em] text-gray-900">
                <?php echo esc_html( get_theme_mod( 'tozem_exp_title', __('倉庫体験', 'tozem') ) ); ?>
            </h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6" aria-hidden="true"></div>
            <p class="text-gray-600 tracking-[0.1em] uppercase">Experience</p>
        </header>

        <div class="max-w-6xl mx-auto">
            <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center fade-up" data-delay="200">
                <figure class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-200">
                    <img 
                        src="<?php echo esc_url( get_theme_mod( 'tozem_exp_img', 'https://images.unsplash.com/photo-1763824372117-1ff339b522e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYW5kY3JhZnQlMjB3b3Jrc2hvcCUyMHBvdHRlcnl8ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
                        alt="<?php esc_attr_e('倉庫体験', 'tozem'); ?>" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                        loading="lazy"
                        width="800"
                        height="600"
                    />
                </figure>

                <div class="space-y-8">
                    <div class="space-y-6">
                        <header>
                            <h3 class="text-2xl md:text-3xl tracking-[0.15em] text-gray-900">
                                <?php echo esc_html( get_theme_mod( 'tozem_exp_block_title', __('手を動かし、整う', 'tozem') ) ); ?>
                            </h3>
                        </header>
                        <p class="text-gray-700 leading-loose tracking-[0.05em]">
                            <?php echo nl2br( esc_html( get_theme_mod( 'tozem_exp_text_1', __("藤ゼムには、宿泊とは別に\n「倉庫」という体験拠点があります。", 'tozem') ) ) ); ?>
                        </p>
                        <p class="text-gray-700 leading-loose tracking-[0.05em]">
                            <?php echo nl2br( esc_html( get_theme_mod( 'tozem_exp_text_2', __("手仕事を通じて、\n頭を空っぽにする時間。\n集中することで、心が整っていく感覚。", 'tozem') ) ) ); ?>
                        </p>
                    </div>

                    <div class="space-y-4 pt-6 border-t border-gray-200">
                        <h4 class="tracking-[0.1em]"><?php echo esc_html( get_theme_mod( 'tozem_exp_list_title', __('体験内容', 'tozem') ) ); ?></h4>
                        <ul class="space-y-3 text-sm text-gray-600">
                            <?php
                            $exp_list = get_theme_mod( 'tozem_exp_list', "季節の手仕事体験\n少人数制のワークショップ\n創作活動を通じた自己との対話" );
                            $exp_items = explode( "\n", $exp_list );
                            foreach ( $exp_items as $item ) {
                                if ( trim( $item ) ) {
                                    echo '<li class="flex items-start">';
                                    echo '<span class="w-2 h-2 bg-gray-400 rounded-full mr-3 mt-2 flex-shrink-0"></span>';
                                    echo '<span class="tracking-[0.05em]">' . esc_html( trim( $item ) ) . '</span>';
                                    echo '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>

                    <!-- Detailed Experience Info -->
                    <p class="text-sm text-gray-500 tracking-[0.05em] leading-relaxed mt-8">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_exp_note', __("※ 体験内容は季節により変わります\n※ 事前予約制（詳細はお問い合わせください）", 'tozem') ) ) ); ?>
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>
