<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Grid</title>


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
                        <button type="button" class="btn btn-success btn-lg ">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- CART -->
        <div class="wrapper">
            <div class="cart text-center wow bounceIn" data-toggle="modal" data-target=".bd-example-modal-lg">
                <i class="fas fa-shopping-cart"></i>
                <div class="sum wow  bounceIn">1000</div>
            </div>
        </div>


        <section class="menu-block-header">
            <div class="menu-header">
                <div class="menu-header-content">
                    <hr class="separator-line wow fadeInUp">
                    <h2 class="menu-block-header  mt-4 text-white wow fadeInUp">Наше Меню</h2>
                </div>
            </div>
        </section>

        <div class="separator">
            <img class="mini-logo" src="img/miniLogo.png" alt="logo">
        </div>

        <section class="menu-body">
            <div class="menu-body-content parallax-window" data-parallax="scroll" data-image-src="img/bg_4.jpg">
                <div class="wrapper">

                    <!-- //GENERATE BLOCK=========================================== -->
                    <div class="goods-out-cold item-container">



                    </div>

                    <div class="goods-out-hot item-container">



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