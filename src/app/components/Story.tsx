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
                なぜ、この場所をつくったのか
              </h2>
              <div className="w-12 h-px bg-gray-900 mx-auto" />
            </div>

            <motion.div
              className="space-y-8 text-gray-700 leading-loose text-left"
              initial={{ opacity: 0 }}
              animate={isInView ? { opacity: 1 } : {}}
              transition={{ duration: 1, delay: 0.3 }}
            >
              <p className="tracking-[0.05em]">
                都市での忙しい日々の中で、<br />
                自分を見失っていく感覚。
              </p>

              <p className="tracking-[0.05em]">
                その時、海のそばで過ごした時間が<br />
                私を本来の自分に還してくれました。
              </p>

              <p className="tracking-[0.05em]">
                光の移ろい、波の音、<br />
                手を動かすことで生まれる静けさ。
              </p>

              <p className="tracking-[0.05em]">
                そんな体験を、多くの人と分かち合いたい。<br />
                この古民家を、そんな場所にしたいと思いました。
              </p>

              <p className="tracking-[0.05em]">
                価格で選ばれる宿ではなく、<br />
                価値で選ばれる場所へ。
              </p>

              <p className="tracking-[0.05em]">
                藤ゼムは、あなたが自分を取り戻すための<br />
                余白のある時間を提供します。
              </p>
            </motion.div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
