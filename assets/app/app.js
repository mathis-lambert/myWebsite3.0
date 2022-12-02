gsap.registerPlugin(ScrollTrigger);

gsap.to(".panel", {
  yPercent: -100,
  ease: "none",
  stagger: 0.25,
  scrollTrigger: {
    trigger: ".panel-container",
    start: "top top",
    end: "+=100%",
    scrub: true,
    pin: true,
    markers: false,
  },
});
