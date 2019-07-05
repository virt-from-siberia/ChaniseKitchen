<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Вкус Китая - доставка китайской кухни в Чите.</title>
    <meta name="yandex-verification" content="1f9cfed6824c7fa8" />
    <meta name="description" content="Доставка Китайской кухни в городе Чита, Китайская кухня Чита, Заказ еды , заказ на дом, Заказ еды в Чите">
    <meta name="keywords" content="Вкус Китая чита, Китайская кухня , доставка еды в г. Чита, доставка китайской еды, Чита, заказ на дом , бесплатная доставка. Заказ еды в Чите, заказать Китайскую кухню">


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

        <section>
            <div class="header-blok">
                <img class="header-blok-name" src="img/beer/craft-logo.png" alt="craft-town">
                <img class="header-blok-logo" src="img/icons/craftLogo.png" alt="craft-town-logo">
            </div>

            <div class="devader"></div>
        </section>

        <section>
            <div class="about-beer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="text-center">Craft Town</h2>
                            <p>Это в первую очередь то место, где вы можете насладиться крафтовым пивом <span>собственного производства </span> с большим количеством снеков и закусок.</p>
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <img class="img-fluid" src="img/beer/405948.jpg" alt="picture">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid" src="img/beer/bGxh4hkDAM8.jpg" alt="picture">
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <p>Мы очень хотим, чтобы наш паб стал для вас вторым домом, как уже стал для нас. Вот почему мы не ограничились первоклассным пивом и барной стойкой, а создали по-настоящему уютное пространство, куда вы могли бы приходить с друзьями и отлично проводить время</p>
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <p>Производится на мощностях читинского производителя пива, после доукомплектования производства собственным специальным оборудованием, исключительно из отборного сырья, под
                                личным присмотром технологов пивоварни.</p>
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <img class="img-fluid" src="img/beer/home-2-offer.png" alt="picture">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="beer-menu">
                <div class="beer-menu-header">
                    <h2 class="text-center mt-3">Заказывайте пиво с доставкой на дом!
                        от <br> <span>CRAFT-TOWN</span>
                    </h2>
                    <div class="text-center pb-3">
                        <img class="beer-menu-icon" src="img/icons/beer-delivery-icon.png" alt="beer-delivery">
                    </div>
                </div>
            </div>


            <div class="beer-in-botting">
                <div class="black-blog">
                    <h3 class="text-center">Пиво на розлив</h3>
                    <img class="" src="img/icons/beer.png" alt="">


                    <div class="goods-out-beerRozlive">
                        <!-- //GENERATE CONTENT======================================= -->
                        <!-- <div class="wrapper mt-5">
                            <div class="row ">

                                <div class="col-md-3 col-10 my-3">
                                    <p class="beer-name text-center">st. Augustine</p>
                                    <img class="beer-img img-fluid" src="img/beer/beer-logo/augustine.jpg" alt="">
                                    <p class="beer-description text-center mt-3">пиво Августин отличное светлое пиво!</p>
                                    <p class=" beer-cost text-center">150руб 1л</p>
                                    <div class="buttons">
                                        <button type="button" class="plus btn coldPlus btn-outline btn-sm">
                                            <p>добавить</p>
                                            <i class=" far fa-plus-square"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-3 col-10 my-3">
                                    <p class="beer-name text-center">st. Augustine</p>
                                    <img class="beer-img img-fluid" src="img/beer/beer-logo/augustine.jpg" alt="">
                                    <p class="beer-description text-center mt-3">
                                        пиво Августин отличное светлое пиво!
                                    </p>
                                    <p class=" beer-cost text-center">150руб 1л</p>

                                    <div class="buttons">
                                        <button type="button" class="plus btn coldPlus btn-outline btn-sm">
                                            <p>добавить</p>
                                            <i class=" far fa-plus-square"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-3 col-10 my-3">
                                    <p class="beer-name text-center">st. Augustine</p>
                                    <img class="beer-img img-fluid" src="img/beer/beer-logo/augustine.jpg" alt="">
                                    <p class="beer-description text-center mt-3">
                                        пиво Августин отличное светлое пиво!
                                    </p>
                                    <p class=" beer-cost text-center">150руб 1л</p>

                                    <div class="buttons">
                                        <button type="button" class="plus btn coldPlus btn-outline btn-sm">
                                            <p>добавить</p>
                                            <i class=" far fa-plus-square"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-3 col-10 my-3">
                                    <p class="beer-name text-center">st. Augustine</p>
                                    <img class="beer-img img-fluid" src="img/beer/beer-logo/augustine.jpg" alt="">
                                    <p class="beer-description text-center mt-3">
                                        пиво Августин отличное светлое пиво!
                                    </p>
                                    <p class=" beer-cost text-center">150руб 1л</p>

                                    <div class="buttons">
                                        <button type="button" class="plus btn coldPlus btn-outline btn-sm">
                                            <p>добавить</p>
                                            <i class=" far fa-plus-square"></i>
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div> -->
                    </div>


                    <!-- //END GENERATE CONTENT======================================= -->

                </div>
            </div>
        </section>



    </main>







    <?php require "footer-beer.php" ?>