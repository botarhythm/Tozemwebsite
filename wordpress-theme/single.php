<?php
/**
 * The template for displaying all single posts
 */
get_header(); ?>

<main id="main">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Article Header -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="pt-32 pb-16 bg-gray-50">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl text-center fade-up">
                    
                    <div class="flex justify-center items-center space-x-4 mb-6 text-sm text-gray-500 tracking-wider">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="text-gray-400">|</span><span>' . esc_html( $categories[0]->name ) . '</span>';
                        }
                        ?>
                    </div>
                    
                    <h1 class="text-2xl md:text-3xl tracking-wide font-light leading-snug mb-8 text-gray-900">
                        <?php the_title(); ?>
                    </h1>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="aspect-video w-full rounded-sm overflow-hidden mt-10">
                            <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </header>

            <!-- Article Content -->
            <div class="py-16 bg-white">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">
                    <div class="prose prose-lg max-w-none text-gray-700 leading-loose tracking-[0.05em] fade-up" data-delay="200">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Post Navigation -->
                    <div class="mt-20 pt-10 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center gap-6">
                        <div class="w-full md:w-1/2 text-left">
                            <?php previous_post_link('%link', '<span class="block text-xs tracking-widest text-gray-400 mb-1">PREVIOUS</span><span class="text-sm md:text-base text-gray-800 hover:text-gray-500 transition-colors line-clamp-2">%title</span>'); ?>
                        </div>
                        <div class="w-full md:w-1/2 text-right">
                            <?php next_post_link('%link', '<span class="block text-xs tracking-widest text-gray-400 mb-1">NEXT</span><span class="text-sm md:text-base text-gray-800 hover:text-gray-500 transition-colors line-clamp-2">%title</span>'); ?>
                        </div>
                    </div>
                    
                    <div class="mt-16 text-center">
                        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="inline-block border border-gray-900 px-8 py-3 text-sm tracking-[0.2em] hover:bg-gray-900 hover:text-white transition-colors duration-300">
                            BACK TO NEWS
                        </a>
                    </div>
                </div>
            </div>
        </article>

    <?php endwhile; ?>
</main>

<style>
/* WordPress Core Content Styles Overlay for Tailwind */
.prose h2 { margin-top: 2.5em; margin-bottom: 1em; font-size: 1.5rem; letter-spacing: 0.1em; font-weight: normal; color: #111827; }
.prose h3 { margin-top: 2em; margin-bottom: 1em; font-size: 1.25rem; letter-spacing: 0.1em; font-weight: normal; color: #1f2937; }
.prose p { margin-bottom: 1.5em; }
.prose a { color: #4b5563; text-decoration: underline; text-underline-offset: 4px; }
.prose a:hover { color: #111827; }
.prose ul { list-style-type: disc; padding-left: 1.5em; margin-bottom: 1.5em; }
.prose ol { list-style-type: decimal; padding-left: 1.5em; margin-bottom: 1.5em; }
.prose li { margin-bottom: 0.5em; }
.prose blockquote { border-left: 4px solid #e5e7eb; padding-left: 1em; color: #6b7280; font-style: italic; margin-bottom: 1.5em; }
.prose img { max-width: 100%; height: auto; border-radius: 0.125rem; margin-top: 2em; margin-bottom: 2em; }
</style>

<?php get_footer(); ?>
