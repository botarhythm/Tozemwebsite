<section id="news" class="py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-16 md:mb-20 fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em] text-gray-900">
                <?php _e('お知らせ', 'tozem'); ?>
            </h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6" aria-hidden="true"></div>
            <p class="text-gray-600 tracking-[0.1em] uppercase">News & Blog</p>
        </header>

        <div class="max-w-5xl mx-auto">
            <?php
            $news_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ) );

            if ( $news_query->have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 fade-up" data-delay="200">
                    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('group h-full'); ?>>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="block h-full flex flex-col focus-ring rounded-xl">
                                <!-- Thumbnail -->
                                <figure class="aspect-[4/3] overflow-hidden mb-6 bg-gray-100 rounded-xl">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700', 'loading' => 'lazy']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-gray-300" aria-label="<?php esc_attr_e('No image available', 'tozem'); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                        </div>
                                    <?php endif; ?>
                                </figure>
                                
                                <!-- Meta & Title -->
                                <div class="space-y-3 flex-grow flex flex-col">
                                    <div class="flex items-center space-x-4 text-xs text-gray-500 tracking-wider">
                                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<span class="text-gray-400" aria-hidden="true">|</span><span>' . esc_html( $categories[0]->name ) . '</span>';
                                        }
                                        ?>
                                    </div>
                                    <h3 class="text-lg tracking-wide text-gray-900 group-hover:text-gray-600 transition-colors line-clamp-2 leading-relaxed">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <div class="mt-16 text-center fade-up" data-delay="400">
                    <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="inline-block border border-gray-900 px-8 py-3 text-sm tracking-[0.2em] hover:bg-gray-900 hover:text-white transition-colors duration-300 focus-ring">
                        <?php _e('記事一覧を見る', 'tozem'); ?>
                    </a>
                </div>
            <?php else : ?>
                <div class="text-center fade-up" data-delay="200">
                    <p class="text-gray-600 tracking-wider"><?php _e('現在、お知らせはありません。', 'tozem'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
