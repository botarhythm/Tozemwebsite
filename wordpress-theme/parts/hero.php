<section id="hero" class="relative h-screen w-full overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img 
            src="<?php echo esc_url( get_theme_mod( 'tozem_hero_img', 'https://images.unsplash.com/photo-1581845912101-b79003f1b71e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxvY2VhbiUyMHN1bnNldCUyMGNhbG0lMjBwZWFjZWZ1bHxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral' ) ); ?>" 
            alt="<?php esc_attr_e('Hero Background', 'tozem'); ?>" 
            class="w-full h-full object-cover"
            loading="eager"
            fetchpriority="high"
        />
        <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <!-- Content -->
    <div class="relative h-full flex flex-col items-center justify-center text-center px-4">
        <header class="space-y-4 md:space-y-8 fade-up" data-delay="0">
            <h1 class="text-4xl md:text-5xl lg:text-7xl text-white tracking-[0.3em] fade-up" data-delay="300">
                <?php echo esc_html( get_theme_mod( 'tozem_hero_title', __('藤ゼム', 'tozem') ) ); ?>
            </h1>
            
            <p class="text-sm md:text-base text-white/90 tracking-[0.25em] mb-8 fade-up" data-delay="600">
                <?php echo esc_html( get_theme_mod( 'tozem_hero_subtitle', 'TOZEM' ) ); ?>
            </p>

            <p class="text-base md:text-lg lg:text-xl text-white/95 tracking-[0.15em] leading-relaxed max-w-2xl fade-up" data-delay="900">
                <?php echo nl2br( esc_html( get_theme_mod( 'tozem_hero_catch', __('海のそばで、静かに過ごす時間', 'tozem') ) ) ); ?>
            </p>
        </header>

        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 w-px bg-white/50 grow-y" data-delay="1500" aria-hidden="true"></div>
    </div>
</section>
