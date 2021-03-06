

var cart = {}; //КОРЗИНА



function init() {
    //ВЫВОД ТОВАРА
    $.post(
        "admin/core.php",
        {
            "action": "loadCOLDGoods"
        },
        goodsOutCOLD
    );

    $.post(
        "admin/core.php",
        {
            "action": "loadHOTGoods"
        },
        goodsOutHOT
    );
    $.post(
        "admin/core.php",
        {
            "action": "loadPIZZAGoods"
        },
        goodsOutPIZZA
    );
    $.post(
        "admin/core.php",
        {
            "action": "loadDRINKGoods"
        },
        goodsOutDRINK
    );
    $.post(
        "admin/core.php",
        {
            "action": "loadWOKGoods"
        },
        goodsOutWOK
    );
    $.post(
        "admin/core.php",
        {
            "action": "loadBURGERGoods"
        },
        goodsOutBURGER
    );
    $.post(
        "admin/core.php",
        {
            "action": "loadKEBABGoods"
        },
        goodsOutKEBAB
    );


}

function goodsOutCOLD(data) {
    data = JSON.parse(data);
    var out = '';


    out += ``;
    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">Салаты</h2>`;
    out += `<div class="items row">`;
    for (var key in data) {

        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3  text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3 ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        // out += `<p><img class="logoinstead" src="img/logo-instead.png" alt="${data[key].name}" ></p>`;
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        // out += `<p><img src="img/menu/wok-kur.jpg" alt="${data[key].name}"></p>`;
        out += `<p class="weight-item text-center">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center ">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        // out += `<button type="button" class="minus coldMinus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-minus-square"></i></button>`;
        // out += ` <button type="button" class="delite coldDelite btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-times-circle"></i></button>`;
        out += `<button type="button" class="plus btn coldPlus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    out += `</div>`;
    out += `</div>`;
    $('.goods-out-cold').html(out);
    $('.coldPlus').on('click', addToCart);
    $('.coldPlus').on('click', animateCart);
}

function goodsOutHOT(data) {
    data = JSON.parse(data);
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">Горячие блюда</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3  text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        out += `<p class="weight-item text-center ">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="plus btn hotPlus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-hot').html(out);
    $('.hotPlus').on('click', addToCart);
    $('.hotPlus').on('click', animateCart);

}

function goodsOutPIZZA(data) {
    data = JSON.parse(data);
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">Пицца</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3  text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        out += `<p class="weight-item text-center ">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="plus btn pizzaplus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-pizza').html(out);
    $('.pizzaplus').on('click', addToCart);
    $('.pizzaplus').on('click', animateCart);

}

function goodsOutDRINK(data) {
    data = JSON.parse(data);
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">Напитки</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3 text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        out += `<p class="weight-item text-center ">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center ">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`; out += `<div class="buttons">`;

        out += `<button type="button" class="plus btn drinkPlus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-drink').html(out);
    $('.drinkPlus').on('click', addToCart);
    $('.drinkPlus').on('click', animateCart);

}


function goodsOutWOK(data) {
    data = JSON.parse(data);
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">лапша-wok</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3  text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        out += `<p class="weight-item text-center ">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center ">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="plus btn wokPlus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-wok').html(out);
    $('.wokPlus').on('click', addToCart);
    $('.wokPlus').on('click', animateCart);

}

function goodsOutBURGER(data) {
    data = JSON.parse(data);
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">бургеры</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3 text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        out += `<p class="weight-item text-center ">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center ">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="plus btn drinkPlus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-burger').html(out);
    $('.drinkPlus').on('click', addToCart);
    $('.drinkPlus').on('click', animateCart);
    $('.hotDelite').on('click', deliteCart);
    $('.hotDelite').on('click', animateCart);
    $('.hotMinus').on('click', minusCart);
    $('.hotMinus').on('click', animateCart);

}

function goodsOutKEBAB(data) {
    data = JSON.parse(data);
    var out = '';

    out += `<div class= "item-container-header pt-3">`;
    out += `<hr class="separator-line wow fadeInUp  mt-5"><h2 class="text-center text-white mt-5 mb-5 wow fadeInUp">шаурма</h2>`;
    // out += `<div class="items row">`;
    out += `<div class="items row">`;
    for (var key in data) {
        out += ``;
        out += `<div class="card-tems col-md-3 col-9 mx-3 my-3  text-center">`;
        out += `<h3 class="header-item text-center  mt-3 mb-3  ">${data[key].name}</h3>`;
        //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
        //======================
        out += `<p><img src="img/menu/${data[key].img}" alt="${data[key].name}"></p>`;
        //======================
        out += `<p class="weight-item text-center ">${data[key].weight}гр</p>`;
        out += `<p class="about-item text-center ">${data[key].description}.</p>`;
        out += `<p class="about-cost text-center "> ${data[key].cost} руб </p>`;
        out += `<div class="buttons">`;
        out += `<button type="button" class="plus btn kebabPlus btn-outline btn-sm" data-id="${key}"><p>добавить</p><i class=" far fa-plus-square"></i></button>`;
        out += `</div>`;
        out += `</div>`;

    }
    out += `</div>`;
    $('.goods-out-kebab').html(out);
    $('.kebabPlus').on('click', addToCart);
    $('.kebabPlus').on('click', animateCart);

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



function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
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