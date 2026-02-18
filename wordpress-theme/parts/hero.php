<section id="hero" class="relative h-screen w-full overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img 
            src="https://images.unsplash.com/photo-1581845912101-b79003f1b71e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxvY2VhbiUyMHN1bnNldCUyMGNhbG0lMjBwZWFjZWZ1bHxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" 
            alt="Ocean sunset" 
            class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <!-- Content -->
    <div class="relative h-full flex flex-col items-center justify-center text-center px-4">
        <div class="space-y-8 fade-up" data-delay="0">
            <h1 class="text-4xl md:text-6xl lg:text-7xl text-white tracking-[0.3em] fade-up" data-delay="300">
                <?php _e('藤ゼム', 'tozem'); ?>
            </h1>
            
            <p class="text-sm md:text-base text-white/90 tracking-[0.25em] mb-8 fade-up" data-delay="600">
                TOZEM
            </p>

            <p class="text-base md:text-lg lg:text-xl text-white/95 tracking-[0.15em] leading-relaxed max-w-2xl fade-up" data-delay="900">
                <?php _e('海のそばで、静かに過ごす時間', 'tozem'); ?>
            </p>
        </div>

        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 w-px bg-white/50 grow-y" data-delay="1500"></div>
    </div>
</section>
