import LocomotiveScroll from 'locomotive-scroll';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default homePage => {
    var container = document.querySelector('[data-scroll-container]');

    const scroll = new LocomotiveScroll({
        el: container,
        smooth: true,
        offset: ['20%', '0'],
        getDirection: true,
        lerp: 0.1,
        multiplier: 1,
        firefoxMultiplier: 50,
        touchMultiplier: 2,
        resetNativeScroll: !0,
        scrollFromAnywhere: true,
        mobile: {
            smooth: true,
        },
        tablet: {
            smooth: true,
        },
    });

    scroll.on("scroll", ScrollTrigger.update);

    ScrollTrigger.scrollerProxy(container, {
        scrollTop(value) {
            return arguments.length ?
                scroll.scrollTo(value, 0, 0) :
                scroll.scroll.instance.scroll.y;
        },
        getBoundingClientRect() {
            return {
                left: 0,
                top: 0,
                width: window.innerWidth,
                height: window.innerHeight
            };
        },
        pinType: container.style.transform ? "transform" : "fixed"
    });

    ScrollTrigger.addEventListener("refresh", () => scroll.update());

    initHorizontalSections();


    function initHorizontalSections() {
        let horizontalSections = document.querySelectorAll('.scroll-X');
        horizontalSections.forEach((el) => {
            const width = el.offsetWidth;
            const horizontalScrollLength = width - window.innerWidth;

            if (el.hasAttribute('data-scroll-reverse')) {
                gsap.set(el, { x: horizontalScrollLength });
            }

            const x = () => {
                if (el.hasAttribute('data-scroll-reverse')) {
                    return `-=${horizontalScrollLength}`;
                }

                return `-=${horizontalScrollLength}`;
            }

            gsap.to(el, {
                scrollTrigger: {
                    scroller: container,
                    scrub: true,
                    trigger: el.closest('section'),
                    pin: true,
                    start: "top top",
                    end: () => `+=${width}`,
                },
                x: x,
                ease: "none"
            });

        })

        ScrollTrigger.refresh();
    }


};
