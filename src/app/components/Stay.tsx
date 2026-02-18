import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";
import { ImageWithFallback } from "./figma/ImageWithFallback";
import { Home, Users, Bed, Waves } from "lucide-react";

const features = [
  {
    icon: Home,
    title: "一棟貸し",
    description: "古民家を一棟まるごと貸切",
  },
  {
    icon: Users,
    title: "定員",
    description: "最大10名まで対応可能",
  },
  {
    icon: Bed,
    title: "間取り",
    description: "和室2室＋洋室2室",
  },
  {
    icon: Waves,
    title: "海まで",
    description: "徒歩2分の好立地",
  },
];

export function Stay() {
  const { ref, isInView } = useInView({ threshold: 0.2 });

  return (
    <section id="stay" className="py-32 bg-gray-50" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          className="text-center mb-20"
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 1 }}
        >
          <h2 className="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">宿泊</h2>
          <div className="w-12 h-px bg-gray-900 mx-auto mb-6" />
          <p className="text-gray-600 tracking-[0.1em]">Stay</p>
        </motion.div>

        <div className="max-w-6xl mx-auto">
          <motion.div
            className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20"
            initial={{ opacity: 0, y: 40 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 1, delay: 0.2 }}
          >
            <div className="aspect-[4/3] overflow-hidden">
              <ImageWithFallback
                src="https://images.unsplash.com/photo-1658664566242-d2a09a92a53e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHNlYXNpZGUlMjBob3VzZSUyMG9jZWFufGVufDF8fHx8MTc3MTM4ODI2M3ww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                alt="藤ゼム外観"
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
              />
            </div>

            <div className="space-y-6">
              <h3 className="text-2xl md:text-3xl tracking-[0.15em]">
                海辺の古民家
              </h3>
              <p className="text-gray-700 leading-loose tracking-[0.05em]">
                館山の海を望む静かな立地。<br />
                古き良き日本家屋の趣を残しながら、<br />
                快適な滞在ができるよう整えました。
              </p>
              <p className="text-gray-700 leading-loose tracking-[0.05em]">
                時間を気にせず、<br />
                ただ在ることの豊かさを感じてください。
              </p>
            </div>
          </motion.div>

          <motion.div
            className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20"
            initial={{ opacity: 0, y: 40 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 1, delay: 0.4 }}
          >
            <div className="aspect-[4/3] overflow-hidden lg:order-2">
              <ImageWithFallback
                src="https://images.unsplash.com/photo-1759310706794-b8a350561d93?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHRyYWRpdGlvbmFsJTIwaG91c2UlMjBpbnRlcmlvcnxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                alt="藤ゼム室内"
                className="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
              />
            </div>

            <div className="space-y-6 lg:order-1">
              <h3 className="text-2xl md:text-3xl tracking-[0.15em]">
                心地よい空間
              </h3>
              <p className="text-gray-700 leading-loose tracking-[0.05em]">
                木のぬくもり、畳の香り。<br />
                自然素材に囲まれた室内は、<br />
                心と体を穏やかに整えてくれます。
              </p>
            </div>
          </motion.div>

          <motion.div
            className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"
            initial={{ opacity: 0, y: 30 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 1, delay: 0.6 }}
          >
            {features.map((feature, index) => (
              <div key={index} className="text-center space-y-4 p-6 bg-white">
                <div className="flex justify-center">
                  <feature.icon size={32} className="text-gray-800" strokeWidth={1} />
                </div>
                <h4 className="tracking-[0.1em]">{feature.title}</h4>
                <p className="text-sm text-gray-600 tracking-[0.05em]">
                  {feature.description}
                </p>
              </div>
            ))}
          </motion.div>
        </div>
      </div>
    </section>
  );
}
