<section id="stay" class="py-32 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-16 md:mb-20 fade-up">
            <h2 class="text-2xl md:text-3xl mb-6 tracking-[0.2em] text-gray-900"><?php echo esc_html( get_theme_mod( 'tozem_stay_title', __('宿泊', 'tozem') ) ); ?></h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6" aria-hidden="true"></div>
            <p class="text-gray-600 tracking-[0.1em] uppercase">Stay</p>
        </header>

        <div class="max-w-6xl mx-auto">
            <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center mb-24 fade-up" data-delay="200">
                <figure class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-200">
                    <img 
                        src="<?php echo esc_url( get_theme_mod( 'tozem_stay_img_1', 'https://images.unsplash.com/photo-1658664566242-d2a09a92a53e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHNlYXNpZGUlMjBob3VzZSUyMG9jZWFufGVufDF8fHx8MTc3MTM4ODI2M3ww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
                        alt="<?php esc_attr_e('藤ゼム外観', 'tozem'); ?>" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                        loading="lazy"
                        width="800"
                        height="600"
                    />
                </figure>

                <div class="space-y-6">
                    <header>
                        <h3 class="text-2xl md:text-3xl tracking-[0.15em] text-gray-900">
                        <?php echo esc_html( get_theme_mod( 'tozem_stay_block1_title', __('海辺の古民家', 'tozem') ) ); ?>
                    </h3>
                    <p class="text-gray-700 leading-loose tracking-[0.05em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_stay_block1_text1', __("館山の海を望む静かな立地。\n古き良き日本家屋の趣を残しながら、\n快適な滞在ができるよう整えました。", 'tozem') ) ) ); ?>
                    </p>
                    <p class="text-gray-700 leading-loose tracking-[0.05em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_stay_block1_text2', __("時間を気にせず、\nただ在ることの豊かさを感じてください。", 'tozem') ) ) ); ?>
                    </p>
                </div>
            </article>

            <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center mb-24 fade-up" data-delay="400">
                <figure class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-200 lg:order-2">
                    <img 
                        src="<?php echo esc_url( get_theme_mod( 'tozem_stay_img_2', 'https://images.unsplash.com/photo-1759310706794-b8a350561d93?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHRyYWRpdGlvbmFsJTIwaG91c2UlMjBpbnRlcmlvcnxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
                        alt="<?php esc_attr_e('藤ゼム室内', 'tozem'); ?>" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                        loading="lazy"
                        width="800"
                        height="600"
                    />
                </figure>

                <div class="space-y-6 lg:order-1">
                    <header>
                        <h3 class="text-2xl md:text-3xl tracking-[0.15em] text-gray-900">
                        <?php echo esc_html( get_theme_mod( 'tozem_stay_block2_title', __('心地よい空間', 'tozem') ) ); ?>
                    </h3>
                    <p class="text-gray-700 leading-loose tracking-[0.05em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_stay_block2_text', __("木のぬくもり、畳の香り。\n自然素材に囲まれた室内は、\n心と体を穏やかに整えてくれます。", 'tozem') ) ) ); ?>
                    </p>
                </div>
            </article>

            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-32 fade-up" data-delay="600">
                <?php
                $features = [
                    [
                        'title' => __('一棟貸し', 'tozem'),
                        'desc' => __('古民家を一棟まるごと貸切', 'tozem'),
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-gray-800" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'
                    ],
                    [
                        'title' => __('定員', 'tozem'),
                        'desc' => __('最大10名まで対応可能', 'tozem'),
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-gray-800" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'
                    ],
                    [
                        'title' => __('間取り', 'tozem'),
                        'desc' => __('和室2室＋洋室2室', 'tozem'),
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-gray-800" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4v16"/><path d="M2 8h18a2 2 0 0 1 2 2v10"/><path d="M2 17h20"/><path d="M6 8v9"/></svg>'
                    ],
                    [
                        'title' => __('海まで', 'tozem'),
                        'desc' => __('徒歩2分の好立地', 'tozem'),
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" class="text-gray-800" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>'
                    ],
                ];
                foreach ($features as $feature) : ?>
                    <li class="text-center space-y-4 p-6 hover:bg-white hover:shadow-sm rounded-xl transition-all duration-300">
                        <div class="flex justify-center" aria-hidden="true">
                            <?php echo $feature['icon']; ?>
                        </div>
                        <h4 class="tracking-[0.1em] text-gray-900 font-medium"><?php echo esc_html($feature['title']); ?></h4>
                        <p class="text-sm text-gray-500 tracking-[0.05em]">
                            <?php echo esc_html($feature['desc']); ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Facility Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 text-sm tracking-[0.05em] mt-24 md:mt-32 fade-up" data-delay="600">
                <section class="space-y-6">
                    <h4 class="text-lg tracking-[0.1em] border-b border-gray-200 pb-3 text-gray-900">
                        <?php echo esc_html( get_theme_mod( 'tozem_stay_amenity_title', __('設備・アメニティ (無料)', 'tozem') ) ); ?>
                    </h4>
                    <ul class="space-y-3 text-gray-600">
                        <?php
                        $list = get_theme_mod( 'tozem_stay_amenity_list', "バス / トイレ / 洗面\n外シャワー (海上がりに便利)\nエアコン / 扇風機 / 暖房機器\nWi-Fi (Free)\nシャンプー / リンス / ボディソープ\nフェイスタオル / 歯ブラシセット / ドライヤー" );
                        $items = explode( "\n", $list );
                        foreach ( $items as $item ) {
                            if ( trim( $item ) ) {
                                echo '<li class="flex items-center space-x-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span><span>' . esc_html( trim( $item ) ) . '</span></li>';
                            }
                        }
                        ?>
                        <?php if ( get_theme_mod( 'tozem_stay_amenity_note', __('※寝巻きのご用意はございません', 'tozem') ) ) : ?>
                            <li class="text-xs text-gray-400 pt-2"><?php echo esc_html( get_theme_mod( 'tozem_stay_amenity_note', __('※寝巻きのご用意はございません', 'tozem') ) ); ?></li>
                        <?php endif; ?>
                    </ul>
                </section>

                <section class="space-y-6">
                    <h4 class="text-lg tracking-[0.1em] border-b border-gray-200 pb-3 text-gray-900">
                        <?php echo esc_html( get_theme_mod( 'tozem_stay_kitchen_title', __('キッチン設備 (無料)', 'tozem') ) ); ?>
                    </h4>
                    <ul class="space-y-3 text-gray-600">
                        <?php
                        $list = get_theme_mod( 'tozem_stay_kitchen_list', "ガスコンロ / 冷蔵庫 / 冷凍庫\n電気炊飯器 / 電気ポット / 土鍋\nカセットコンロ (ボンベは持参)\n調理器具一式 (鍋・フライパン他)\n食器・カトラリー一式\nお子様用プラ食器" );
                        $items = explode( "\n", $list );
                        foreach ( $items as $item ) {
                            if ( trim( $item ) ) {
                                echo '<li class="flex items-center space-x-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span><span>' . esc_html( trim( $item ) ) . '</span></li>';
                            }
                        }
                        ?>
                    </ul>
                </section>

                <section class="space-y-6">
                    <h4 class="text-lg tracking-[0.1em] border-b border-gray-200 pb-3 text-gray-900">
                        <?php echo esc_html( get_theme_mod( 'tozem_stay_other_title', __('その他・オプション', 'tozem') ) ); ?>
                    </h4>
                    <ul class="space-y-3 text-gray-600">
                        <?php
                        $list = get_theme_mod( 'tozem_stay_other_list', "屋根付きウッドデッキ\n外テーブル\nバーベキュー台 (有料レンタル ¥5,000)\n駐車場 (2台)\n全館禁煙 (屋外に灰皿あり)" );
                        $items = explode( "\n", $list );
                        foreach ( $items as $item ) {
                            if ( trim( $item ) ) {
                                echo '<li class="flex items-center space-x-2"><span class="w-1 h-1 bg-gray-300 rounded-full"></span><span>' . esc_html( trim( $item ) ) . '</span></li>';
                            }
                        }
                        ?>
                    </ul>
                </section>
            </div>


        </div>
    </div>
</section>
