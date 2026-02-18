<section id="gallery" class="py-32 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
                <?php _e('ギャラリー', 'tozem'); ?>
            </h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6"></div>
            <p class="text-gray-600 tracking-[0.1em]">Gallery</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $gallery_images = [
                [
                    'url' => 'https://images.unsplash.com/photo-1581845912101-b79003f1b71e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxvY2VhbiUyMHN1bnNldCUyMGNhbG0lMjBwZWFjZWZ1bHxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
                    'alt' => 'Ocean view',
                ],
                [
                    'url' => 'https://images.unsplash.com/photo-1745813083465-c753b40e6bd4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0YXRhbWklMjByb29tJTIwamFwYW5lc2V8ZW58MXx8fHwxNzcxMzg4MjY1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
                    'alt' => 'Tatami room',
                ],
                [
                    'url' => 'https://images.unsplash.com/photo-1658664566242-d2a09a92a53e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHNlYXNpZGUlMjBob3VzZSUyMG9jZWFufGVufDF8fHx8MTc3MTM4ODI2M3ww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
                    'alt' => 'Exterior',
                ],
                [
                    'url' => 'https://images.unsplash.com/photo-1761748561933-555d8f209a74?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb2FzdGFsJTIwamFwYW4lMjBuYXR1cmV8ZW58MXx8fHwxNzcxMzg4MjY1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
                    'alt' => 'Nature',
                ],
                [
                    'url' => 'https://images.unsplash.com/photo-1759310706794-b8a350561d93?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHRyYWRpdGlvbmFsJTIwaG91c2UlMjBpbnRlcmlvcnxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
                    'alt' => 'Interior',
                ],
                [
                    'url' => 'https://images.unsplash.com/photo-1763824372117-1ff339b522e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYW5kY3JhZnQlMjB3b3Jrc2hvcCUyMHBvdHRlcnl8ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
                    'alt' => 'Workshop',
                ],
            ];
            foreach ($gallery_images as $index => $image) : ?>
                <div class="aspect-[4/3] overflow-hidden group cursor-pointer bg-gray-100 fade-up" data-delay="<?php echo $index * 100; ?>">
                    <img 
                        src="<?php echo esc_url($image['url']); ?>" 
                        alt="<?php echo esc_attr($image['alt']); ?>" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000"
                    />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
