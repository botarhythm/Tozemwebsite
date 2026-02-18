import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";

export function Story() {
  const { ref, isInView } = useInView({ threshold: 0.3 });

  return (
    <section className="py-32 bg-white" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="max-w-3xl mx-auto">
          <motion.div
            className="space-y-12 text-center"
            initial={{ opacity: 0, y: 40 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 1 }}
          >
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl tracking-[0.2em]">
                藤ゼムと西川名
              </h2>
              <div className="w-12 h-px bg-gray-900 mx-auto" />
            </div>

            <motion.div
              className="space-y-12 text-gray-700 leading-loose text-left"
              initial={{ opacity: 0 }}
              animate={isInView ? { opacity: 1 } : {}}
              transition={{ duration: 1, delay: 0.3 }}
            >
              <div className="space-y-6">
                <h3 className="text-xl tracking-[0.1em] font-medium text-center md:text-left">
                  西川名ってどんなところ…
                </h3>
                <p className="tracking-[0.05em]">
                  藤ゼムは館山市西川名の集落の中にあります。<br />
                  温暖な房総半島のさらに端っこ。<br />
                  ほぼ東西に伸びていて海に突き出た岬の形から「西岬（にしざき）」の名前がつけられました。
                </p>
                <p className="tracking-[0.05em]">
                  東から西まで約8キロに点在する海岸は、砂地や岩場と様々な顔があり、変化に富んだ景観が魅力です。<br />
                  その中でも西川名は山地と海が隣り合わせの他にない珍しい地形。<br />
                  魚影の濃い海はとても透明度が高く、たくさんの魅力的な生き物が見られます。<br />
                  とても美しい景観の、豊かな自然の中の集落です。
                </p>
              </div>

              <div className="space-y-6">
                <h3 className="text-xl tracking-[0.1em] font-medium text-center md:text-left">
                  名前の由来…
                </h3>
                <p className="tracking-[0.05em]">
                  宿のある集落には、同じ苗字の家がたくさんあります。<br />
                  各家にそれぞれ屋号があり、今でも互いに屋号で呼び合う文化があります。
                </p>
                <p className="tracking-[0.05em]">
                  藤ゼムは「藤左衛門（とうざえもん）」で「藤ゼム」。<br />
                  文化とこの土地の暮らしになじんだ名前を大切にし、建物と一緒に引き継ぎました。
                </p>
              </div>

              <div className="space-y-6 pt-6 border-t border-gray-100">
                <p className="tracking-[0.05em]">
                  気持ちのいい風が抜ける路地、ゆったりと流れる時間。<br />
                  この土地に住み暮らす日常を、体感しにいらしてください。
                </p>
                <p className="tracking-[0.05em] text-lg text-center md:text-left">
                  海辺の街に、ふるさとがもう一つできたと感じて頂けたら嬉しいです。
                </p>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
