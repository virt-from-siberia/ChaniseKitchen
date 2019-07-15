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
    <style>
        body {
            background: black !important;
        }

        .nav-manu-link {
            background: rgba(22, 22, 22, 0.8) !important;
        }

        .navbar {
            opacity: 0.9;
            background: rgba(22, 22, 22, 0.8) !important;
        }
    </style>

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
            <div class="header-blok pt-1">
                <img class="header-blok-name wow fadeInUp" src="img/beer/craft-logo.png" alt="craft-town">
                <img class="header-blok-logo wow fadeInUp" src="img/icons/craftLogo.png" alt="craft-town-logo">
            </div>

            <div class="devader"></div>
        </section>

        <section>
            <div class="about-beer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="text-center wow fadeInUp">Craft Town</h2>
                            <p class="wow fadeInUp">Это в первую очередь то место, где вы можете насладиться крафтовым пивом <span>собственного производства </span> с большим количеством снеков и закусок.</p>
                        </div>
                        <div class="col-md-6 col-sm-12 wow fadeInUp ">
                            <img class="img-fluid" src="img/beer/405948.jpg" alt="picture">
                        </div>
                        <div class="col-md-6 col-sm-12 wow fadeInUp">
                            <img class="img-fluid" src="img/beer/bGxh4hkDAM8.jpg" alt="picture">
                        </div>
                        <div class="col-md-6 col-sm-12 wow fadeInUp">
                            <p>Мы очень хотим, чтобы наш паб стал для вас вторым домом, как уже стал для нас. Вот почему мы не ограничились первоклассным пивом и барной стойкой, а создали по-настоящему уютное пространство, куда вы могли бы приходить с друзьями и отлично проводить время</p>
                        </div>
                        <div class="col-md-6 col-sm-12 wow fadeInUp">
                            <p>Производится на мощностях читинского производителя пива, после доукомплектования производства собственным специальным оборудованием, исключительно из отборного сырья, под
                                личным присмотром технологов пивоварни.</p>
                        </div>
                        <div class="col-md-6 col-sm-12 wow fadeInUp">
                            <img class="img-fluid" src="img/beer/home-2-offer.png" alt="picture">
                        </div>
                        <div class="col-md-6 col-sm-12 wow fadeInUp">
                            <video class="" width="100%" loop controls controlsList="nodownload" autoplay/muted> <source src="video/Craft Town.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="owl-carousel slide-five owl-theme">
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/1.jpg"><img src="img/beer/gallery/1.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/2.jpg"><img src="img/beer/gallery/2.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/3.jpg"><img src="img/beer/gallery/3.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/5.jpg"><img src="img/beer/gallery/5.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/6.jpg"><img src="img/beer/gallery/6.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/7.jpg"><img src="img/beer/gallery/7.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/8.jpg"><img src="img/beer/gallery/8.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/9.jpg"><img src="img/beer/gallery/9.jpg" alt="картинка"></a>
                                </div>
                                <div class="item wow fadeIn">
                                    <a data-fancybox="gallery" href="img/beer/gallery/10.jpg"><img src="img/beer/gallery/10.jpg" alt="картинка"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="beer-menu">
                <div class="beer-menu-header">
                    <h2 class="text-center pt-3 wow fadeIn">Заказывайте пиво с доставкой на дом!
                        от <br> <span>CRAFT-TOWN</span>
                    </h2>
                    <div class="text-center pb-3">
                        <img class="wow fadeIn beer-menu-icon" src="img/icons/beer-delivery-icon.png" alt="beer-delivery">
                    </div>
                </div>
            </div>

            <div class="about-delivery-beer">
                <div class="wrapper">
                    <h3 class="text-center wow fadeIn">Бесплатная доставка от<span> 1000 </span>рублей по городу и от <span>1500</span> на КСК и ГРЭС</h3>
                </div>
            </div>



            <div class="beer-in-botting">
                <div class="black-blog">
                    <h3 class="text-center">Пиво на розлив</h3>
                    <img class="" src="img/icons/beer.png" alt="">


                    <div class="goods-out-beerRozlive" id="beer">
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

                            </div>
                        </div> -->
                        <!-- //END GENERATE CONTENT======================================= -->
                    </div>


                </div>
            </div>
        </section>

        <section>
            <div class="devader"></div>
            <div class="location">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-sm-12">
                            <div class="text-center wow fadeIn">
                                <i class="mt-3 fas fa-map-marked-alt"></i>
                            </div>
                            <h3 class="wow fadeIn">Мы находимся по адресу: ул. Анохина, 93</h3>
                            <div class="wow fadeIn text-center">
                                <i class=" fas fa-phone"></i>
                            </div>
                            <p class="wow fadeIn">Наш номер: <br> <span>☎ +7 (996) 020-40-97 </span></p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid" src="img/beer/gallery/location.jpg" alt="craft-town">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="map"></div>
    </main>


    <!-- GOOGLE MAPS API AIzaSyC08aRPYGcdqBEhkIQUmVMCzdmKDRIOta0 -->

    <script>
        function initMap() {
            var pos = {
                lat: 52.032764,
                lng: 113.495392
            }
            var opt = {
                center: pos,
                zoom: 15,
                styles: [{
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#212121"
                        }]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#212121"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#bdbdbd"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#181818"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1b1b1b"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#2c2c2c"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#8a8a8a"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#373737"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#3c3c3c"
                        }]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#4e4e4e"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#3d3d3d"
                        }]
                    }
                ]
            }
            var map = new google.maps.Map(document.getElementById("map"), opt);
            var marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: "craft-town",
                icon: 'img/icons/yellow-dot-craft-town.png'
            });

        }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC08aRPYGcdqBEhkIQUmVMCzdmKDRIOta0&callback=initMap" async defer></script>

    <?php require "footer-beer.php" ?>