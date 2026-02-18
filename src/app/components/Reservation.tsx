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
    <section id="reservation" className="py-32 bg-white" ref={ref}>
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          className="text-center mb-20"
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
          <div className="mb-12 text-center space-y-4">
            <p className="text-gray-700 tracking-[0.05em] leading-relaxed">
              ご予約・ご質問は下記フォームよりお問い合わせください。<br />
              3営業日以内にご連絡いたします。
            </p>
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
