<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="yandex-verification" content="1f9cfed6824c7fa8" />
    <title>Вкус Китая Чита, Китайская кухня, доставка еды в городе Чита</title>
    <meta name="description" content="Доставка Китайской кухни в городе Чита, Китайская кухня Чита">
    <meta name="keywords" content="вкус китая чита, китайская кухня, доставка еды в чите, доставка китайской еды">


    <?php require "header.php" ?>
    <main>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center text-white" id="exampleModalLongTitle">Корзина пуста, добавьте товар в корзину</h5>
                        <!-- <button type="button  " class="btn-danger close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success text-white" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- EndModal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center text-white" id="exampleModalLongTitle">Заполните все контактные данные - имя, телефон и адресс доставки</h5>
                        <!-- <button type="button  " class="btn-danger close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success text-white" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- EndModal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center text-white" id="exampleModalLongTitle">Ваш заказ был отправлен! В ближайшее время с вами свяжется наш менеджер</h5>
                        <!-- <button type="button  " class="btn-danger close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close-order btn btn-success text-white" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- EndModal -->




        <section class="bacground-gredient">
            <div class="cartbg ">
                <div class="wrapper">
                    <div class="cart-body">
                        <br class="hide-small-screen">
                        <br class="hide-small-screen">
                        <div class="cart-body-header mt-5">
                            <h1 class="text-center wow fadeInUp "> Ваши покупки</h1>
                        </div>


                        <!-- // START OF GENERATE goods-out-cold -->
                        <div class="goods-out-cold item-container">

                        </div>
                        <!-- // END OF GENERATE goods-out-cold -->

                        <div class="common-cost-orders text-center wow fadeInUp">
                            <p class="common-cost-orders-article ">Обшая сумма заказа</p>
                            <p class="common-cost-orders-summ "></p>
                        </div>
                    </div>
                </div>


            </div>
            </div>
            </div>
        </section>




        <section>
            <header class="contact-form">
                <div class="wrapper">


                    <div class="contacts">
                        <div class="contacts-header text-center wow fadeInUp">
                            <h2>Ввадите ваши данные для доставки</h2>
                        </div>
                        <div class="contacts-name text-center wow fadeInUp">
                            <p>Ваше имя:<input id="ename" class="form-control" type="text"></p>
                        </div>
                        <div class="contacts-phone text-center wow fadeInUp">
                            <p>Ваш телефон:<input id="ephone" type="number" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"> </p>
                        </div>
                        <div class="contacts-adrres text-center wow fadeInUp">
                            <p>Адресс доставки:<input id="eadrres" type="text" class="form-control"> </p>
                        </div>
                        <div class="contacts-description text-center wow fadeInUp">
                            <p>Комментарий к заказу:<input id="edescription" type="text" class="form-control"> </p>
                        </div>
                        <button type="button" class="send-form btn btn-outline-danger wow fadeInUp">Отправить заявку</button>
                    </div>


                </div>
        </section>
    </main>


    <?php require "footer-cart.php" ?>