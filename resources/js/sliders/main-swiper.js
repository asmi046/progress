import { register } from 'swiper/element/bundle';

register();

const sliderElement = document.querySelector('.js-main-swiper');
const productGallerySliders = document.querySelectorAll('.js-product-gallery-swiper');

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

productGallerySliders.forEach((slider) => {
    const slidesCount = slider.querySelectorAll('swiper-slide').length;

    const sliderConfig = {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: slidesCount > 1,
        navigation: slidesCount > 1,
        pagination: {
            clickable: true,
        },
    };

    Object.assign(slider, sliderConfig);
    slider.initialize();
});
