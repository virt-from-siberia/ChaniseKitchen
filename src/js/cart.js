
var cart = {}; //КОРЗИНА

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        // showMiniCart();
    } else {

    }
}

$(document).ready(function () {
    loadCart();
});