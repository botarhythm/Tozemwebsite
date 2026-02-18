<section id="reservation" class="pt-16 pb-32 bg-white">
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

            <!-- Pricing Info -->
            <div class="mb-20 space-y-12 fade-up" data-delay="200">
                <div class="space-y-6">
                    <h3 class="text-xl tracking-[0.1em] text-center"><?php _e('宿泊料金（税込）', 'tozem'); ?></h3>
                    <p class="text-sm text-center text-gray-500"><?php _e('※1棟貸切 4名様までの基本料金です', 'tozem'); ?></p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="p-6 bg-gray-50 space-y-2">
                            <h4 class="font-medium tracking-[0.1em]"><?php _e('通常日', 'tozem'); ?></h4>
                            <p class="text-2xl font-serif">¥40,000~</p>
                        </div>
                        <div class="p-6 bg-gray-50 space-y-2">
                            <h4 class="font-medium tracking-[0.1em]"><?php _e('ハイシーズン', 'tozem'); ?></h4>
                            <p class="text-2xl font-serif">¥46,000~</p>
                            <p class="text-xs text-gray-500">7/13-9/30, GW</p>
                        </div>
                        <div class="p-6 bg-gray-50 space-y-2">
                            <h4 class="font-medium tracking-[0.1em]"><?php _e('特定日', 'tozem'); ?></h4>
                            <p class="text-2xl font-serif">¥52,000~</p>
                            <p class="text-xs text-gray-500">8/9-17, 12/20-1/5</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 space-y-4 text-sm tracking-[0.05em]">
                        <p>
                            <span class="font-medium"><?php _e('追加料金（1名様あたり）:', 'tozem'); ?></span><br/>
                            <?php _e('大人（中学生以上）: ¥9,000 / 子供（3歳以上）: ¥5,000', 'tozem'); ?><br/>
                            <?php _e('※2歳以下（添い寝）は無料', 'tozem'); ?>
                        </p>
                        <p>
                            <span class="font-medium"><?php _e('連泊割引:', 'tozem'); ?></span> <?php _e('2泊目以降 ¥3,000 引き（清掃なし）', 'tozem'); ?>
                        </p>
                        <p>
                            <span class="font-medium"><?php _e('時間外利用:', 'tozem'); ?></span> <?php _e('¥5,000 / 1h（要相談）', 'tozem'); ?>
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-xl tracking-[0.1em] text-center"><?php _e('キャンセルポリシー', 'tozem'); ?></h3>
                    <div class="max-w-md mx-auto bg-gray-50 p-6 text-sm tracking-[0.05em] space-y-2">
                        <div class="flex justify-between border-b border-gray-200 pb-2">
                            <span><?php _e('30日〜15日前', 'tozem'); ?></span>
                            <span>10%</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2">
                            <span><?php _e('14日〜8日前', 'tozem'); ?></span>
                            <span>50%</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-2">
                            <span><?php _e('7日〜3日前', 'tozem'); ?></span>
                            <span>80%</span>
                        </div>
                        <div class="flex justify-between">
                            <span><?php _e('2日〜当日', 'tozem'); ?></span>
                            <span>100%</span>
                        </div>
                        <p class="text-xs text-gray-400 mt-2 pt-2">
                            <?php _e('※30日以前は全額返金（振込手数料はお客様負担）', 'tozem'); ?>
                        </p>
                    </div>
                </div>
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
