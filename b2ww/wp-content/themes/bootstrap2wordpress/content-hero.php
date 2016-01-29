<?php
//Custom Fields
$prelaunch_price        =  get_post_meta(5, 'prelaunch_price', true);
$launch_price           =  get_post_meta(5, 'launch_price', true);
$final_price            =  get_post_meta(5, 'final_price', true);
$course_url             =  get_post_meta(5, 'course_url', true);
$button_text            =  get_post_meta(5, 'button_text', true);

?>

<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png"
                         alt="BootStrap Wordress" class="logo">
                </div>

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>

                    <p class="lead"><?php bloginfo('description'); ?></p>

                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-launch Price
                                <small>Buy!</small>
                            </h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div>

                        <div class="price">
                            <h4>Launch Price
                                <small>Buy!</small>
                            </h4>
                            <span><?php echo $launch_price; ?></span>
                        </div>

                        <div class="price">
                            <h4>Final Price
                                <small>Buy!</small>
                            </h4>
                            <span><?php echo $final_price; ?></span>
                        </div>

                    </div>
                    <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>"
                          role="button"><?php echo $button_text; ?></a></p>
                </div>

            </div>
        </div>
    </article>
</section>