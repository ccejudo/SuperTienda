<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SUPERTIENDA</title>
<!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- These two JS are loaded at the top for gray scale including the loader. -->

        <script src="js/jquery-1.11.3.min.js"></script>       <!-- jQuery (https://jquery.com/download/) -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <script>

            var tm_gray_site = false;

            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');
            }
        </script>
</head>

    <body>

      <!--Connection to mysql-->
      <?php include 'conection.php';?>

        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">

                        <a class="navbar-brand text-uppercase" href="#"><img src="img/Superman.png" alt="Super Tienda" ></i>Super Tienda</a>


                                                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                                                    &#9776;
                                                </button>
                                                <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                                                    <ul class="nav navbar-nav">
                                                        <li class="nav-item active selected">
                                                            <a class="nav-link" href="#0" data-no="1">HOMBRES <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#0" data-no="2">MUJERES</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#0" data-no="3">OTROS</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#0" data-no="4">CARRITO</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#0" data-no="5">ENTRAR</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </nav>
                                    </div>

                                    <ul class="cd-hero-slider">

                                        <!-- Page 1 Gallery One -->
                                        <li class="selected">
                                            <div class="cd-full-width">
                                                <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                                                    <div class="tm-img-gallery-container">
                                                        <div class="tm-img-gallery gallery-one">
                                                        <!-- Gallery One pop up connected with JS code below -->
                                                            <?php include 'popUpShopH.php';?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Page 2 Gallery Two -->
                                        <li>
                                            <div class="cd-full-width">
                                                <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                                                    <div class="tm-img-gallery-container">
                                                        <div class="tm-img-gallery gallery-two">
                                                        <!-- Gallery Two pop up connected with JS code below -->
                                                            <?php include 'popUpShopM.php';?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Page 3 Gallery Three -->
                                        <li>
                                            <div class="cd-full-width">
                                                <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">
                                                    <div class="tm-img-gallery-container">
                                                        <div class="tm-img-gallery gallery-three">
                                                        <!-- Gallery Two pop up connected with JS code below -->
                                                            <?php include 'popUpShopO.php';?>
                                                        </div>
                                                    </div> <!-- .tm-img-gallery-container -->
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Page 4 About -->
                                        <li>
                                            <div class="cd-full-width">
                                                <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">

                                                    <div class="tm-about-page">
                                                     
                                                     <div class="row tm-white-box-margin-b">
                                                            <div class="col-xs-12">
                                                                <div class="tm-flex">
                                                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                                                        <a class="navbar-brand text-uppercase" href=""><img src="img/Shopping-Cart-icon.png" alt="Super Tienda" ></i></a>
                                                                      
                                                                        <h2 class="tm-text-title">CARRITO CRISTOPHER</h2>
                                                                        <br /> <br />
                                                                        <!--Table Style-->
                                                                        <style>
                                                                        table {
                                                                          font-family: arial, sans-serif;
                                                                          border-collapse: collapse;
                                                                          width: 100%;
                                                                        }

                                                                        td, th {
                                                                          border: 1px solid #dddddd;
                                                                          text-align: left;
                                                                          padding: 8px;
                                                                        }

                                                                        tr:nth-child(even) {
                                                                          background-color: #dddddd;
                                                                        }
                                                                        </style>

                                                                        <table>
                                                                          <tr>
                                                                            <th>ITEM</th>
                                                                            <th>CANTIDAD</th>
                                                                            <th>PRECIO</th>
                                                                            <th>TOTAL</th>
                                                                            <th></th>
                                                                          </tr>
                                                                          <?php include 'carrito.php';?>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div> <!-- .cd-full-width -->

                                        </li>

                                        <!-- Page 5 Contact Us -->
                                        <li>
                                            <div class="cd-full-width">
                                                <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                                                    <div class="tm-contact-page">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                
                                                                <?php include 'entrar2.php';?>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div> <!-- .cd-full-width -->
                                        </li>
                                    </ul> <!-- .cd-hero-slider -->

                                    <footer class="tm-footer">

                                        <div class="tm-social-icons-container text-xs-center">
                                            <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                                            <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                                      </div>

                                        <p class="tm-copyright-text">Copyright &copy; <span class="tm-copyright-year">current year</span> Equipo Alfa Buena Maravilla Onda Dinamita Escuadrón Lobo</a></p>

                                    </footer>

                                </div> <!-- .cd-hero -->


                                <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
                                <div id="loader-wrapper">

                                    <div id="loader"></div>
                                    <div class="loader-section section-left"></div>
                                    <div class="loader-section section-right"></div>

                                </div>

                                <!-- load JS files -->

                                <script src="js/tether.min.js"></script> <!-- Tether (http://tether.io/)  -->
                                <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
                                <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
                                <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

                                <script>

                                    function adjustHeightOfPage(pageNo) {

                                        var pageContentHeight = 0;

                                        var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                                        if( pageType != undefined && pageType == "gallery") {
                                            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                                        }
                                        else {
                                            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                                        }

                                        // Get the page height
                                        var totalPageHeight = $('.cd-slider-nav').height()
                                                                + pageContentHeight
                                                                + $('.tm-footer').outerHeight();

                                        // Adjust layout based on page height and window height
                                        if(totalPageHeight > $(window).height())
                                        {
                                            $('.cd-hero-slider').addClass('small-screen');
                                            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                                        }
                                        else
                                        {
                                            $('.cd-hero-slider').removeClass('small-screen');
                                            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                                        }
                                    }

                                    /*
                                        Everything is loaded including images.
                                    */
                                    $(window).load(function(){

                                        adjustHeightOfPage(1); // Adjust page height

                                        /* Gallery One pop up
                                        -----------------------------------------*/
                                        $('.gallery-one').magnificPopup({
                                            delegate: 'a', // child items selector, by clicking on it popup will open
                                            type: 'image',
                                            gallery:{enabled:true}
                                        });

                                //Shopping popup
                                $('.open-popup-link').magnificPopup({
                                  type:'inline',
                                  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
                                });

                                /* Gallery Two pop up
                                        -----------------------------------------*/
                        				$('.gallery-two').magnificPopup({
                                            delegate: 'a',
                                            type: 'image',
                                            gallery:{enabled:true}
                                        });

                                        /* Gallery Three pop up
                                        -----------------------------------------*/
                                        $('.gallery-three').magnificPopup({
                                            delegate: 'a',
                                            type: 'image',
                                            gallery:{enabled:true}
                                        });

                                        /* Collapse menu after click
                                        -----------------------------------------*/
                                        $('#tmNavbar a').click(function(){
                                            $('#tmNavbar').collapse('hide');

                                            adjustHeightOfPage($(this).data("no")); // Adjust page height
                                        });

                                        /* Browser resized
                                        -----------------------------------------*/
                                        $( window ).resize(function() {
                                            var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

                                            // wait 3 seconds
                                            setTimeout(function() {
                                                adjustHeightOfPage( currentPageNo );
                                            }, 1000);

                                        });

                                        // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                                        $('body').addClass('loaded');

                                        // Write current year in copyright text.
                                        $(".tm-copyright-year").text(new Date().getFullYear());

                                    });

                                    /* Google map
                                    ------------------------------------------------*/
                                    var map = '';
                                    var center;

                                    function initialize() {
                                        var mapOptions = {
                                            zoom: 13,
                                            center: new google.maps.LatLng(37.779724, -122.452152),
                                            scrollwheel: false
                                        };

                                        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                                        google.maps.event.addDomListener(map, 'idle', function() {
                                          calculateCenter();
                                        });

                                        google.maps.event.addDomListener(window, 'resize', function() {
                                          map.setCenter(center);
                                        });
                                    }

                                    function calculateCenter() {
                                        center = map.getCenter();
                                    }

                                    function loadGoogleMap(){
                                        var script = document.createElement('script');
                                        script.type = 'text/javascript';
                                        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                                        document.body.appendChild(script);
                                    }

                                    // DOM is ready
                                    $(function() {
                                        loadGoogleMap(); // Google Map
                                    });

                                </script>

                        </body>
                        </html>
