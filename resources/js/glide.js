import Glide from '@glidejs/glide';

const glide = (carousel) => {
    const type = carousel.getAttribute('glide-type') || 'carousel';
    const perView = carousel.getAttribute('glide-perview') || 1;
    const gap = carousel.getAttribute('glide-gap') || 0;
    const bound = carousel.getAttribute('glide-bound') || true;
    const rewind = carousel.getAttribute('glide-rewind') || false;
    const animationDuration = carousel.getAttribute('glide-duration') || 500;
    const peek = {
        before: carousel.getAttribute('glide-peek') || 0,
        after: carousel.getAttribute('glide-peek') || 0
    };

    const glideObj =  new Glide(carousel, {
        type, gap, bound, perView, peek, rewind, animationDuration,
        arrows: {
            prev: '.glide__arrow--left',
            next: '.glide__arrow--right'
        },
    })

    if (carousel.getAttribute('glide-perview-sm')) {
        glideObj.update({
            breakpoints : {
                ...glideObj._o.breakpoints,
                375: {
                    perView: carousel.getAttribute('glide-perview-sm'),
                }
            }
        })
    }
    if (carousel.getAttribute('glide-perview-md')) {
        glideObj.update({
            breakpoints : {
                ...glideObj._o.breakpoints,
                576: {
                    perView: carousel.getAttribute('glide-perview-md'),
                }
            }
        })
    }
    if (carousel.getAttribute('glide-perview-lg')) {
        glideObj.update({
            breakpoints : {
                ...glideObj._o.breakpoints,
                768: {
                    perView: carousel.getAttribute('glide-perview-lg'),
                }
            }
        })
    }
    if (carousel.getAttribute('glide-perview-xl')) {
        glideObj.update({
            breakpoints : {
                ...glideObj._o.breakpoints,
                992: {
                    perView: carousel.getAttribute('glide-perview-xl'),
                }
            }
        })
    }
    if (carousel.getAttribute('glide-perview-xxl')) {
        glideObj.update({
            breakpoints : {
                ...glideObj._o.breakpoints,
                1200: {
                    perView: carousel.getAttribute('glide-perview-xxl'),
                }
            }
        })
    }

    return glideObj.mount();
};

const initGlide = (carousels) => {
    for (let i = 0; i < carousels.length; i++) {
        glide(carousels[i]);
    }
};

window.addEventListener('DOMContentLoaded', () => {
    initGlide(document.body.querySelectorAll('.glide'));
});
