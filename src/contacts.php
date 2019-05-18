<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Grid</title>


    <?php require "header.php" ?>

    <div class="heigth">

    </div>
    <div class="form mt-5">
        <div class="wrapper">
            <h3 class="text-center mt-5 mb-5">Контактная форма</h3>
            <form action="check.php" method="post" class="text-center">
                <input type="email" name="email" placeholder="Введите Email" class="form-control">
                <textarea name="message" class="form-control mt-3" placeholder="Введите ваше сообшение"></textarea>
                <button type="submit" name="sent" class=" btn btn-success mt-3">Отправить</button>
            </form>
        </div>
    </div>



    <?php require "footer.php" ?>