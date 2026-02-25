<?php
/**
 * The template for displaying the blog posts index (home.php)
 */
get_header(); ?>

<main id="main">
    <!-- Page Header -->
    <section class="pt-32 pb-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl mb-6 tracking-[0.2em] font-light">
                    <?php single_post_title(); ?>
                </h1>
                <div class="w-12 h-px bg-gray-900 mx-auto mb-6"></div>
                <p class="text-gray-600 tracking-[0.1em]">News & Blog</p>
            </div>
        </div>
    </section>

    <!-- Blog List Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
            <?php if ( have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('group fade-up'); ?>>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="block">
                                <!-- Thumbnail -->
                                <div class="aspect-[4/3] overflow-hidden mb-6 bg-gray-100">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Meta & Title -->
                                <div class="space-y-3">
                                    <div class="flex items-center space-x-4 text-xs text-gray-500 tracking-wider">
                                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<span class="text-gray-400">|</span><span>' . esc_html( $categories[0]->name ) . '</span>';
                                        }
                                        ?>
                                    </div>
                                    <h2 class="text-xl tracking-wide group-hover:text-gray-600 transition-colors line-clamp-2 leading-relaxed">
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-20 flex justify-center fade-up">
                    <?php 
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => '<span class="px-2">&larr;</span>',
                        'next_text' => '<span class="px-2">&rarr;</span>',
                        'class'     => 'pagination-wrapper text-sm tracking-[0.1em]',
                    ) ); 
                    ?>
                </div>

            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-gray-600 tracking-wider"><?php _e('現在、記事はありません。', 'tozem'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<style>
/* Custom Pagination Styles */
.pagination-wrapper .nav-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}
.pagination-wrapper .page-numbers {
    padding: 0.5rem 1rem;
    border: 1px solid #e5e7eb;
    color: #4b5563;
    transition: all 0.3s ease;
}
.pagination-wrapper .page-numbers:hover,
.pagination-wrapper .page-numbers.current {
    background-color: #111827;
    color: #ffffff;
    border-color: #111827;
}
</style>

<?php get_footer(); ?>
