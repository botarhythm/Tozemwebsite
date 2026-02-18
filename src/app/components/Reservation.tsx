import { useState } from "react";
import { motion } from "motion/react";
import { useInView } from "./hooks/useInView";

export function Reservation() {
  const { ref, isInView } = useInView({ threshold: 0.3 });
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    checkin: "",
    checkout: "",
    guests: "2",
    experience: "なし",
    message: "",
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    alert("お問い合わせありがとうございます。\n3営業日以内にご連絡いたします。");
    setFormData({
      name: "",
      email: "",
      phone: "",
      checkin: "",
      checkout: "",
      guests: "2",
      experience: "なし",
      message: "",
    });
  };

  const handleChange = (
    e: React.ChangeEvent<
      HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement
    >
  ) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  return (
    <section id="reservation" className="pt-4 pb-32 bg-white" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          className="text-center mb-12"
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 1 }}
        >
          <h2 className="text-3xl md:text-4xl lg:text-5xl mb-6 tracking-[0.2em]">
            ご予約・お問い合わせ
          </h2>
          <div className="w-12 h-px bg-gray-900 mx-auto mb-6" />
          <p className="text-gray-600 tracking-[0.1em]">Reservation</p>
        </motion.div>

        <motion.div
          className="max-w-2xl mx-auto"
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 1, delay: 0.2 }}
        >
          <div className="mb-20 text-center space-y-4">
            <p className="text-gray-700 tracking-[0.05em] leading-relaxed">
              ご予約・ご質問は下記フォームよりお問い合わせください。<br />
              3営業日以内にご連絡いたします。
            </p>
          </div>

          {/* Pricing Info */}
          <div className="mb-20 space-y-12">
            <div className="space-y-6">
              <h3 className="text-xl tracking-[0.1em] text-center">宿泊料金（税込）</h3>
              <p className="text-sm text-center text-gray-500">※1棟貸切 4名様までの基本料金です</p>

              <div className="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div className="p-6 bg-gray-50 space-y-2">
                  <h4 className="font-medium tracking-[0.1em]">通常日</h4>
                  <p className="text-2xl font-serif">¥40,000~</p>
                </div>
                <div className="p-6 bg-gray-50 space-y-2">
                  <h4 className="font-medium tracking-[0.1em]">ハイシーズン</h4>
                  <p className="text-2xl font-serif">¥46,000~</p>
                  <p className="text-xs text-gray-500">7/13-9/30, GW</p>
                </div>
                <div className="p-6 bg-gray-50 space-y-2">
                  <h4 className="font-medium tracking-[0.1em]">特定日</h4>
                  <p className="text-2xl font-serif">¥52,000~</p>
                  <p className="text-xs text-gray-500">8/9-17, 12/20-1/5</p>
                </div>
              </div>

              <div className="bg-gray-50 p-6 space-y-4 text-sm tracking-[0.05em]">
                <p>
                  <span className="font-medium">追加料金（1名様あたり）:</span><br />
                  大人（中学生以上）: ¥9,000 / 子供（3歳以上）: ¥5,000<br />
                  ※2歳以下（添い寝）は無料
                </p>
                <p>
                  <span className="font-medium">連泊割引:</span> 2泊目以降 ¥3,000 引き（清掃なし）
                </p>
                <p>
                  <span className="font-medium">時間外利用:</span> ¥5,000 / 1h（要相談）
                </p>
              </div>
            </div>

            <div className="space-y-6">
              <h3 className="text-xl tracking-[0.1em] text-center">キャンセルポリシー</h3>
              <div className="max-w-md mx-auto bg-gray-50 p-6 text-sm tracking-[0.05em] space-y-2">
                <div className="flex justify-between border-b border-gray-200 pb-2">
                  <span>30日〜15日前</span>
                  <span>10%</span>
                </div>
                <div className="flex justify-between border-b border-gray-200 pb-2">
                  <span>14日〜8日前</span>
                  <span>50%</span>
                </div>
                <div className="flex justify-between border-b border-gray-200 pb-2">
                  <span>7日〜3日前</span>
                  <span>80%</span>
                </div>
                <div className="flex justify-between">
                  <span>2日〜当日</span>
                  <span>100%</span>
                </div>
                <p className="text-xs text-gray-400 mt-2 pt-2">
                  ※30日以前は全額返金（振込手数料はお客様負担）
                </p>
              </div>
            </div>
          </div>

          <form onSubmit={handleSubmit} className="space-y-6">
            <div>
              <label className="block text-sm tracking-[0.1em] mb-2">
                お名前 <span className="text-red-500">*</span>
              </label>
              <input
                type="text"
                name="name"
                value={formData.name}
                onChange={handleChange}
                required
                className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
              />
            </div>

            <div>
              <label className="block text-sm tracking-[0.1em] mb-2">
                メールアドレス <span className="text-red-500">*</span>
              </label>
              <input
                type="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                required
                className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
              />
            </div>

            <div>
              <label className="block text-sm tracking-[0.1em] mb-2">
                電話番号 <span className="text-red-500">*</span>
              </label>
              <input
                type="tel"
                name="phone"
                value={formData.phone}
                onChange={handleChange}
                required
                className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
              />
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label className="block text-sm tracking-[0.1em] mb-2">
                  チェックイン <span className="text-red-500">*</span>
                </label>
                <input
                  type="date"
                  name="checkin"
                  value={formData.checkin}
                  onChange={handleChange}
                  required
                  className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
                />
              </div>

              <div>
                <label className="block text-sm tracking-[0.1em] mb-2">
                  チェックアウト <span className="text-red-500">*</span>
                </label>
                <input
                  type="date"
                  name="checkout"
                  value={formData.checkout}
                  onChange={handleChange}
                  required
                  className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
                />
              </div>
            </div>

            <div>
              <label className="block text-sm tracking-[0.1em] mb-2">
                人数 <span className="text-red-500">*</span>
              </label>
              <select
                name="guests"
                value={formData.guests}
                onChange={handleChange}
                required
                className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
              >
                <option value="1">1名</option>
                <option value="2">2名</option>
                <option value="3">3名</option>
                <option value="4">4名</option>
                <option value="5">5名</option>
                <option value="6">6名</option>
                <option value="7">7名</option>
                <option value="8">8名</option>
                <option value="9">9名</option>
                <option value="10">10名</option>
              </select>
            </div>

            <div>
              <label className="block text-sm tracking-[0.1em] mb-2">
                倉庫体験の希望
              </label>
              <select
                name="experience"
                value={formData.experience}
                onChange={handleChange}
                className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors"
              >
                <option value="なし">希望しない</option>
                <option value="希望する">希望する</option>
                <option value="詳細を知りたい">詳細を知りたい</option>
              </select>
            </div>

            <div>
              <label className="block text-sm tracking-[0.1em] mb-2">
                メッセージ
              </label>
              <textarea
                name="message"
                value={formData.message}
                onChange={handleChange}
                rows={5}
                placeholder="ご質問やご要望がございましたらお書きください"
                className="w-full px-4 py-3 border border-gray-300 focus:border-gray-900 focus:outline-none transition-colors resize-none"
              ></textarea>
            </div>

            <button
              type="submit"
              className="w-full py-4 bg-gray-900 text-white tracking-[0.2em] hover:bg-gray-800 transition-colors duration-300"
            >
              送信する
            </button>
          </form>
        </motion.div>
      </div>
    </section>
  );
}
