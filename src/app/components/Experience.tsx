import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";
import { ImageWithFallback } from "./figma/ImageWithFallback";

export function Experience() {
  const { ref, isInView } = useInView({ threshold: 0.2 });

  return (
    <section id="experience" className="py-32 bg-white" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          className="text-center mb-20"
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 1 }}
        >
          <h2 className="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
            倉庫体験
          </h2>
          <div className="w-12 h-px bg-gray-900 mx-auto mb-6" />
          <p className="text-gray-600 tracking-[0.1em]">Experience</p>
        </motion.div>

        <div className="max-w-6xl mx-auto">
          <motion.div
            className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center"
            initial={{ opacity: 0, y: 40 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 1, delay: 0.2 }}
          >
            <div className="aspect-[4/3] overflow-hidden">
              <ImageWithFallback
                src="https://images.unsplash.com/photo-1763824372117-1ff339b522e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYW5kY3JhZnQlMjB3b3Jrc2hvcCUyMHBvdHRlcnl8ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                alt="倉庫での手仕事体験"
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
              />
            </div>

            <div className="space-y-8">
              <div className="space-y-6">
                <h3 className="text-2xl md:text-3xl tracking-[0.15em]">
                  手を動かし、整う
                </h3>
                <p className="text-gray-700 leading-loose tracking-[0.05em]">
                  藤ゼムには、宿泊とは別に<br />
                  「倉庫」という体験拠点があります。
                </p>
                <p className="text-gray-700 leading-loose tracking-[0.05em]">
                  手仕事を通じて、<br />
                  頭を空っぽにする時間。<br />
                  集中することで、心が整っていく感覚。
                </p>
              </div>

              <div className="space-y-4 pt-6 border-t border-gray-200">
                <h4 className="tracking-[0.1em]">体験内容</h4>
                <ul className="space-y-3 text-sm text-gray-600">
                  <li className="flex items-start">
                    <span className="w-2 h-2 bg-gray-400 rounded-full mr-3 mt-2 flex-shrink-0" />
                    <span className="tracking-[0.05em]">季節の手仕事体験</span>
                  </li>
                  <li className="flex items-start">
                    <span className="w-2 h-2 bg-gray-400 rounded-full mr-3 mt-2 flex-shrink-0" />
                    <span className="tracking-[0.05em]">少人数制のワークショップ</span>
                  </li>
                  <li className="flex items-start">
                    <span className="w-2 h-2 bg-gray-400 rounded-full mr-3 mt-2 flex-shrink-0" />
                    <span className="tracking-[0.05em]">創作活動を通じた自己との対話</span>
                  </li>
                </ul>
              </div>

              <p className="text-sm text-gray-500 tracking-[0.05em] leading-relaxed">
                ※ 体験内容は季節により変わります<br />
                ※ 事前予約制（詳細はお問い合わせください）
              </p>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
