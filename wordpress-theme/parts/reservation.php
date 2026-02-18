<section id="reservation" class="py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
                <?php _e('ご予約・お問い合わせ', 'tozem'); ?>
            </h2>
            <div class="w-12 h-px bg-gray-900 mx-auto mb-6"></div>
            <p class="text-gray-600 tracking-[0.1em]">Reservation</p>
        </div>

        <div class="max-w-2xl mx-auto fade-up" data-delay="200">
            <div class="mb-12 text-center space-y-4">
                <p class="text-gray-700 tracking-[0.05em] leading-relaxed">
                    <?php _e('ご予約・ご質問は下記フォームよりお問い合わせください。<br />3営業日以内にご連絡いたします。', 'tozem'); ?>
                </p>
            </div>

            <!-- Note: This form needs a backend handler or a WordPress plugin (like Contact Form 7) to function. -->
            <form action="" method="post" class="space-y-6">
                <div>
                    <label class="block text-sm tracking-[0.1em] mb-2">
                        <?php _e('お名前', 'tozem'); ?> <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors" />
                </div>

                <div>
                    <label class="block text-sm tracking-[0.1em] mb-2">
                        <?php _e('メールアドレス', 'tozem'); ?> <span class="text-red-500">*</span>
                    </label>
                    <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors" />
                </div>

                <div>
                    <label class="block text-sm tracking-[0.1em] mb-2">
                        <?php _e('電話番号', 'tozem'); ?> <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm tracking-[0.1em] mb-2">
                            <?php _e('チェックイン', 'tozem'); ?> <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="checkin" required class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors" />
                    </div>

                    <div>
                        <label class="block text-sm tracking-[0.1em] mb-2">
                            <?php _e('チェックアウト', 'tozem'); ?> <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="checkout" required class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm tracking-[0.1em] mb-2">
                        <?php _e('人数', 'tozem'); ?> <span class="text-red-500">*</span>
                    </label>
                    <select name="guests" required class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors">
                        <option value="1"><?php _e('1名', 'tozem'); ?></option>
                        <option value="2" selected><?php _e('2名', 'tozem'); ?></option>
                        <option value="3"><?php _e('3名', 'tozem'); ?></option>
                        <option value="4"><?php _e('4名', 'tozem'); ?></option>
                        <option value="5"><?php _e('5名', 'tozem'); ?></option>
                        <option value="6"><?php _e('6名', 'tozem'); ?></option>
                        <option value="7"><?php _e('7名', 'tozem'); ?></option>
                        <option value="8"><?php _e('8名', 'tozem'); ?></option>
                        <option value="9"><?php _e('9名', 'tozem'); ?></option>
                        <option value="10"><?php _e('10名', 'tozem'); ?></option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm tracking-[0.1em] mb-2">
                        <?php _e('倉庫体験の希望', 'tozem'); ?>
                    </label>
                    <select name="experience" class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors">
                        <option value="なし"><?php _e('希望しない', 'tozem'); ?></option>
                        <option value="希望する"><?php _e('希望する', 'tozem'); ?></option>
                        <option value="詳細を知りたい"><?php _e('詳細を知りたい', 'tozem'); ?></option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm tracking-[0.1em] mb-2">
                        <?php _e('メッセージ', 'tozem'); ?>
                    </label>
                    <textarea name="message" rows="5" placeholder="<?php _e('ご質問やご要望がございましたらお書きください', 'tozem'); ?>" class="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors resize-none"></textarea>
                </div>

                <button type="submit" class="w-full py-4 bg-gray-900 text-white tracking-[0.2em] hover:bg-gray-800 transition-colors duration-300">
                    <?php _e('送信する', 'tozem'); ?>
                </button>
            </form>
        </div>
    </div>
</section>
