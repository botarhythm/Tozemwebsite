import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";
import { ImageWithFallback } from "./figma/ImageWithFallback";

export function Activities() {
    const { ref, isInView } = useInView({ threshold: 0.2 });

    return (
        <section id="activities" className="py-32 bg-gray-50" ref={ref}>
            <div className="container mx-auto px-4 sm:px-6 lg:px-8">
                <motion.div
                    className="text-center mb-20"
                    initial={{ opacity: 0, y: 30 }}
                    animate={isInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ duration: 1 }}
                >
                    <h2 className="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
                        アクティビティ
                    </h2>
                    <div className="w-12 h-px bg-gray-900 mx-auto mb-6" />
                    <p className="text-gray-600 tracking-[0.1em]">Activities</p>
                </motion.div>

                <div className="max-w-6xl mx-auto">
                    <motion.div
                        className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32"
                        initial={{ opacity: 0, y: 40 }}
                        animate={isInView ? { opacity: 1, y: 0 } : {}}
                        transition={{ duration: 1, delay: 0.2 }}
                    >
                        <div className="aspect-[4/3] overflow-hidden">
                            <ImageWithFallback
                                src="https://images.unsplash.com/photo-1544077960-604201fe74bc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiYnElMjBnYXJkZW58ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                                alt="BBQの様子"
                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                            />
                        </div>
                        <div className="space-y-6">
                            <h3 className="text-2xl md:text-3xl tracking-[0.15em]">BBQ</h3>
                            <p className="text-gray-700 leading-loose tracking-[0.05em]">
                                屋根付きのウッドデッキで、雨の日でも安心してBBQをお楽しみいただけます。
                                静かな潮風を感じながら、地元の食材を囲む贅沢なひとときを。
                            </p>
                            <div className="space-y-4 pt-6 border-t border-gray-200">
                                <p className="text-sm text-gray-600 leading-relaxed">
                                    利用料: 5,000円/日（コンロ、網、トング、テーブル等の機材一式）<br />
                                    <span className="text-xs text-gray-500">
                                        ※食材、炭、着火剤、調味料、鉄板はご持参ください。<br />
                                        ※お庭での手持ち花火も可能です（20:30まで、打ち上げ不可）。
                                    </span>
                                </p>
                            </div>
                        </div>
                    </motion.div>

                    <motion.div
                        className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32"
                        initial={{ opacity: 0, y: 40 }}
                        animate={isInView ? { opacity: 1, y: 0 } : {}}
                        transition={{ duration: 1, delay: 0.4 }}
                    >
                        <div className="aspect-[4/3] overflow-hidden lg:order-2">
                            <ImageWithFallback
                                src="https://images.unsplash.com/photo-1518173946687-a4c8a9b749f5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyb2NreSUyMGJlYWNoJTIwamFwYW58ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                                alt="西川名の海"
                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                            />
                        </div>
                        <div className="space-y-6 lg:order-1">
                            <h3 className="text-2xl md:text-3xl tracking-[0.15em]">海遊び・釣り</h3>
                            <p className="text-gray-700 leading-loose tracking-[0.05em]">
                                徒歩2分の目の前の海は、透明度抜群の岩場。
                                磯遊びやシュノーケリングで、色鮮やかな熱帯魚に出会えることも。
                            </p>
                            <div className="space-y-4 pt-6 border-t border-gray-200">
                                <p className="text-sm text-gray-600 leading-relaxed">
                                    外シャワー完備で海上がりも快適です。岩場ですのでマリンシューズのご持参をお勧めします。<br />
                                    <span className="text-xs text-gray-500">※海水浴場（波左間、沖の島など）へも車で5〜15分でアクセス可能です。</span>
                                </p>
                            </div>
                        </div>
                    </motion.div>

                    <motion.div
                        className="grid grid-cols-1 md:grid-cols-2 gap-12 items-start"
                        initial={{ opacity: 0, y: 30 }}
                        animate={isInView ? { opacity: 1, y: 0 } : {}}
                        transition={{ duration: 1, delay: 0.6 }}
                    >
                        <div className="space-y-6">
                            <h3 className="text-2xl md:text-3xl tracking-[0.15em]">周辺スポット</h3>
                            <div className="space-y-8">
                                <div className="space-y-4">
                                    <h4 className="text-lg tracking-[0.1em] border-b border-gray-200 pb-2">アクティビティ</h4>
                                    <ul className="text-sm text-gray-600 space-y-3">
                                        <li><span className="font-medium">陶芸体験:</span> 雨天でも楽しめます（要事前確認）。</li>
                                        <li><span className="font-medium">ダイビング:</span> 西川名ダイビングサービス・港まで徒歩1分。</li>
                                        <li><span className="font-medium">ゴルフ:</span> 館山カントリー（車8分）、房州カントリー（車12分）。</li>
                                    </ul>
                                </div>
                                <div className="space-y-4">
                                    <h4 className="text-lg tracking-[0.1em] border-b border-gray-200 pb-2">観光・癒やし</h4>
                                    <ul className="text-sm text-gray-600 space-y-3">
                                        <li><span className="font-medium">温泉:</span> 千里の風・花しぶき（車10分）、里見の湯（車20分）。</li>
                                        <li><span className="font-medium">灯台:</span> 洲崎灯台（車4分）、野島崎灯台（車24分）。</li>
                                        <li><span className="font-medium">絶景:</span> 富士山の眺望や、伊豆大島を臨む夕日が楽しめます。</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="aspect-video bg-gray-100 overflow-hidden">
                            <ImageWithFallback
                                src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMG9uc2VuJTIwdmlld3xlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                                alt="周辺の温泉"
                                className="w-full h-full object-cover"
                            />
                        </div>
                    </motion.div>
                </div>
            </div>
        </section>
    );
}
