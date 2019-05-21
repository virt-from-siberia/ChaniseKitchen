
// КАРТА ЗАДАНИЙ

// 1 СДЕЛАТЬ АНИМАЦИЮ МИНИКОРЗИНЫ ЧЕРЕЗ DISPLAY NONE ПРИ КЛИКЕ ДОБАВИТЬ И УБАВИТЬ ТОВАР


var cart = {}; //КОРЗИНА



function init() {
    //ВЫВОД ТОВАРА
    $.getJSON("goodsCOLD.JSON", goodsOutCOLD);
    $.getJSON("goodsHOT.JSON", goodsOutHOT);

}

function goodsOutCOLD(data) {
    var out = '';


    out += ``;
    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">Салаты</h2>`;
    out += `<div class="items row">`;
    for (var key in data) {

        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3 wow fadeInUp text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  wow fadeInRight">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        out += `<p><img class="logoinstead" src="img/logo-instead.png" alt="${data[key].name}" ></p>`;
        // out += `<p><img src="img/items/${data[key].img}" alt="${data[key].name}"></p>`;
        out += `<p class="weight-item text-center text-white wow fadeInUp">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center wow fadeInLeft">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center wow fadeInUp"> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="minus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-minus-square"></i></button>`;
        out += ` <button type="button" class="delite btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-times-circle"></i></button>`;
        out += `<button type="button" class="plus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    out += `</div>`;
    out += `</div>`;
    $('.goods-out-cold').html(out);
    $('.plus').on('click', addToCart);
}

function goodsOutHOT(data) {
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">Горячие блюда</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3 wow fadeInUp text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  wow fadeInRight">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        out += `<p><img class="logoinstead" src="img/logo-instead.png" alt="${data[key].name}" ></p>`;
        // out += `<p><img src="img/items/${data[key].img}" alt="${data[key].name}"></p>`;
        out += `<p class="weight-item text-center text-white wow fadeInUp">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center wow fadeInLeft">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center wow fadeInUp"> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="minus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-minus-square"></i></button>`;
        out += ` <button type="button" class="delite btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-times-circle"></i></button>`;
        out += `<button type="button" class="plus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-hot').html(out);
    $('.plus').on('click', addToCart);
    $('.plus').on('click', animateCart);
    $('.delite').on('click', animateCart);
    $('.minus').on('click', animateCart);

}


function addToCart() {
    //ДОБОВЛЯЕМ ТОВАР В КОРЗИНУ
    var id = $(this).attr('data-id');
    console.log(id);
    if (cart[id] == undefined) {
        cart[id] = 1; //ЕСЛИ В КОРЗИНЕ НЕТ ТОВАРА С ИНДЕФИКАТОРОМ ID ТО ДОБОВЛЯЕМ 1
    } else {
        cart[id]++;  //ЕСЛИ ТАКОЙ ЕСТЬ ТО УВЕЛИЧИВАЕМ НА 1
    }
    showMiniCart();
    saveCart();
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function showMiniCart() {
    //показываю мини корзину
    var out = '';
    for (var key in cart) {
        out += key + '---' + cart[key] + '<br>';
    }
    $('.mini-cart-items').html(out);
}

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

function animateCart() {

    $('.cart').fadeOut(30).delay(10).fadeIn(300);


}


$(document).ready(function () {
    init();
    loadCart();
});