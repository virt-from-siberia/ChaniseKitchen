

function initHot() {
    console.log('initHot');

    $.post(
        "core.php",
        {
            "action": "initHot"
        },
        showGoods
    );
}


function initCold() {
    console.log('initCold');
    $.post(
        "core.php",
        {
            "action": "initCold"
        },
        showGoods
    );
}

function initPizza() {
    console.log('initPizza');
    $.post(
        "core.php",
        {
            "action": "initPizza"
        },
        showGoods
    );
}

function initDrink() {
    console.log('initPizza');
    $.post(
        "core.php",
        {
            "action": "initDrink"
        },
        showGoods
    );
}

function showGoods(data) {
    clearGoodInpunts();
    data = JSON.parse(data);
    var outNmae = '';
    outNmae += `<option data-id="0">Добавить новый товар</option>`;
    for (var id in data) {
        outNmae += `<option data-id="${id}">${data[id].name}</option>`;
    }

    $('.name ').html(outNmae);
    $('.item-name select').on('change', selectGoods);
}


function selectGoods() {
    var id = $('.item-name select option:selected').attr('data-id');
    console.log(id);
    $.post(
        "core.php",
        {
            "action": "selectOneGoods",
            "gid": id
        },
        function (data) {

            data = JSON.parse(data);
            $('#gname').val(data.name);
            $('#gcost').val(data.cost);
            $('#gwight').val(data.weight);
            $('#gdescr').val(data.description);
            $('#gimg').val(data.img);
            $('#dig').val(data.id);
        }
    );
}

function clearGoodInpunts() {
    $('#gname').val('');
    $('#gcost').val('');
    $('#gwight').val('');
    $('#gdescr').val('');
    $('#gimg').val('');
    $('#dig').val('');
}

function changeCategory() {
    $('.category-body select').on('change', function (event) {
        // console.log($(this).val());
        // console.log($("option:selected", this).attr('data-id'));

        if ($("option:selected", this).attr('data-id') == 'hot') {
            console.log('OPTION SELECTED = HOT');
            clearGoodInpunts();
            initHot();
        } else if ($("option:selected", this).attr('data-id') == 'cold') {
            console.log('OPTION SELECTED = COLD');
            clearGoodInpunts();
            initCold();
        } else if ($("option:selected", this).attr('data-id') == 'pizza') {
            console.log('OPTION SELECTED = pizza');
            clearGoodInpunts();
            initPizza();
        }
        else if ($("option:selected", this).attr('data-id') == 'drink') {
            console.log('OPTION SELECTED = drink');
            clearGoodInpunts();
            initDrink();
        }
    });
}

function saveToDb() {

    var id = $('#dig').val();
    if (id != "") {
        $.post(
            "core.php",
            {
                "action": "updateGoods",
                "gid": id,
                "gname": $('#gname').val(),
                "gcost": $('#gcost').val(),
                "gdescr": $('#gdescr').val(),
                "gwight": $('#gwight').val(),
                "gimg": $('#gimg').val()
            },
            function (data) {
                if (data == 1 || 11) {
                    alert('Товар обновлен');
                    initHot();
                } else {
                    console.log(data);
                }
            }
        );
    } else {
        console.log('ELSE');
        if ($('#gname').val() != '' && $('#gcost').val() != '' && $('#gwight').val() != '') {
            $.post(
                "core.php",
                {
                    "action": "newGoods",
                    "gid": 0,
                    "gname": $('#gname').val(),
                    "gcost": $('#gcost').val(),
                    "gdescr": $('#gdescr').val(),
                    "gwight": $('#gwight').val(),
                    "gimg": $('#gimg').val(),
                    "gcategory": $('.category option:selected').attr('data-id')
                },
                function (data) {
                    if (data == 1 || 11) {
                        alert('Запись добавлена');
                        initHot();
                    } else {
                        console.log(data);
                    }
                }
            );
        } else {
            alert('заполние обязательные поля имя, стоиимость, вес товара!');
        }
    }
}

function deleteGoods() {
    var id = $('#dig').val();
    if (id != "") {
        $.post(
            "core.php",
            {
                "action": "deleteGoods",
                "id": id
            },
            function (data) {
                if (data == 1) {
                    alert('Запись удалена');
                    clearGoodInpunts();
                    initHot();
                }
                else {
                    console.log(data);
                }
            }
        );
    }
    else {
        console.log(data);
    }
}



$(document).ready(function () {
    initHot();
    changeCategory();
    $('.add-to-db').on('click', saveToDb);
    $('.category option:selected').val();
    $('.delete-from-db').on('click', deleteGoods);
});