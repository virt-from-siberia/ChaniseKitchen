
var cart = {}; //КОРЗИНА

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showCart();
    } else {
        // alert(' NOT show');
        $('.goods-out-hot').html('корзина пуста');
    }
}

function showCart() {

    // $.getJSON('goodsCOLD.JSON', function (data) {
    //     var goods = data;
    //     var out = '';
    //     out += `<div class="items row">`;
    //     for (var key in cart) {
    //         out += `<div class="card-tems col-md-3 col-9 mx-3 my-3 wow fadeInUp text-center">`;
    //         out += `<h3 class="header-item text-center  mt-3 mb-3  wow fadeInRight">${data[key].name}</h3>`;
    //         //ЗАМЕНИТЬ НА НАСТОЯШИЕ КАРТИНКИ ИЗ JSON !! РАСКОМЕНТИРОВАТЬ
    //         out += `<p><img class="logoinstead" src="img/logo-instead.png" alt="${data[key].name}" ></p>`;
    //         // out += `<p><img src="img/items/${data[key].img}" alt="${data[key].name}"></p>`;
    //         out += `<p class="weight-item text-center text-white wow fadeInUp">${data[key].weight}гр</p>`;
    //         out += `<p class="about-item text-center wow fadeInLeft">${data[key].description}.</p>`;
    //         out += `<p class="about-cost text-center wow fadeInUp"> ${data[key].cost} руб </p>`;
    //         out += `<div class="buttons">`;
    //         out += `<button type="button" class="minus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-minus-square"></i></button>`;
    //         out += ` <button type="button" class="delite btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-times-circle"></i></button>`;
    //         out += `<button type="button" class="plus btn btn-outline btn-sm" data-id="${key}"><i class=" far fa-plus-square"></i></button>`;
    //         out += `</div>`;
    //         out += `</div>`;
    //     }
    //     $('.goods-out-hot').html(out);
    // });
    console.log(cart);
    $.getJSON('goodsCOLD.JSON', function (dataCOLD) {
        console.log(dataCOLD);
        var out = '';
        for (var key in dataCOLD) {
            out += dataCOLD[key].category + '<br>';
            out += dataCOLD[key].name + '<br>';
            out += dataCOLD[key].weight + '<br>';
            out += dataCOLD[key].description + '<br>';
            out += dataCOLD[key].cost + '<br>';
            out += dataCOLD[key].img + '<br>';
            out += '==================================';
        }
        $('.goods-out-cold').html(out);
    });

    $.getJSON('goodsHOT.JSON', function (dataHOT) {
        console.log(dataHOT);
        var out = '';
        for (var key in dataHOT) {
            out += dataHOT[key].category + '<br>';
            out += dataHOT[key].name + '<br>';
            out += dataHOT[key].weight + '<br>';
            out += dataHOT[key].description + '<br>';
            out += dataHOT[key].cost + '<br>';
            out += dataHOT[key].img + '<br>';
            out += '==================================';
        }
        $('.goods-out-hot').html(out);
    });


}

$(document).ready(function () {

    loadCart();
});