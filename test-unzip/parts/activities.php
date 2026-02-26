<section id="activities" class="py-24 md:py-32 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-16 md:mb-20 fade-up">
            <h2 class="text-2xl md:text-3xl mb-6 tracking-[0.2em] text-gray-900">
                <?php echo esc_html( get_theme_mod( 'tozem_act_title', __('アクティビティ', 'tozem') ) ); ?>
            </h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6" aria-hidden="true"></div>
            <p class="text-gray-600 tracking-[0.1em] uppercase">Activities</p>
        </header>

        <div class="max-w-6xl mx-auto flex flex-col gap-24 md:gap-32">
            <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center fade-up" data-delay="200">
                <figure class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-200">
                    <img 
                        src="<?php echo esc_url( get_theme_mod( 'tozem_act_img_1', 'https://images.unsplash.com/photo-1544077960-604201fe74bc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiYnElMjBnYXJkZW58ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
                        alt="<?php esc_attr_e('BBQ', 'tozem'); ?>" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                        loading="lazy"
                        width="800"
                        height="600"
                    />
                </figure>
                <div class="space-y-6">
                    <header>
                        <h3 class="text-2xl md:text-3xl tracking-[0.15em] text-gray-900"><?php echo esc_html( get_theme_mod( 'tozem_act_block1_title', __('BBQ', 'tozem') ) ); ?></h3>
                    </header>
                    <p class="text-gray-700 leading-loose tracking-[0.05em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_act_block1_text', __("屋根付きのウッドデッキで、雨の日でも安心してBBQをお楽しみいただけます。\n静かな潮風を感じながら、地元の食材を囲む贅沢なひとときを。", 'tozem') ) ) ); ?>
                    </p>
                    <footer class="space-y-4 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-600 leading-relaxed">
                            <strong class="font-medium text-gray-800"><?php echo esc_html( get_theme_mod( 'tozem_act_block1_price', __('利用料: 5,000円/日（コンロ、網、トング、テーブル等の機材一式）', 'tozem') ) ); ?></strong><br />
                            <span class="inline-block mt-2 text-xs text-gray-500">
                                <?php echo nl2br( esc_html( get_theme_mod( 'tozem_act_block1_note', __("※食材、炭、着火剤、調味料、鉄板はご持参ください。\n※お庭での手持ち花火も可能です（20:30まで、打ち上げ不可）。", 'tozem') ) ) ); ?>
                            </span>
                        </p>
                    </footer>
                </div>
            </article>

            <!-- Activity 2: Sea Playing -->
            <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center fade-up" data-delay="400">
                <figure class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-200 lg:order-2">
                    <img 
                        src="<?php echo esc_url( get_theme_mod( 'tozem_act_img_2', 'https://images.unsplash.com/photo-1518173946687-a4c8a9b749f5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyb2NreSUyMGJlYWNoJTIwamFwYW58ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
                        alt="<?php esc_attr_e('海遊び', 'tozem'); ?>" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                        loading="lazy"
                        width="800"
                        height="600"
                    />
                </figure>
                <div class="space-y-6 lg:order-1">
                    <header>
                        <h3 class="text-2xl md:text-3xl tracking-[0.15em] text-gray-900"><?php echo esc_html( get_theme_mod( 'tozem_act_block2_title', __('海遊び・釣り', 'tozem') ) ); ?></h3>
                    </header>
                    <p class="text-gray-700 leading-loose tracking-[0.05em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_act_block2_text', __("徒歩2分の目の前の海は、透明度抜群の岩場。\n磯遊びやシュノーケリングで、色鮮やかな熱帯魚に出会えることも。", 'tozem') ) ) ); ?>
                    </p>
                    <footer class="space-y-4 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-600 leading-relaxed">
                            <?php echo nl2br( esc_html( get_theme_mod( 'tozem_act_block2_price', __('外シャワー完備で海上がりも快適です。岩場ですのでマリンシューズのご持参をお勧めします。', 'tozem') ) ) ); ?><br />
                            <span class="inline-block mt-2 text-xs text-gray-500"><?php echo esc_html( get_theme_mod( 'tozem_act_block2_note', __('※海水浴場（波左間、沖の島など）へも車で5〜15分でアクセス可能です。', 'tozem') ) ); ?></span>
                        </p>
                    </footer>
                </div>
            </article>

            <!-- Activity 3: Local Spots -->
            <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center fade-up" data-delay="600">
                <figure class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-200">
                    <img 
                        src="<?php echo esc_url( get_theme_mod( 'tozem_act_img_3', 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMG9uc2VuJTIwdmlld3xlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
                        alt="<?php esc_attr_e('周辺スポット', 'tozem'); ?>" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                        loading="lazy"
                        width="800"
                        height="600"
                    />
                </figure>
                <div class="space-y-6">
                    <header>
                        <h3 class="text-2xl md:text-3xl tracking-[0.15em] text-gray-900"><?php echo esc_html( get_theme_mod( 'tozem_act_block3_title', __('周辺スポット', 'tozem') ) ); ?></h3>
                    </header>
                    <div class="space-y-8">
                        <section class="space-y-4">
                            <h4 class="text-lg tracking-[0.1em] border-b border-gray-200 pb-2 text-gray-800"><?php echo esc_html( get_theme_mod( 'tozem_act_list1_title', __('アクティビティ', 'tozem') ) ); ?></h4>
                            <ul class="text-sm text-gray-600 space-y-3">
                                <?php
                                $list1 = get_theme_mod( 'tozem_act_list1_items', "陶芸体験: 雨天でも楽しめます（要事前確認）。\nダイビング: 西川名ダイビングサービス・港まで徒歩1分。\nゴルフ: 館山カントリー（車8分）、房州カントリー（車12分）。" );
                                $items1 = explode( "\n", $list1 );
                                foreach ( $items1 as $item ) {
                                    if ( trim( $item ) ) {
                                        if ( strpos( $item, ':' ) !== false ) {
                                            list( $bold, $normal ) = explode( ':', $item, 2 );
                                            echo '<li><strong class="font-medium text-gray-800">' . esc_html( trim( $bold ) ) . ':</strong> ' . esc_html( trim( $normal ) ) . '</li>';
                                        } else if ( strpos( $item, '：' ) !== false ) {
                                            list( $bold, $normal ) = explode( '：', $item, 2 );
                                            echo '<li><strong class="font-medium text-gray-800">' . esc_html( trim( $bold ) ) . '：</strong> ' . esc_html( trim( $normal ) ) . '</li>';
                                        } else {
                                            echo '<li>' . esc_html( trim( $item ) ) . '</li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </section>
                        <section class="space-y-4">
                            <h4 class="text-lg tracking-[0.1em] border-b border-gray-200 pb-2 text-gray-800"><?php echo esc_html( get_theme_mod( 'tozem_act_list2_title', __('観光・癒やし', 'tozem') ) ); ?></h4>
                            <ul class="text-sm text-gray-600 space-y-3">
                                <?php
                                $list2 = get_theme_mod( 'tozem_act_list2_items', "温泉: 千里の風・花しぶき（車10分）、里見の湯（車20分）。\n灯台: 洲崎灯台（車4分）、野島崎灯台（車24分）。\n絶景: 富士山の眺望や、伊豆大島を臨む夕日が楽しめます。" );
                                $items2 = explode( "\n", $list2 );
                                foreach ( $items2 as $item ) {
                                    if ( trim( $item ) ) {
                                        if ( strpos( $item, ':' ) !== false ) {
                                            list( $bold, $normal ) = explode( ':', $item, 2 );
                                            echo '<li><strong class="font-medium text-gray-800">' . esc_html( trim( $bold ) ) . ':</strong> ' . esc_html( trim( $normal ) ) . '</li>';
                                        } else if ( strpos( $item, '：' ) !== false ) {
                                            list( $bold, $normal ) = explode( '：', $item, 2 );
                                            echo '<li><strong class="font-medium text-gray-800">' . esc_html( trim( $bold ) ) . '：</strong> ' . esc_html( trim( $normal ) ) . '</li>';
                                        } else {
                                            echo '<li>' . esc_html( trim( $item ) ) . '</li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </section>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
