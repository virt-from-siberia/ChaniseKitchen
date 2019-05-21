
var cart = {}; //КОРЗИНА

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        // console.log(cart);
        showCart();
    } else {
        // alert(' NOT show');
        $('.goods-out-hot').html('корзина пуста');
    }
}

function showCart() {

    $.getJSON('commonGoods.JSON', function (data) {
        var goods = data;
        var commonSum = 0;
        var out = '';
        var out = `<div class="row cart-orders-body">`;
        for (var id in cart) {
            // console.log(goods[id]);

            out += `<div class="col-md-3 col-10">`;
            out += `<div class="background-orders">`;
            out += ` <div class="name-order">`;
            out += `<h3 class="text-center ">${goods[id].name}</h3>`;
            out += `</div>`;
            out += `<div class="description-order text-center text-white">`;
            out += `<p>${goods[id].description}</p>`;
            out += `</div>`;
            out += `<div class="weight-order text-center text-white">`;
            out += `<p>${goods[id].weight} гр</p>`;
            out += `</div>`;
            out += ` <div class="quantity-order text-center">`;
            out += `<p>${cart[id]} шт</p>`;
            out += `</div>`;
            out += `<div class="cost-order text-center ">`;
            out += `<p>${goods[id].cost * cart[id]} руб</p>`;
            out += `</div>`;
            out += `<div class="buttons">`;
            out += `<button type="button" class="minus btn btn-outline btn-sm" data-id="${id}"><i class=" far fa-minus-square"></i></button>`;
            out += `<button type="button" class="delite btn btn-outline btn-sm" data-id="${id}"><i class=" far fa-times-circle"></i></button>`;
            out += `<button type="button" class="plus btn btn-outline btn-sm" data-id="${id}"><i class=" far fa-plus-square"></i></button>`;
            out += `</div>`;
            out += `</div>`;
            out += `</div>`;
            commonSum = commonSum + (goods[id].cost * cart[id]);
        }
        console.log(commonSum);

        out += `</div>`;
        $('.goods-out-cold').html(out);
        $('.delite').on('click', delGoods);
        $('.minus').on('click', minusGoods);
        $('.plus').on('click', plusGoods);
        $('.common-cost-orders-summ').html(commonSum +  'руб');
    });
}

function delGoods() {
    var id = $(this).attr('data-id');
    delete cart[id];
    showCart();
    saveCart();


}

function plusGoods() {
    var id = $(this).attr('data-id');
    cart[id]++;
    showCart();
    saveCart();

}

function minusGoods() {
    var id = $(this).attr('data-id');
    if (cart[id] == 1) {
        delete cart[id];
    } else {
        cart[id]--;
    }
    showCart();
    saveCart();

}






function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

$(document).ready(function () {

    loadCart();
});