<?php get_header(); ?>

<main class="min-h-screen bg-white py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="text-center mb-16 fade-up">
                <h1 class="text-3xl md:text-4xl tracking-[0.2em] font-light mb-4"><?php the_title(); ?></h1>
                <div class="w-12 h-px bg-gray-900 mx-auto"></div>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed fade-up" data-delay="200">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
