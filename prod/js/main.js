$(".logo__slider").bxSlider({mode:"fade",auto:!0}),$(".ticker__slider").bxSlider({minSlides:1,maxSlides:12,slideWidth:170,slideMargin:10,ticker:!0,speed:2e5});var dropdownItem=document.querySelector(".mobile__menu-item-services"),dropdownList=document.querySelector(".dropdown__list");dropdownItem.addEventListener("click",function(e){dropdownList.classList.toggle("show")}),dropdownItem.addEventListener("tap",function(e){dropdownList.classList.toggle("show")});var openNav=document.querySelector(".mobile__nav-button"),closeNav=document.querySelector(".close__mob"),navMob=document.querySelector(".mobile__menu");openNav.addEventListener("click",function(e){navMob.classList.add("show")}),closeNav.addEventListener("click",function(e){navMob.classList.remove("show")}),openNav.addEventListener("tap",function(e){navMob.classList.add("show")}),closeNav.addEventListener("tap",function(e){navMob.classList.remove("show")});for(var orderButton=document.querySelectorAll(".order__button"),popup=document.querySelector(".popup__order"),overlay=document.querySelector(".overlay"),closePopup=document.querySelector(".close__popup"),i=0;i<orderButton.length;i++)orderButton[i].addEventListener("click",function(e){e.preventDefault(),popup.classList.add("show")});overlay.addEventListener("click",function(e){popup.classList.remove("show")}),closePopup.addEventListener("click",function(e){popup.classList.remove("show")}),orderButton.addEventListener("tap",function(e){e.preventDefault(),popup.classList.add("show")}),overlay.addEventListener("tap",function(e){popup.classList.remove("show")}),closePopup.addEventListener("tap",function(e){popup.classList.remove("show")}),function(){var e={initialize:function(){this.setUpListeners()},setUpListeners:function(){$("#popupform-order").on("submit",e.submitForm)},submitForm:function(t){t.preventDefault();var o=$(this),n=o.find('button[type="submit"]');if(e.validateForm(o)===!1)return!1;n.attr("disabled","disabled"),console.log("Form__post!");var s=o.serialize();$.ajax({url:"contact_forms/contact_process1.php",type:"POST",data:s}).done(function(e){if("OK"===e){var t="<div = 'popup__text'>Спасибо за заявку! Мы вам перезвоним!</div>";o.html(t)}else o.html(e)}).always(function(){n.removeAttr("disabled")})},validateForm:function(e){var t=e.find("input"),o=!0;return $.each(t,function(e,t){var n=$(t),t=n.val(),s=n.parents(".form-group");0===t.length?(s.addClass("has-warning").removeClass("has-success"),n.addClass("form-control-warning").removeClass("form-control-success"),o=!1):(s.addClass("has-success").removeClass("has-warning"),n.addClass("form-control-success").removeClass("form-control-warning"))}),o}};e.initialize()}(),function(){var e={initialize:function(){this.setUpListeners()},setUpListeners:function(){$("#footerform").on("submit",e.submitForm)},submitForm:function(e){e.preventDefault();var t=$(this),o=t.find('button[type="submit"]');o.attr("disabled","disabled"),console.log("Form__post!");var n=t.serialize();$.ajax({url:"contact_forms/contact_process2.php",type:"POST",data:n}).done(function(e){if("OK"===e){var o="<div>Спасибо за заявку! Мы вам перезвоним!</div>";t.html(o)}else t.html(e)}).always(function(){o.removeAttr("disabled")})}};e.initialize()}(),function(){var e={initialize:function(){this.setUpListeners()},setUpListeners:function(){$("#footerform").on("submit",e.submitForm)},submitForm:function(e){e.preventDefault();var t=$(this),o=t.find('button[type="submit"]');o.attr("disabled","disabled"),console.log("Form__post!");var n=t.serialize();$.ajax({url:"contact_forms/contact_process2.php",type:"POST",data:n}).done(function(e){if("OK"===e){var o="<div>Спасибо за заявку! Мы вам перезвоним!</div>";t.html(o)}else t.html(e)}).always(function(){o.removeAttr("disabled")})}};e.initialize()}(),$(document).ready(function(){$(".form__input").mask("+38(000) 000-00-00"),$(".order__tel-input").mask("+38(000) 000-00-00")});
//# sourceMappingURL=main.js.map
