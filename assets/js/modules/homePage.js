import LocomotiveScroll from 'locomotive-scroll';

export default homePage => {
    const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        offset: ['20%', '0'],
        getDirection: true,
        lerp: 0.1,
        multiplier: 1,
        firefoxMultiplier: 50,
        touchMultiplier: 2,
        resetNativeScroll: !0,
        scrollFromAnywhere: true,
    });
};
