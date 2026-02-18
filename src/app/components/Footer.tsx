import { Instagram, Mail } from "lucide-react";

export function Footer() {
  return (
    <footer className="bg-gray-900 text-white py-16">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="max-w-4xl mx-auto">
          <div className="text-center space-y-8">
            <div>
              <h3 className="text-2xl md:text-3xl tracking-[0.3em] mb-4">TOZEM</h3>
              <p className="text-gray-400 text-sm tracking-[0.15em]">藤ゼム</p>
            </div>

            <div className="space-y-2">
              <p className="text-gray-400 text-sm tracking-[0.1em]">
                〒294-0315<br />
                千葉県館山市西川名184-1
              </p>
            </div>

            <div className="flex justify-center space-x-6">
              <a
                href="https://www.instagram.com/tozem_tateyama/"
                target="_blank"
                rel="noopener noreferrer"
                className="text-gray-400 hover:text-white transition-colors"
                aria-label="Instagram"
              >
                <Instagram size={24} strokeWidth={1} />
              </a>
              <a
                href="mailto:info@tozem.net"
                className="text-gray-400 hover:text-white transition-colors"
                aria-label="Email"
              >
                <Mail size={24} strokeWidth={1} />
              </a>
            </div>

            <div className="pt-8 border-t border-gray-800">
              <nav className="flex flex-wrap justify-center gap-6 mb-8">
                <a
                  href="#concept"
                  className="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]"
                >
                  藤ゼムとは
                </a>
                <a
                  href="#stay"
                  className="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]"
                >
                  宿泊
                </a>
                <a
                  href="#experience"
                  className="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]"
                >
                  倉庫体験
                </a>
                <a
                  href="#gallery"
                  className="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]"
                >
                  ギャラリー
                </a>
                <a
                  href="#access"
                  className="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]"
                >
                  アクセス
                </a>
                <a
                  href="#reservation"
                  className="text-sm text-gray-400 hover:text-white transition-colors tracking-[0.1em]"
                >
                  ご予約
                </a>
              </nav>

              <p className="text-gray-500 text-sm tracking-[0.1em]">
                © 2026 TOZEM. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}
