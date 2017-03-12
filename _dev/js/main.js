"use strict";

$('.logo__slider').bxSlider({
    mode: 'fade',
    auto: true,
});

$('.ticker__slider').bxSlider({
    minSlides: 4,
    maxSlides: 12,
    slideWidth: 170,
    slideMargin: 10,
    ticker: true,
    speed: 35000
});