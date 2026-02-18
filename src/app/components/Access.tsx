import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";
import { MapPin, Clock, Train, Car, Instagram, Mail } from "lucide-react";

export function Access() {
  const { ref, isInView } = useInView({ threshold: 0.3 });

  return (
    <section id="access" className="py-32 bg-gray-50" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          className="text-center mb-20"
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 1 }}
        >
          <h2 className="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
            アクセス
          </h2>
          <div className="w-12 h-px bg-gray-900 mx-auto mb-6" />
          <p className="text-gray-600 tracking-[0.1em]">Access</p>
        </motion.div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
          <motion.div
            className="space-y-8"
            initial={{ opacity: 0, x: -30 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 1 }}
          >
            <div className="flex items-start space-x-4">
              <MapPin className="text-gray-800 flex-shrink-0 mt-1" size={24} strokeWidth={1} />
              <div className="space-y-2">
                <h3 className="text-lg tracking-[0.1em]">住所</h3>
                <p className="text-gray-600 tracking-[0.05em] leading-relaxed">
                  〒294-0315<br />
                  千葉県館山市西川名184-1
                </p>
              </div>
            </div>

            <div className="flex items-start space-x-4">
              <Car className="text-gray-800 flex-shrink-0 mt-1" size={24} strokeWidth={1} />
              <div className="space-y-4">
                <div>
                  <h3 className="text-lg tracking-[0.1em]">お車でお越しの方</h3>
                  <p className="text-gray-600 tracking-[0.05em] leading-relaxed">
                    東京湾アクアライン ➡ 木更津IC ➡ 館山自動車道 ➡ 富浦IC<br />
                    富浦ICより約30分<br />
                    <span className="text-sm text-gray-500">※ 駐車場あり（2台分）</span>
                  </p>
                </div>
              </div>
            </div>

            <div className="flex items-start space-x-4">
              <Train className="text-gray-800 flex-shrink-0 mt-1" size={24} strokeWidth={1} />
              <div className="space-y-4">
                <div>
                  <h3 className="text-lg tracking-[0.1em]">公共交通機関でお越しの方</h3>
                  <div className="space-y-4 mt-2">
                    <div>
                      <h4 className="font-medium text-gray-800">高速バス（房総なのはな号）</h4>
                      <p className="text-gray-600 tracking-[0.05em] leading-relaxed">
                        新宿駅 ➡ 館山駅（約2時間 / 2,500円程）
                      </p>
                    </div>
                    <div>
                      <h4 className="font-medium text-gray-800">電車</h4>
                      <p className="text-gray-600 tracking-[0.05em] leading-relaxed">
                        木更津（JR内房線 安房鴨川行）➡ 館山駅
                      </p>
                    </div>
                    <div>
                      <h4 className="font-medium text-gray-800">館山駅より</h4>
                      <p className="text-gray-600 tracking-[0.05em] leading-relaxed">
                        路線バス（館山駅東口）➡ 西川名バス停（約30分）<br />
                        バス停より徒歩1分
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div className="flex items-start space-x-4">
              <Clock className="text-gray-800 flex-shrink-0 mt-1" size={24} strokeWidth={1} />
              <div className="space-y-2">
                <h3 className="text-lg tracking-[0.1em]">チェックイン・アウト</h3>
                <p className="text-gray-600 tracking-[0.05em] leading-relaxed">
                  チェックイン：15:00〜18:00<br />
                  チェックアウト：〜10:00
                </p>
                <p className="text-sm text-gray-500 tracking-[0.05em]">
                  ※ 時間外をご希望の場合はご相談ください
                </p>
              </div>
            </div>

            <div className="flex items-start space-x-4">
              <Instagram className="text-gray-800 flex-shrink-0 mt-1" size={24} strokeWidth={1} />
              <div className="space-y-2">
                <h3 className="text-lg tracking-[0.1em]">Instagram</h3>
                <a
                  href="https://www.instagram.com/tozem_tateyama/"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="text-gray-600 tracking-[0.05em] hover:text-gray-900 transition-colors"
                >
                  @tozem_tateyama
                </a>
              </div>
            </div>

            <div className="flex items-start space-x-4">
              <Mail className="text-gray-800 flex-shrink-0 mt-1" size={24} strokeWidth={1} />
              <div className="space-y-2">
                <h3 className="text-lg tracking-[0.1em]">Email</h3>
                <a
                  href="mailto:info@tozem.net"
                  className="text-gray-600 tracking-[0.05em] hover:text-gray-900 transition-colors"
                >
                  info@tozem.net
                </a>
              </div>
            </div>
          </motion.div>

          <motion.div
            className="h-96 lg:h-full bg-gray-200 overflow-hidden"
            initial={{ opacity: 0, x: 30 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 1 }}
          >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3136.563539341184!2d139.75641431505733!3d34.96393600809622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6017f5daa2fc7ab7%3A0xf7bf1e1827abc25c!2z6Jek44K844OgIC0g5rW36L6644Gu5Y-k5rCR5a625a6_!5e1!3m2!1sja!2sjp!4v1771390745529!5m2!1sja!2sjp"
              width="100%"
              height="100%"
              style={{ border: 0 }}
              allowFullScreen
              loading="lazy"
              referrerPolicy="no-referrer-when-downgrade"
              title="藤ゼム所在地"
            ></iframe>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
