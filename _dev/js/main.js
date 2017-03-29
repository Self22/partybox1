//
// $(document).ready(function() {
//
//
//     $('.mobile__nav-button').on('click', function () {
//         $('.mobile__menu').addClass("show");
//
//     });
//
//     $('.close__mob').on('click', function () {
//         $('.mobile__menu').removeClass("show");
//
//     });
//
//
//     $('.mobile__menu-item-services').on('click', function () {
//         $('.dropdown__list').toggleClass("show");
//
//     });
//
// });


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
    dropdownList.classList.toggle("show");
});

dropdownItem.addEventListener("tap", function (event) {
    dropdownList.classList.toggle("show");
});


var openNav = document.querySelector(".mobile__nav-button");
var closeNav = document.querySelector(".close__mob");
var navMob = document.querySelector(".mobile__menu");

openNav.addEventListener("click", function (event) {
    navMob.classList.add("show");
})

closeNav.addEventListener("click", function (event) {
    navMob.classList.remove("show");
})

openNav.addEventListener("tap", function (event) {
    navMob.classList.add("show");
})

closeNav.addEventListener("tap", function (event) {
    navMob.classList.remove("show");
})


/// popups


var orderButton = document.querySelectorAll(".order__button");
var popup = document.querySelector(".popup__order");
var overlay = document.querySelector(".overlay");
var closePopup = document.querySelector(".close__popup");

for (var i = 0; i < orderButton.length; i++) {

    orderButton[i].addEventListener("click", function (event) {
        event.preventDefault();
        popup.classList.add("show");
    });
}


overlay.addEventListener("click", function (event) {
    popup.classList.remove("show");
});

closePopup.addEventListener("click", function (event) {
    popup.classList.remove("show");
});


orderButton.addEventListener("tap", function (event) {
    event.preventDefault();
    popup.classList.add("show");
});

overlay.addEventListener("tap", function (event) {
    popup.classList.remove("show");
});

closePopup.addEventListener("tap", function (event) {
    popup.classList.remove("show");
});

/////////////////// ajax popup__form

(function () {

    var app = {

        initialize: function () {
            this.setUpListeners();
        },

        setUpListeners: function () {
            $('#popupform-order').on('submit', app.submitForm);
        },

        submitForm: function (e) {
            e.preventDefault();

            var form = $(this),
                submitBtn = form.find('button[type="submit"]');

            if (app.validateForm(form) === false) return false;

            submitBtn.attr('disabled', 'disabled');

            console.log('Form__post!');
            var str = form.serialize();

            $.ajax({
                url: 'contact_forms/contact_process1.php',
                type: 'POST',
                data: str
            })
                .done(function (msg) {
                    if (msg === "OK") {
                        var result = "<div = 'popup__text'>Спасибо за заявку! Мы вам перезвоним!</div>"
                        form.html(result);
                    } else {
                        form.html(msg);
                    }
                })
                .always(function () {
                    submitBtn.removeAttr('disabled');
                });

        },

        validateForm: function (form) {
            var inputs = form.find('input'),
                valid = true;


            $.each(inputs, function (index, val) {
                var input = $(val),
                    val = input.val(),
                    formGroup = input.parents('.form-group');


                if (val.length === 0) {
                    formGroup.addClass('has-warning').removeClass('has-success');
                    input.addClass('form-control-warning').removeClass('form-control-success');
                    valid = false;
                } else {
                    formGroup.addClass('has-success').removeClass('has-warning');
                    input.addClass('form-control-success').removeClass('form-control-warning');
                }
            });

            return valid;
        },


    }

    app.initialize();

}());


/////////////////// ajax footer__form

(function () {

    var app = {

        initialize: function () {
            this.setUpListeners();
        },

        setUpListeners: function () {
            $('#footerform').on('submit', app.submitForm);
        },

        submitForm: function (e) {
            e.preventDefault();

            var form = $(this),
                submitBtn = form.find('button[type="submit"]');

            submitBtn.attr('disabled', 'disabled');

            console.log('Form__post!');
            var str = form.serialize();

            $.ajax({
                url: 'contact_forms/contact_process2.php',
                type: 'POST',
                data: str
            })
                .done(function (msg) {
                    if (msg === "OK") {
                        var result = "<div>Спасибо за заявку! Мы вам перезвоним!</div>"
                        form.html(result);
                    } else {
                        form.html(msg);
                    }
                })
                .always(function () {
                    submitBtn.removeAttr('disabled');
                });

        },

    }

    app.initialize();

}());


/////////////// mask
$(document).ready(function () {
    $('.form__input').mask('+38(000) 000-00-00');
    $('.order__tel-input').mask('+38(000) 000-00-00');
});



