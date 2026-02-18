import { Hero } from "./components/Hero";
import { Concept } from "./components/Concept";
import { Stay } from "./components/Stay";
import { Experience } from "./components/Experience";
import { Gallery } from "./components/Gallery";
import { Story } from "./components/Story";
import { Access } from "./components/Access";
import { Reservation } from "./components/Reservation";
import { Footer } from "./components/Footer";
import { Navigation } from "./components/Navigation";

export default function App() {
  return (
    <div className="min-h-screen bg-white">
      <Navigation />
      <Hero />
      <Concept />
      <Stay />
      <Experience />
      <Gallery />
      <Story />
      <Access />
      <Reservation />
      <Footer />
    </div>
  );
}
