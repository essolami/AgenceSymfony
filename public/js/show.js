var contact = document.querySelector(".contact")
var bodyBlackout = document.querySelector(".body-blackout");
var popupModal = document.querySelector(".popup-modal");
var popupModalClose = document.querySelector(".popup-modal__close");

contact.addEventListener("click", function() {
 popupModal.classList.toggle("is--visible");
 bodyBlackout.classList.toggle("is-blacked-out");
});

popupModalClose.addEventListener("click", function() {
 popupModal.classList.toggle("is--visible");
 bodyBlackout.classList.toggle("is-blacked-out");
});
