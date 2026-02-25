<section id="concept" class="py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="space-y-16 text-center fade-up">
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl tracking-[0.2em]">
                        <?php echo esc_html( get_theme_mod( 'tozem_concept_title', __('藤ゼムとは', 'tozem') ) ); ?>
                    </h2>
                    <div class="w-12 h-px bg-gray-900 mx-auto"></div>
                </div>

                <div class="space-y-12 text-gray-700 leading-loose fade-up" data-delay="300">
                    <p class="text-base md:text-lg tracking-[0.1em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_concept_text_1', __("千葉県館山市、西川名。\n海のそばにたたずむ、古民家一棟貸しの宿。", 'tozem') ) ) ); ?>
                    </p>

                    <p class="text-base md:text-lg tracking-[0.1em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_concept_text_2', __("光が、海が、余白が、\nあなたを本来の自分へと還していく。", 'tozem') ) ) ); ?>
                    </p>

                    <p class="text-base md:text-lg tracking-[0.1em]">
                        <?php echo nl2br( esc_html( get_theme_mod( 'tozem_concept_text_3', __("飾らない土地の呼吸に、そっと心を委ねる。\n自然と余白を感じる滞在体験を。", 'tozem') ) ) ); ?>
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-12 fade-up" data-delay="600">
                    <div class="space-y-4">
                        <div class="text-4xl text-gray-300">01</div>
                        <h3 class="text-lg tracking-[0.15em]"><?php echo esc_html( get_theme_mod( 'tozem_concept_feat1_title', __('光', 'tozem') ) ); ?></h3>
                        <p class="text-sm text-gray-600 tracking-[0.05em] leading-relaxed">
                            <?php echo nl2br( esc_html( get_theme_mod( 'tozem_concept_feat1_text', __("時間と共に変わる\n自然光の移ろい", 'tozem') ) ) ); ?>
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="text-4xl text-gray-300">02</div>
                        <h3 class="text-lg tracking-[0.15em]"><?php echo esc_html( get_theme_mod( 'tozem_concept_feat2_title', __('海', 'tozem') ) ); ?></h3>
                        <p class="text-sm text-gray-600 tracking-[0.05em] leading-relaxed">
                            <?php echo nl2br( esc_html( get_theme_mod( 'tozem_concept_feat2_text', __("波の音に包まれる\n静かな時間", 'tozem') ) ) ); ?>
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="text-4xl text-gray-300">03</div>
                        <h3 class="text-lg tracking-[0.15em]"><?php echo esc_html( get_theme_mod( 'tozem_concept_feat3_title', __('余白', 'tozem') ) ); ?></h3>
                        <p class="text-sm text-gray-600 tracking-[0.05em] leading-relaxed">
                            <?php echo nl2br( esc_html( get_theme_mod( 'tozem_concept_feat3_text', __("何もしない贅沢\n自分を取り戻す空間", 'tozem') ) ) ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
