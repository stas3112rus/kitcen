"use strict";

const popUp = document.querySelector('.Popup');
const buttonsOpenClass = ".openPopup";
const closePopUp = document.querySelector('.Popup-close');
const popUpContent = ".Popup-content";

closePopup();
openPopup();


function openPopup() {
	const btns = document.querySelectorAll(buttonsOpenClass);

	btns.forEach(btn => {
		btn.addEventListener("click", (e) => {
			e.preventDefault();
			popUp.style.display = "block";
			return;
		})
	});
}

function closePopup() {
	closePopUp.addEventListener("click", (e) => {
		e.preventDefault();
		popUp.style.display = "none";
	})

	document.addEventListener('click', (e) => {
		if (
			!e.target.closest(popUpContent) &&
			!e.target.closest(buttonsOpenClass) &&
			popUp.style.display == "block"
		) {
			popUp.style.display = "none";
		}
	})
}