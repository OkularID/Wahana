<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- Home Header -->
<section class="headerSection">
<!--Desktop-->
    <style>
        .header_background {

        }
        .head_title {
            position: absolute;
            top: 45% !important;
            left: 40px;
            padding-right: 56% !important;
        }
        .fc {
            color: yellow !important;
        }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="">
                        <h1 class="font-white head_title">
                            <a class="fc">24 hours</a> quality control program for the highest standards
                        </h1>
                    </div>
                    <img class="img-fluid header_background" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_header-04.png"/>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <style>
        @media screen and (max-width: 846px) {
            .header_background {

            }
            .head_title {
                position: absolute;
                top: 45% !important;
                left: 40px;
                padding-right: 56% !important;
            }
            .fc {
                color: yellow !important;
            }
        }
    </style>
    <div class="d-block d-lg-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="">
                        <h1 class="font-white head_title">
                            <a class="fc">24 hours</a> quality control program for the highest standards
                        </h1>
                    </div>
                    <img class="img-fluid header_background" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_header-04.png"/>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="secondSection">
    <!--Desktop-->
    <style>
        ._title {
            position: absolute !important;
            top: 25% !important;
            left: -16% !important;
        }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid pt-lg-5p pb-lg-5p">
            <div class="row">
                <div class="col-lg-6 pl-lg-5p">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_sec2-06.png"/>
                </div>

                <div class="col-lg-6 pt-lg-15p pl-lg-5p pr-lg-10p">
                    <div class="_content">
                        <div class="_title pl-lg-0 pr-lg-50p">
                            <h2><a style="color: green">We’re the leading producer of palm oil products in</a>
                                <a style="color: yellow;">Indonesia</a>
                            </h2>
                        </div>
                        <div class="_text pt-lg-10p">
                            PT Wahana Citra Nabati develops its sales team to be flexible and adaptable towards various
                            customers and the industry they operate in. With 20 years worth of experience, the sales team
                            is tailored to fully capitalize the market growth.
                        </div>
                        <style>
                            .bg_btn_sec{
                                position: relative;
                                padding: 9% 5%;
                                background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                                background-size: 40% 40% !important;
                                background-repeat: no-repeat !important;
                                background-position: center !important;
                                left: -30%;
                            }
                        </style>
                        <div class="bg_btn_sec font-white text-center">
                            <a style="color: green;">MORE ABOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Mobile-->
    <div class="d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                ._title {
                    position: absolute !important;
                    top: 25% !important;
                    left: -16% !important;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-5p">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid header_background" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_sec2-06.png"/>
                </div>

                <div class="col-12">
                    <div class="_content">
                        <div class="_title pl-lg-0 pr-lg-50p">
                            <h2><a style="color: green">We’re the leading producer of palm oil products in</a>
                                <a style="color: yellow;">Indonesia</a>
                            </h2>
                        </div>
                        <div class="_text pt-lg-10p">
                            PT Wahana Citra Nabati develops its sales team to be flexible and adaptable towards various
                            customers and the industry they operate in. With 20 years worth of experience, the sales team
                            is tailored to fully capitalize the market growth.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="thirdSection">
    <!--Desktop-->
    <div class="d-lg-block pt-lg-5p pb-lg-5p">
        <div class="container-fluid">

            <!--Row 1-->
            <div class="row pt-lg-5p pb-lg-5p" style="background-color: #f5f5f5;">
                <div class="col-lg-7">
                    <h1 class="pl-lg-20p pr-lg-15p">
                        <a style="color: yellow">Sustainibility</a>
                        <a style="color: green">is one of our main core</a>
                    </h1>
                </div>
                <div class="col-lg-5 pl-lg-0 pr-lg-15p">
                    <div>PT Wahana Citra Nabati (WCN) is committed to produce the highest quality refined palm oil products by ensuring the sustainable palm oil practices are well implemented through its strategies and policies.</div>
                    <style>
                        .bg_btn_third{
                            position: relative;
                            padding: 9% 5%;
                            background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                            background-size: 48% 45% !important;
                            background-repeat: no-repeat !important;
                            background-position: center !important;
                            top: 70px;
                            left: -2%;
                        }
                    </style>
                    <div class="bg_btn_third font-white text-center">
                        <a style="color: green;">LEARN MORE</a>
                    </div>
                </div>

                <!--Row 2-->
                <div class="row pt-lg-5p pl-lg-10p pr-lg-10p">
                    <div class="col-lg-4 pl-lg-5p pr-lg-p text-center">
                        <img class="img-fluid w-lg-45p" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon-06.png"/><br>
                        <div class="text-center pl-lg-20p pr-lg-20p">
                            Commitments for all third-party suppliers of palm oil
                        </div>
                    </div>

                    <div class="col-lg-4 pl-lg-5p pr-lg-p text-center">
                        <img class="img-fluid w-lg-45p" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon-07.png"/><br>
                        <div class="text-center pl-lg-20p pr-lg-20p">
                            Commitments for all third-party suppliers of palm oil
                        </div>
                    </div>

                    <div class="col-lg-4 pl-lg-5p pr-lg-p text-center">
                        <img class="img-fluid w-lg-45p" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon-08.png"/><br>
                        <div class="text-center pl-lg-20p pr-lg-20p">
                            Commitments for all third-party suppliers of palm oil
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Mobile-->
    <div class="d-lg-none pt-lg-5p pb-lg-5p">
        <div class="container-fluid">

            <!--Row 1-->
            <div class="row pt-lg-5p pb-lg-5p" style="background-color: #f5f5f5;">
                <div class="col-lg-7">
                    <h1 class="pl-lg-20p pr-lg-15p">
                        <a style="color: yellow">Sustainibility</a>
                        <a style="color: green">is one of our main core</a>
                    </h1>
                </div>
                <div class="col-lg-5 pl-lg-0 pr-lg-15p">
                    <div>PT Wahana Citra Nabati (WCN) is committed to produce the highest quality refined palm oil products by ensuring the sustainable palm oil practices are well implemented through its strategies and policies.</div>
                    <style>
                        .bg_btn_third{
                            position: relative;
                            padding: 9% 5%;
                            background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                            background-size: 48% 45% !important;
                            background-repeat: no-repeat !important;
                            background-position: center !important;
                            top: 70px;
                            left: -2%;
                        }
                    </style>
                    <div class="bg_btn_third font-white text-center">
                        <a style="color: green;">LEARN MORE</a>
                    </div>
                </div>

                <!--Row 2-->
                <div class="row pt-lg-5p pl-lg-10p pr-lg-10p">
                    <div class="col-lg-4 pl-lg-5p pr-lg-p text-center">
                        <img class="img-fluid w-lg-45p" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon-06.png"/><br>
                        <div class="text-center pl-lg-20p pr-lg-20p">
                            Commitments for all third-party suppliers of palm oil
                        </div>
                    </div>

                    <div class="col-lg-4 pl-lg-5p pr-lg-p text-center">
                        <img class="img-fluid w-lg-45p" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon-07.png"/><br>
                        <div class="text-center pl-lg-20p pr-lg-20p">
                            Commitments for all third-party suppliers of palm oil
                        </div>
                    </div>

                    <div class="col-lg-4 pl-lg-5p pr-lg-p text-center">
                        <img class="img-fluid w-lg-45p" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon-08.png"/><br>
                        <div class="text-center pl-lg-20p pr-lg-20p">
                            Commitments for all third-party suppliers of palm oil
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="fourthSection">
    <div class="d-lg-block">
        <div class="container-fluid pt-lg-5p pb-lg-10p">
            <div class="row">
                <div class="col-lg-7">
                    <div>
                        <h2>
                            Bringing you the best quality product since 1999
                        </h2>
                        <tab>

                        </tab>
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-0 pr-lg-0">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_sec4-02.png"/>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>