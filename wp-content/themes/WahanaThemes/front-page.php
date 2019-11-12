<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!-- Home Header -->
<section class="headerSection">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="col-lg-12">
            <div class="container-fluid">
                <div class="row">
                    <h1>Hello world</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <div class="col-12">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>