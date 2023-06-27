"use strict";

var popUp = document.querySelector('.Popup');
var buttonsOpenClass = ".openPopup";
var closePopUp = document.querySelector('.Popup-close');
var popUpContent = ".Popup-content";
closePopup();
openPopup();

function openPopup() {
  var btns = document.querySelectorAll(buttonsOpenClass);
  btns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      popUp.style.display = "block";
      return;
    });
  });
}

function closePopup() {
  closePopUp.addEventListener("click", function (e) {
    e.preventDefault();
    popUp.style.display = "none";
  });
  document.addEventListener('click', function (e) {
    if (!e.target.closest(popUpContent) && !e.target.closest(buttonsOpenClass) && popUp.style.display == "block") {
      popUp.style.display = "none";
    }
  });
}