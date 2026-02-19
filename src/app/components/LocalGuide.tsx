import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";
import { Anchor, Fish, ShoppingCart, Waves, ExternalLink, Info } from "lucide-react";

export function LocalGuide() {
    const { ref, isInView } = useInView({ threshold: 0.1 });

    const seaSpots = [
        {
            name: "波左間海岸・沖ノ島",
            description: "遠浅の砂浜の海水浴場で、小さなお子様やご家族でも楽しめます。週末は混雑しやすく、10時頃に満車になる場合もあるため、早めの確保がおすすめです。",
            type: "海水浴・砂浜"
        },
        {
            name: "西川名（宿の目の前）",
            description: "魚のいる岩場スポットです。ラッシュガード、マリンシューズ、手袋のご用意をおすすめします。※ライフセーバーは常駐していません。",
            type: "シュノーケル・岩場"
        },
        {
            name: "見物海岸",
            description: "砂浜と岩場のある小さな海岸で、磯遊びも楽しめます。駐車場が小さいため、早めの場所確保をおすすめします。※ライフセーバーは常駐していません。",
            type: "磯遊び・岩場"
        }
    ];

    const fishingSpots = [
        {
            name: "宿の目の前（西川名・左側堤防）",
            description: "手軽に楽しめるスポット。※右側堤防は禁漁区のためご注意ください。",
            url: "https://bosotown.com/archives/40004"
        },
        {
            name: "館山港 砂上げ場",
            description: "車を横付けして楽しめる、ファミリーにも人気のスポットです。",
        }
    ];

    const shoppingSpots = [
        {
            name: "おどや大神宮店",
            description: "宿から約10分の最寄りスーパー。食材の買い出しに便利です。",
            tag: "スーパー"
        },
        {
            name: "わくわく広場 館山店",
            description: "地元の新鮮な野菜や特産品が並ぶ産直市場です。",
            url: "https://wakuwaku-hiroba.com/shop/%E3%82%8F%E3%81%8F%E3%82%8F%E3%81%8F%E5%BA%83%E5%A0%B4%E3%80%80%E9%A4%A8%E5%B1%B1%E5%BA%97/",
            tag: "産直"
        },
        {
            name: "渚のマルシェ",
            description: "道の駅「渚の駅 たてやま」内。お土産や海産物が充実しています。",
            url: "https://www.nagisaplace-tateyama.com/",
            tag: "マルシェ"
        },
        {
            name: "まるい鮮魚店",
            description: "地魚や貝類、干物など、新鮮な海産物が購入できます。",
            url: "https://www.marui-sakanaya.com/",
            tag: "鮮魚"
        },
        {
            name: "パイオニアファーム",
            description: "いちじくスイーツがおすすめの農園。※いちじく狩りは要予約です。",
            url: "https://www.pioneer-farm.jp/pages/access",
            tag: "スイーツ"
        }
    ];

    return (
        <section id="guide" className="py-32 bg-white" ref={ref}>
            <div className="container mx-auto px-4 sm:px-6 lg:px-8">
                <motion.div
                    className="text-center mb-20"
                    initial={{ opacity: 0, y: 30 }}
                    animate={isInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ duration: 1 }}
                >
                    <h2 className="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
                        周辺ガイド
                    </h2>
                    <div className="w-12 h-px bg-gray-900 mx-auto mb-6" />
                    <p className="text-gray-600 tracking-[0.1em]">Local Guide</p>
                </motion.div>

                <div className="max-w-6xl mx-auto space-y-24">
                    {/* Sea & Fishing */}
                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
                        <motion.div
                            initial={{ opacity: 0, x: -30 }}
                            animate={isInView ? { opacity: 1, x: 0 } : {}}
                            transition={{ duration: 1, delay: 0.2 }}
                            className="space-y-8"
                        >
                            <div className="flex items-center space-x-4 border-b border-gray-100 pb-4">
                                <Waves className="text-blue-400" size={28} strokeWidth={1.5} />
                                <h3 className="text-2xl tracking-[0.1em]">海スポット</h3>
                            </div>
                            <div className="space-y-6">
                                {seaSpots.map((spot, idx) => (
                                    <div key={idx} className="group">
                                        <div className="flex justify-between items-baseline mb-2">
                                            <h4 className="text-lg font-medium tracking-[0.05em]">{spot.name}</h4>
                                            <span className="text-xs text-blue-500 bg-blue-50 px-2 py-1 rounded">{spot.type}</span>
                                        </div>
                                        <p className="text-sm text-gray-600 leading-relaxed">{spot.description}</p>
                                    </div>
                                ))}
                            </div>
                        </motion.div>

                        <motion.div
                            initial={{ opacity: 0, x: 30 }}
                            animate={isInView ? { opacity: 1, x: 0 } : {}}
                            transition={{ duration: 1, delay: 0.4 }}
                            className="space-y-8"
                        >
                            <div className="flex items-center space-x-4 border-b border-gray-100 pb-4">
                                <Fish className="text-cyan-500" size={28} strokeWidth={1.5} />
                                <h3 className="text-2xl tracking-[0.1em]">釣りスポット</h3>
                            </div>
                            <div className="space-y-6">
                                {fishingSpots.map((spot, idx) => (
                                    <div key={idx}>
                                        <h4 className="text-lg font-medium tracking-[0.05em] mb-2 flex items-center">
                                            {spot.name}
                                            {spot.url && (
                                                <a href={spot.url} target="_blank" rel="noopener noreferrer" className="ml-2 text-gray-400 hover:text-gray-900">
                                                    <ExternalLink size={14} />
                                                </a>
                                            )}
                                        </h4>
                                        <p className="text-sm text-gray-600 leading-relaxed">{spot.description}</p>
                                    </div>
                                ))}
                                <div className="p-4 bg-gray-50 rounded-sm space-y-3">
                                    <h5 className="text-sm font-medium flex items-center">
                                        <ShoppingCart size={16} className="mr-2" /> 釣具店・装備について
                                    </h5>
                                    <ul className="text-xs text-gray-600 space-y-2">
                                        <li>・<a href="https://instagram.com/tateyama.fishing?igshid=NTc4MTIwNjQ2YQ==" target="_blank" className="underline hover:text-gray-900">ランド館山総合館</a></li>
                                        <li>・<a href="https://yacs.jp/store/store-361/" target="_blank" className="underline hover:text-gray-900">アタックファイブ（ヤックス内）</a></li>
                                        <li>※おどや大神宮店、カインズ館山でも簡易釣具の購入が可能です。</li>
                                    </ul>
                                    <p className="text-[10px] text-gray-500 pt-2 border-t border-gray-200">
                                        宿ではお子様用ライフジャケットやタモ網の貸出もございます（有料）。
                                    </p>
                                </div>
                            </div>
                        </motion.div>
                    </div>

                    {/* Shopping & Option */}
                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
                        <motion.div
                            initial={{ opacity: 0, y: 30 }}
                            animate={isInView ? { opacity: 1, y: 0 } : {}}
                            transition={{ duration: 1, delay: 0.6 }}
                            className="space-y-8"
                        >
                            <div className="flex items-center space-x-4 border-b border-gray-100 pb-4">
                                <ShoppingCart className="text-orange-400" size={28} strokeWidth={1.5} />
                                <h3 className="text-2xl tracking-[0.1em]">お買い物・産直</h3>
                            </div>
                            <div className="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                                {shoppingSpots.map((spot, idx) => (
                                    <div key={idx} className="space-y-1">
                                        <h4 className="text-sm font-medium tracking-[0.05em] flex items-center">
                                            {spot.name}
                                            {spot.url && (
                                                <a href={spot.url} target="_blank" rel="noopener noreferrer" className="ml-1 text-gray-400 hover:text-gray-900">
                                                    <ExternalLink size={12} />
                                                </a>
                                            )}
                                        </h4>
                                        <p className="text-xs text-gray-500 leading-relaxed">{spot.description}</p>
                                    </div>
                                ))}
                            </div>
                        </motion.div>

                        <motion.div
                            initial={{ opacity: 0, y: 30 }}
                            animate={isInView ? { opacity: 1, y: 0 } : {}}
                            transition={{ duration: 1, delay: 0.8 }}
                            className="space-y-8 h-full flex flex-col"
                        >
                            <div className="flex items-center space-x-4 border-b border-gray-100 pb-4">
                                <Anchor className="text-gray-400" size={28} strokeWidth={1.5} />
                                <h3 className="text-2xl tracking-[0.1em]">オプション・レンタル</h3>
                            </div>
                            <div className="bg-gray-50 px-8 pb-8 pt-12 rounded-lg space-y-6 flex-grow flex flex-col !mt-0">
                                <div className="space-y-4">
                                    <div className="flex justify-between items-baseline border-b border-gray-200 pb-2">
                                        <span className="text-sm font-medium tracking-[0.05em]">釣竿レンタル（1日）</span>
                                        <span className="font-serif">¥3,500</span>
                                    </div>
                                    <div className="flex justify-between items-baseline border-b border-gray-200 pb-2">
                                        <span className="text-sm font-medium tracking-[0.05em]">スノーケル3点セット（1日）</span>
                                        <span className="font-serif">¥3,500</span>
                                    </div>
                                    <div className="flex justify-between items-baseline border-b border-gray-200 pb-2">
                                        <span className="text-sm font-medium tracking-[0.05em]">BBQ施設利用料</span>
                                        <span className="font-serif">¥5,000</span>
                                    </div>
                                    <div className="flex justify-between items-baseline border-b border-gray-200 pb-2">
                                        <span className="text-sm font-medium tracking-[0.05em]">ライフジャケット / タモ網</span>
                                        <span className="font-serif">¥500</span>
                                    </div>
                                </div>
                                <div className="flex items-start space-x-2 text-xs text-gray-500 bg-white p-3 border border-gray-100 italic mt-auto">
                                    <Info size={14} className="flex-shrink-0 mt-0.5" />
                                    <p>
                                        西川名の海は魚影豊かな岩場です。安全のためマリンシューズ・手袋・ラッシュガードの着用をおすすめします（一部無料貸出あり）。
                                    </p>
                                </div>
                            </div>
                        </motion.div>
                    </div>
                </div>
            </div>
        </section>
    );
}
