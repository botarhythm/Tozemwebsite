import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";

export function Concept() {
  const { ref, isInView } = useInView({ threshold: 0.3 });

  return (
    <section id="concept" className="py-32 bg-white" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="max-w-4xl mx-auto">
          <motion.div
            className="space-y-16 text-center"
            initial={{ opacity: 0, y: 40 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 1 }}
          >
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl lg:text-5xl tracking-[0.2em]">
                藤ゼムとは
              </h2>
              <div className="w-12 h-px bg-gray-900 mx-auto" />
            </div>

            <motion.div
              className="space-y-12 text-gray-700 leading-loose"
              initial={{ opacity: 0 }}
              animate={isInView ? { opacity: 1 } : {}}
              transition={{ duration: 1, delay: 0.3 }}
            >
              <p className="text-base md:text-lg tracking-[0.1em]">
                千葉県館山市、西川名。<br />
                海のそばにたたずむ、古民家一棟貸しの宿。
              </p>

              <p className="text-base md:text-lg tracking-[0.1em]">
                光が、海が、余白が、<br />
                あなたを本来の自分へと還していく。
              </p>

              <p className="text-base md:text-lg tracking-[0.1em]">
                飾らない土地の呼吸に、そっと心を委ねる。<br />
                自然と余白を感じる滞在体験を。
              </p>
            </motion.div>

            <motion.div
              className="grid grid-cols-1 md:grid-cols-3 gap-8 pt-12"
              initial={{ opacity: 0, y: 30 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 1, delay: 0.6 }}
            >
              <div className="space-y-4">
                <div className="text-4xl text-gray-300">01</div>
                <h3 className="text-lg tracking-[0.15em]">光</h3>
                <p className="text-sm text-gray-600 tracking-[0.05em] leading-relaxed">
                  時間と共に変わる<br />自然光の移ろい
                </p>
              </div>

              <div className="space-y-4">
                <div className="text-4xl text-gray-300">02</div>
                <h3 className="text-lg tracking-[0.15em]">海</h3>
                <p className="text-sm text-gray-600 tracking-[0.05em] leading-relaxed">
                  波の音に包まれる<br />静かな時間
                </p>
              </div>

              <div className="space-y-4">
                <div className="text-4xl text-gray-300">03</div>
                <h3 className="text-lg tracking-[0.15em]">余白</h3>
                <p className="text-sm text-gray-600 tracking-[0.05em] leading-relaxed">
                  何もしない贅沢<br />自分を取り戻す空間
                </p>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
