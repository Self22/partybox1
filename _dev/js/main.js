"use strict";

$('.logo__slider').bxSlider({
    mode: 'fade',
    auto: true,
});

$('.ticker__slider').bxSlider({
    minSlides: 1,
    maxSlides: 12,
    slideWidth: 170,
    slideMargin: 10,
    ticker: true,
    speed: 200000
});

/// mobile menu

var dropdownItem = document.querySelector(".mobile__menu-item-services");
var dropdownList = document.querySelector(".dropdown__list");

dropdownItem.addEventListener("click", function (event) {
    event.preventDefault();
    dropdownList.classList.toggle("show");
});

dropdownItem.addEventListener("tap", function (event) {
    event.preventDefault();
    dropdownList.classList.toggle("show");
});


var openNav = document.querySelector(".mobile__nav-button");
var closeNav = document.querySelector(".close");
var navMob = document.querySelector(".mobile__menu");

openNav.addEventListener("click", function (event) {
    event.preventDefault();
    navMob.classList.add("show");
})

closeNav.addEventListener("click", function (event) {
    event.preventDefault();
    navMob.classList.remove("show");
})

openNav.addEventListener("tap", function (event) {
    event.preventDefault();
    navMob.classList.add("show");
})

closeNav.addEventListener("tap", function (event) {
    event.preventDefault();
    navMob.classList.remove("show");
})


