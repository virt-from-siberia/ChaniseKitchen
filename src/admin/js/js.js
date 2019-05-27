

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
        }

    });

}

function saveToDb() {
    var id = $('#dig').val();
    if (id != undefined) {
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
                if (data == 1) {
                    alert('Товар обновлен');
                    initHot();
                } else {
                    console.log(data);
                }

            }

        );
    }
}




$(document).ready(function () {
    initHot();
    changeCategory();
    $('.add-to-db').on('click', saveToDb);
});