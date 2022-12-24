import LocomotiveScroll from 'locomotive-scroll';
import jquery from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Swiper from 'swiper';


gsap.registerPlugin(ScrollTrigger);

export default homePage => {

    const swiper = new Swiper('.swiper', {
        loop: true,
        speed : 600,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    jQuery('.next-slider').click(function(){
        swiper.slidePrev();
    });
    jQuery('.prev-slider').click(function(){
        swiper.slideNext();
    });


    var container = document.querySelector('[data-scroll-container]');

    const scroll = new LocomotiveScroll({
        el: container,
        smooth: true,
        offset: ['00%', '0'],
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

    // active section

    const sub_sections = document.querySelectorAll('.js-scroll-X-subsection');
    const wording = document.querySelector('.js-wording .text-inner');
    const offset = window.innerWidth / 2;
    var active_section = sub_sections[0];
    var active_section_tmp = sub_sections[0];

    scroll.on('scroll', () => {
        sub_sections.forEach((sub_section) => {
            const left = sub_section.getBoundingClientRect().left;
            if (left < offset) {
                active_section = sub_section;
                return;
            }
        });


        if (active_section !== active_section_tmp) {
            const title = active_section.getAttribute('data-title');
            wording.classList.add("remove");
            setTimeout(function(){
                wording.innerHTML = title;
                setTimeout(function(){
                    wording.classList.remove("remove");
                    wording.classList.remove("visible");

                    setTimeout(function(){
                        wording.classList.add("visible");
                    }, 100);
                }, 0);
            }, 100);
            active_section_tmp = active_section;

            console.log('section active : ', active_section);
        }
    });


    $('.button-menu').click(function(){
       $('body').toggleClass('nav-open');
    });






};
