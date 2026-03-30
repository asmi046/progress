import { register } from 'swiper/element/bundle';

register();

const sliderElement = document.querySelector('.js-main-swiper');

if (sliderElement) {
    const sliderConfig = {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
            clickable: true,
        },
    };

    Object.assign(sliderElement, sliderConfig);
    sliderElement.initialize();
}
