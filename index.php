<?php get_header(); ?>
<!--top news slider-->
<section id="news">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <?php
//                if (in_array('main',the_field('location_post'))) {
//                if (the_field('location_post' == 'main')) {

                    $main = array(
                        'category_name' => 'main-news',
                        'order' => 'DESC',
                        'posts_per_page' => '3'

                    );

                    $my_main = new WP_Query($main);

                    if ($my_main->have_posts()) {

                        while ($my_main->have_posts()) {

                            $my_main->the_post(); ?>

                            <!-- Post data goes here.-->
                            <div class="main-news">
                                <?php the_post_thumbnail(); ?>
                                <i class="badge badge-<?php the_field('badge_name') ?>"><?php the_field('depart') ?></i>
                                <span><?php the_title(); ?></span>
                            </div>
                            <?php
                        }
                    }
                    // Reset the $post
                    wp_reset_postdata();
//                }
                ?>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<!--end top news slider-->
<!--egypt-news-->

<section id="egypt-news">
    <div class="row">
        <div class="container" id="new">
            <div class="title ml-1">
                <h4><?php echo get_cat_name(5);?></h4>
            </div>
            <!-- Carousel -->
            <div id="owl-demo" class="owl-carousel owl-theme">
                <?php

                $args = array(
                    'category_name' => 'egypt-news',
                    'order'=> 'ASC',
                );

                $my_query = new WP_Query( $args );

                if ( $my_query->have_posts() ) {

                    while ( $my_query->have_posts() ) {

                        $my_query->the_post();?>

                        <!-- Post data goes here.-->
                        <div class="item">
                            <span><?php the_title();?></span>
                            <?php the_post_thumbnail();?>
                        </div>
                        <?php
                    }
                }
                // Reset the $post
                wp_reset_postdata();
                ?>



            </div>
            </div>
            <!-- /Carousel -->

        </div>
</section>
<!--end egypt-news-->
<!--feature-->
<section>
    <div class="container">
        <div class="row">
            <!--features-->
            <div class="col-md-8 col-12" id="features">
                <div class="title">
                    <h4><?php echo get_cat_name(6);?></h4>
                </div>
                <div class="row">
                    <?php

                    $fet = array(
                        'category_name' => 'features',
                        'order'=> 'DESC',
                        'posts_per_page' => '2'
                    );

                    $my_feature = new WP_Query( $fet );

                    if ( $my_feature->have_posts() ) {

                        while ( $my_feature->have_posts() ) {

                            $my_feature->the_post();?>

                            <!-- Post data goes here.-->
                            <div class="col-md-6">
                                <div class="feature">
                                    <?php the_post_thumbnail();?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    // Reset the $post
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!--end features -->
            <!--top 5 story-->
            <div class="col-md-3 ml-md-auto col-12" id="top-five">
                <div class="title">
                    <h4>top 5 stories</h4>
                </div>
                <ul class="list-unstyled">
                    <?php
                    query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&order=DESC');
                    if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><span><?php echo $wp_query->current_post +1;  ?></span> <?php the_title();?></li>
                        <?php
                    endwhile; endif;
                    wp_reset_query();
                    ?>
                </ul>
            </div>
            <!--end top 5 story-->
        </div>
    </div>
</section>
<!--end feature-->
<?php get_footer();  ?>
