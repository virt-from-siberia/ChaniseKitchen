<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Вкус Китая - доставка китайской кухни в Чите.</title>
    <meta name="yandex-verification" content="1f9cfed6824c7fa8" />
    <meta name="description" content="Доставка Китайской кухни в городе Чита, Китайская кухня Чита, Заказ еды , заказ на дом, Заказ еды в Чите">
    <meta name="keywords" content="Вкус Китая чита, Китайская кухня , доставка еды в г. Чита, доставка китайской еды, Чита, заказ на дом , бесплатная доставка. Заказ еды в Чите, заказать Китайскую кухню, Меню">



    <?php require "header.php" ?>


    <main>


        <!--MODAL -->
        <!-- <button type="button" class="btn btn-primary" >Large modal</button> -->

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="mini-cart">
                        <h3>Ваши покупки</h3>
                        <div class="mini-cart-items">
                            <!-- //GENERATE CONTENT -->
                        </div>
                        <button type="button" class="btn btn-success btn-lg ">
                            <a href="cart.php">Редактировать/Оформить заказ</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- CART -->
        <div class="wrapper">
            <div class="cart text-center " data-toggle="modal" data-target=".bd-example-modal-lg">
                <i class="fas fa-shopping-cart"></i>
                <div class="sum ">0</div>
            </div>
        </div>


        <section class="menu-block-header">
            <div class="menu-header">
                <div class="menu-header-content">
                    <hr class="separator-line wow fadeInUp">
                    <h1 class="menu-block-header  mt-4 text-white wow fadeInUp">Наше Меню</h1>
                </div>
            </div>
        </section>

        <div class="separator">
            <img class="mini-logo" src="img/miniLogo.png" alt="logo">
        </div>

        <section class="menu-body">
            <div class="menu-body-content parallax-window">
                <div class="wrapper">

                    <!-- //GENERATE BLOCK=========================================== -->
                    <div class="image-dishes text-center" id="cold-dishes">
                        <img src="img/icons/salad.png" alt="Салаты">
                    </div>
                    <div class="goods-out-cold item-container">
                        <!-- //OUT++++ -->
                    </div>



                    <div class="image-dishes text-center" id="hot-dishes">
                        <img src="img/icons/hot.png" alt="Горячие блюда">
                    </div>
                    <div class="goods-out-hot item-container">
                        <!-- //OUT++++ -->
                    </div>



                    <div class="image-dishes text-center" id="pizza">
                        <img src="img/icons/pizza.png" alt="пицца">
                    </div>
                    <div class="goods-out-pizza item-container">
                        <!-- //OUT++++ -->
                    </div>



                    <div class="image-dishes text-center" id="drink-dishes">
                        <img src="img/icons/drink.png" alt="Напитки">
                    </div>
                    <div class="goods-out-drink item-container">
                        <!-- //OUT++++ -->
                    </div>

                    <div class="image-dishes text-center" id="wok-dishes">
                        <img src="img/icons/wok.png" alt="лапша wok">
                    </div>
                    <div class="goods-out-wok item-container">
                        <!-- //OUT++++ -->
                    </div>

                    <div class="image-dishes text-center" id="burger-dishes">
                        <img src="img/icons/burger.png" alt="бургеры">
                    </div>
                    <div class="goods-out-burger item-container">
                        <!-- //OUT++++ -->
                    </div>

                    <div class="image-dishes text-center" id="kebab-dishes">
                        <img src="img/icons/kebab.png" alt="шаурма">
                    </div>
                    <div class="goods-out-kebab item-container">
                        <!-- //OUT++++ -->
                    </div>


                    <!-- //END GENERATE BLOCK=========================================== -->





                    <!-- //END WRAPPER -->
                </div>
                <!-- //END menu-body-content -->
            </div>

            <!-- <div class="mini-cart"></div> -->

        </section>
    </main>

    <?php require "footer-menu.php" ?>