
var cart = {}; //КОРЗИНА


function init() {
    //ВЫВОД ТОВАРА
    $.post(
        "admin/core.php",
        {
            "action": "loadBEERROZLIVEGoods"
        },
        goodsOutBEERROZLIVE
    );

}

function goodsOutBEERROZLIVE(data) {
    data = JSON.parse(data);
    var out = '';


    out += ``;
    out += `<div class="wrapper mt-5">`;
    out += `<div class="row">`;

    for (var key in data) {

        out += `<div class="col-md-3 col-10 my-3">`;
        out += `<p class="beer-name text-center">${data[key].name}</p>`;
        //======================
        out += `<img class="beer-img img-fluid" src="img/beer/beer-logo/${data[key].img}" alt="${data[key].name}">`;
        //======================
        out += `<p class="beer-description text-center mt-3">${data[key].description}</p>`;
        out += `<p class=" beer-cost text-center">150руб 1л</p>`;
        out += `<button type="button" class="plus btn coldPlus btn-outline btn-sm" data-id="${key}">`;
        out += `<p>добавить</p>`;
        out += `<i class=" far fa-plus-square"></i>`;
        out += `</button>`;
        out += `</div>`;
        out += `</div>`;
    }
    out += `</div>`;
    out += `</div>`;
    $('.goods-out-cold').html(out);
    $('.coldPlus').on('click', addToCart);
    $('.coldPlus').on('click', animateCart);
}

function addToCart() {
    var id = $(this).attr('data-id');
    if (cart[id] == undefined) {
        cart[id] = 1;
    } else {
        cart[id]++;
    }
    showMiniCart();
    saveCart();
}

function deliteCart() {
    var id = $(this).attr('data-id');
    delete cart[id];
    showMiniCart();
    saveCart();
}

function minusCart() {
    var id = $(this).attr('data-id');
    console.log(cart[id]);
    if (cart[id] == undefined || cart[id] == 0 || cart[id] == null) {
        delete cart[id];
    } else {
        cart[id]--;
    }
    showMiniCart();
    saveCart();
}

function showMiniCart() {
    //показываю мини корзину
    $.post(
        "admin/core.php",
        {
            "action": "showMiniCart"
        },
        function (dataMinCart) {
            dataMinCart = JSON.parse(dataMinCart);
            var goodsMinCart = dataMinCart;
            var commonSummmMinCart = 0;
            var out = '';
            for (var key in cart) {
                out += goodsMinCart[key].name + ' --- ' + cart[key] + '<br>';
                commonSummmMinCart = commonSummmMinCart + (goodsMinCart[key].cost * cart[key]);
            }
            out += 'Сумма заказа --- ' + commonSummmMinCart;
            $('.mini-cart-items').html(out);
            $('.sum').html(commonSummmMinCart);
        }
    );
}


function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
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
    animateCart();
});


