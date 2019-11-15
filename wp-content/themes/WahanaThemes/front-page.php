<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!-- Home Header -->
    <section class="headerSection">
        <!--Desktop-->
        <style>
            .header_background {

            }
            .head_title {
                position: absolute !important;
                top: 45% !important;
                left: 11%;
                padding-right: 50% !important;
            }
            .owl-dots {
                display: none;
            }
            .owl-prev{
                position: absolute;
                top: 70%;
                left: 11%;
                transform: translateY(-50%);
                font-size: 82px !important;
                color: #fff !important;
            }
            .owl-next{
                position: absolute;
                top: 70%;
                left: 16%;
                transform: translateY(-50%);
                font-size: 82px !important;
                color: #fff !important;
            }
            .wahana_carousel .owl-dot.active {
                display: none;
            }
        </style>
        <div class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="wahana_carousel owl-theme">
                        <?php if(have_rows('header_repeater')): ?>
                            <?php while (have_rows('header_repeater')): the_row(); ?>
                                <div class="item">
                                    <div class="col-lg-12 p-0">
                                        <div class="">
                                            <h1 class="font-white head_title">
                                                <?php the_sub_field('header_title');?>
                                            </h1>
                                        </div>
                                        <img class="img-fluid header_background" src="<?php the_sub_field('header_background');?>"/>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
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
                    <?php if(have_rows('header_repeater')): ?>
                        <?php while (have_rows('header_repeater')): the_row(); ?>
                            <div class="col-lg-12 p-0">
                                <div class="">
                                    <h1 class="font-white head_title">
                                        <?php the_sub_field('header_title');?>
                                    </h1>
                                </div>
                                <img class="img-fluid header_background" src="<?php the_sub_field('header_background');?>"/>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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
                        <img class="img-fluid" src="<?php the_field('section_2_image') ?>"/>
                    </div>

                    <div class="col-lg-6 pt-lg-15p pl-lg-5p pr-lg-10p">
                        <div class="_content">
                            <div class="_title pl-lg-0 pr-lg-50p">
                                <h2>
                                    <?php the_field('section_2_title') ?>
                                </h2>
                            </div>
                            <div class="_text pt-lg-10p">
                                <?php the_field('section_2_content') ?>
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
                                <a style="color: green;"><?php the_field('section_2_button') ?></a>
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
            <div class="container-fluid pt-lg-5p pb-lg-5p">
                <div class="row">
                    <div class="col-lg-6 pl-lg-5p">
                        <img class="img-fluid" src="<?php the_field('section_2_image') ?>"/>
                    </div>

                    <div class="col-lg-6 pt-lg-15p pl-lg-5p pr-lg-10p">
                        <div class="_content">
                            <div class="_title pl-lg-0 pr-lg-50p">
                                <h2>
                                    <?php the_field('section_2_title') ?>
                                </h2>
                            </div>
                            <div class="_text pt-lg-10p">
                                <?php the_field('section_2_content') ?>
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
                                <a style="color: green;"><?php the_field('section_2_link_button') ?></a>
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
                            <?php the_field('section_3_title') ?>
                        </h1>
                    </div>
                    <div class="col-lg-5 pl-lg-0 pr-lg-15p">
                        <div>
                            <?php the_field('section_3_content') ?>
                        </div>
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
                            <a style="color: green;"><?php the_field('section_3_button') ?></a>
                        </div>
                    </div>

                    <!--Row 2-->

                </div>

                <div class="container-fluid pb-lg-5p" style="background-color: #f5f5f5;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row pt-lg-5p pl-lg-10p pr-lg-10p">
                                <?php if(have_rows('section_3_repeater')): ?>
                                    <?php while (have_rows('section_3_repeater')): the_row(); ?>
                                        <div class="col-lg-4 pl-lg-5p pr-lg-5p text-center">

                                            <img class="img-fluid w-lg-45p" src="<?php the_sub_field('icon');?>"/><br>
                                            <div class="text-center pl-lg-20p pr-lg-20p">
                                                <?php the_sub_field('text');?>
                                            </div>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
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
        <!--Desktop-->
        <style>
            .nav-pills .nav-link.active {
                color: #000;
                background-color: white;
            }
            .nav-item a {
                color: #000;
                text-decoration: none;
                background-color: transparent;
            }
            ._tabs_img {
                width: auto;
                height: 77%;
            }
        </style>
        <div class="d-lg-block">
            <div class="container-fluid pt-lg-5p pb-lg-10p">
                <div class="row">
                    <div class="col-lg-7 pl-lg-5p">
                        <div class="_title_4 pb-lg-10p pr-lg-15p">
                            <h2>
                                <?php the_field('section_4_title') ?>
                            </h2>
                        </div>

                        <!---->
                        <div class="_tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <?php if(have_rows('section_4_repeater')): ?>
                                    <?php while (have_rows('section_4_repeater')): the_row(); ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#pills-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '',strtolower(get_sub_field('tab_title'))); ?>" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <?php the_sub_field('tab_title');?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>

                            <style>
                                .bg_btn_fourth{
                                    position: absolute;
                                    padding: 9% 5%;
                                    background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                                    background-size: 100% 34% !important;
                                    background-repeat: no-repeat !important;
                                    background-position: center !important;
                                    top: 80px;
                                    left: 0;
                                }
                            </style>
                            <div class="tab-content" id="pills-tabContent">
                                <?php if(have_rows('section_4_repeater')): ?>
                                    <?php while (have_rows('section_4_repeater')): the_row(); ?>
                                        <div class="tab-pane fade" id="pills-<?php echo preg_replace('/[^A-Za-z0-9\-]/', '',strtolower(get_sub_field('tab_title'))); ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="col-lg-3 text-center">
                                                    <img class="_tabs_img" src="<?php the_sub_field('tab_icon');?>" alt="">
                                                </div>
                                                <div class="col-lg-9 pl-lg-0">
                                                    <div>
                                                        <?php the_sub_field('tab_content');?>
                                                    </div>
                                                    <div>
                                                        <div class="bg_btn_fourth font-white text-center">
                                                            <a style="color: green;"><?php the_sub_field('tab_button_');?></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-0 pr-lg-0">
                        <img class="img-fluid" src="<?php the_field('section_4_image') ?>"/>
                    </div>
                </div>
            </div>
        </div>

        <!--Mobile-->
        <div class="d-lg-none">
            <style>
                @media screen and (max-width: 846px) {
                    .nav-pills .nav-link.active {
                        color: #000;
                        background-color: white;
                    }
                    .nav-item a {
                        color: #000;
                        text-decoration: none;
                        background-color: transparent;
                    }
                    ._tabs_img {
                        width: auto;
                        height: 77%;
                    }
                }
            </style>
            <div class="container-fluid pt-lg-5p pb-lg-10p">
                <div class="row">
                    <div class="col-lg-7 pl-lg-5p">
                        <div class="_title_4 pb-lg-10p pr-lg-15p">
                            <h2>
                                <a style="color: green">Bringing you the best quality product</a>
                                <a style="color:#ffe327;">since 1999</a>
                            </h2>
                        </div>
                        <div class="_tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">CUSTOMIZATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">QUALITY PRODUCT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">RESPONSE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">SUPPORTIVE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">PUNCTUAL</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <img class="_tabs_img" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_icon4-03.png" alt="">
                                        </div>
                                        <div class="col-lg-9 pl-lg-0">
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                            </div>
                                            <div>
                                                <style>
                                                    .bg_btn_fourth{
                                                        position: absolute;
                                                        padding: 9% 5%;
                                                        background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                                                        background-size: 100% 34% !important;
                                                        background-repeat: no-repeat !important;
                                                        background-position: center !important;
                                                        top: 80px;
                                                        left: 0;
                                                    }
                                                </style>
                                                <div class="bg_btn_fourth font-white text-center">
                                                    <a style="color: green;">LEARN MORE</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-0 pr-lg-0">
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/home/home_sec4-02.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fifthSection">
        <!--Desktop-->
        <style>
            ._title_fifth {
                position: absolute;
                top: 19% !important;
                left: 130px;
                padding-right: 0 !important;
                color: white;
            }
            ._big_title_fifth {
                position: absolute;
                top: 40%;
                left: 19%;
                color: #fff;
                right: 21%;
            }
            ._btn_fifth {
                position: absolute;
                padding: 12% 9% !important;
                background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                background-size: 96% 30% !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                top: 78%;
                left: 15% !important;
            }
        </style>
        <div class="d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <?php if(have_rows('section_5_repeater')): ?>
                        <?php while (have_rows('section_5_repeater')): the_row(); ?>
                            <div class="col-lg-6 pt-lg-5p pl-lg-0 pr-lg-0 bg_fifth_left">
                                <div class="_title_fifth">
                                    <?php the_sub_field('title');?>
                                </div>
                                <div class="_big_title_fifth">
                                    <h2>Build the <a style="color: yellow"><?php the_sub_field('big_title');?></h2>
                                </div>
                                <div class="_btn_fifth_btn">
                                    <div class="_btn_fifth font-white text-center">
                                        <a style="color: green;"><?php the_sub_field('btn');?></a>
                                    </div>
                                </div>
                                <img class="img-fluid" src="<?php the_sub_field('bg_img');?>"/>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!--Mobile-->
        <style>
            ._title_fifth {
                position: absolute;
                top: 19% !important;
                left: 130px;
                padding-right: 0 !important;
                color: white;
            }
            ._big_title_fifth {
                position: absolute;
                top: 40%;
                left: 19%;
                color: #fff;
                right: 21%;
            }
        </style>
        <div class="d-lg-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 pt-lg-5p pl-lg-0 pr-lg-0 bg_fifth_left">
                        <div class="_title_fifth">
                            OUR SOLUTIONS - CUSTOMIZATION
                        </div>
                        <div class="_big_title_fifth">
                            <h2>Build the <a style="color: yellow">ideal product</a> for your business with us</h2>
                        </div>
                        <div class="_btn_fifth_btn">
                            <style>
                                ._btn_fifth {
                                    position: absolute;
                                    padding: 9% 5%;
                                    background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                                    background-size: 96% 30% !important;
                                    background-repeat: no-repeat !important;
                                    background-position: center !important;
                                    top: 78%;
                                    left: 30%;
                                }
                            </style>
                            <div class="_btn_fifth font-white text-center">
                                <a style="color: green;">LEARN MORE</a>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/home/5-04.png"/>
                    </div>

                    <div class="col-lg-6 pt-lg-5p pl-lg-0 pr-lg-0 bg_fifth_left">
                        <div class="_title_fifth">
                            OUR SOLUTIONS - RESEARCH & DEVELOPMENT
                        </div>
                        <div class="_big_title_fifth">
                            <h2>Keep innovating with our <a style="color: yellow">Malaysian - Germany</a> based engineering</h2>
                        </div>
                        <div class="_btn_fifth_btn">
                            <style>
                                ._btn_fifth {
                                    position: absolute;
                                    padding: 9% 5%;
                                    background: url("<?php bloginfo('stylesheet_directory');?>/images/home/partials/bg_btn-08.png");
                                    background-size: 96% 30% !important;
                                    background-repeat: no-repeat !important;
                                    background-position: center !important;
                                    top: 78%;
                                    left: 30%;
                                }
                            </style>
                            <div class="_btn_fifth font-white text-center">
                                <a style="color: green;">LEARN MORE</a>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/home/5-05.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sixSection">
        <!--Desktop-->
        <div class="d-lg-block">
            <div class="container-fluid" style="background-color:#12ae42">
                <div class="row">

                            <div class="col-lg-12 pt-lg-10p pb-lg-5p">
                        <div class="row">
                            <?php if(have_rows('section_6_repeater')): ?>
                                <?php while (have_rows('section_6_repeater')): the_row(); ?>
                                    <div class="col-lg-4 pl-lg-5p pr-lg-5p">
                                        <div>
                                            <img class="img-fluid" src="<?php the_sub_field('img');?>" alt="">
                                        </div>
                                        <div class="_cat pt-lg-5p" style="color: yellow">
                                            <?php the_sub_field('categories');?>
                                        </div>
                                        <div class="_title_news pt-lg-5p font-white">
                                            <h3><?php the_sub_field('title');?></h3>
                                        </div>
                                        <div class="_date pt-lg-5p font-white">
                                            <?php the_sub_field('date');?>
                                        </div>
                                        <div class="_content_news pt-lg-5p font-white">
                                            <?php the_sub_field('news_preview');?>
                                        </div>
                                        <a href="#" style="color: yellow"><?php the_sub_field('read_more_btn');?></a>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--Our Client-->
    <section class="seventSection">
        <style>
            ._list_clients {
                position: relative;
                list-style-type: none;
            }
            ._list_clients li {
                display: inline;
                width: 10%;
            }
            .img_clients li {
                width: 5% !important;
                height: auto;
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pt-lg-5p pb-lg-5p pl-lg-5p pr-lg-5p">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2><a style="color: green"><?php the_field('section_7_title') ?></h2>
                        </div>
                        <div class="col-lg-9 pl-lg-0">
                            <ul class="_list_clients">
                                <?php if(have_rows('section_7_repeater')): ?>
                                    <?php while (have_rows('section_7_repeater')): the_row(); ?>
                                        <li><img class="img-fluid img_clients" src="<?php the_sub_field('img_clients');?>" alt=""></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endwhile; ?>
<?php get_footer(); ?>i