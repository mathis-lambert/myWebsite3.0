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
/*
 * cursor part
 */
const lerp = (a, b, n) => (1 - n) * a + n * b;

const cursor_outer = document.querySelector(".cursor__outer");

const cursorPos = {
  x: 0,
  y: 0,
};

const outerCursorPos = {
  x: 0,
  y: 0,
};

document.addEventListener("mousemove", (e) => {
  cursorPos.x = e.clientX;
  cursorPos.y = e.clientY;
});

const animate = () => {
  outerCursorPos.x = lerp(outerCursorPos.x, cursorPos.x, 0.1);
  outerCursorPos.y = lerp(outerCursorPos.y, cursorPos.y, 0.1);

  const outerWidth = cursor_outer.getBoundingClientRect().width;

  cursor_outer.style.transform = `translate3d(${outerCursorPos.x - 8}px, ${
    outerCursorPos.y - 8
  }px, 0)`;

  requestAnimationFrame(animate);
};
animate();
