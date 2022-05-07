<?php get_header(); ?>
    <nav class="main-menu">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/close.svg" alt="" class="main-menu__close">
        <?php
        wp_nav_menu(array(
            'menu' => 'main',
            'menu_class' => 'nav',
            'container' => '',
            'container_class' => '',
            'theme_location' => 'main'
        ))
        ?>
    </nav>
    <header id="header" class="header" style="background: <?php the_field('banner_background_color', 44);?>">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/header_bg.png" alt="" class="header__bg-image">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/header_boy.png" alt="" class="header__boy-img">
        <div class="header__info-wrapper">
            <div class="container header__mobile-container">
                <div class="header__header-logo row g-0 justify-content-between align-items-center">
                    <div class="col-3">
                        <?php
                        if( has_custom_logo() ){
                            echo get_custom_logo();
                        }
                        ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/burger.svg" alt="" class="hamburger">
                </div>
                <?php
                $args = array(
                    'category_name' => 'banner',
                    'posts_per_page' => 1,
                    'orderby' => 'ID',
                    'order' => 'ASC'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="header__info row g-0 col-12 col-lg-7 col-xl-6">
                            <h1 class="header__h1 section-header"><?php the_title();?></h1>
                            <p class="header__txt"><?php the_content();?></p>
                            <div class="header__links">
                                <a href="<?php the_field('banner_app_link');?>" class="link link-btn header__get-app">download app</a>
                                <a href="<?php the_field('banner_video_link');?>" class="link header__video-link">
                                    <img class="header__play-btn" src="<?php echo get_template_directory_uri();?>/assets/img/play_btn.svg" alt="">
                                    watch video</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                else {
                    echo "Nothing found...";
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div id="features" class="features row justify-content-between m-0">
                <?php
                $args = array(
                    'category_name' => 'features',
                    'posts_per_page' => 3,
                    'order' => 'ASC',
                    'orderby' => 'ID'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="feature">
                            <div class="feature__img-wrapper" style="background: <?php the_field('feature_icon_background');?>">
                                <img src="<?php the_field('feature_icon');?>" alt="" class="feature__icon">
                            </div>
                            <h3 class="feature__header"><?php the_title();?></h3>
                            <p class="feature__txt"><?php the_content();?></p>
                        </div>
                        <?php
                    }
                }
                else {
                    echo "No features found";
                }

                wp_reset_postdata();
                ?>
            </div>
            <section id="app" class="section row g-0">
                <?php
                $args = array(
                    'category_name' => 'app-details',
                    'posts_per_page' => 1,
                    'orderby' => 'ID',
                    'order' => 'ASC'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="col-md-4 col-xl-6 section__img-wrapper">
                            <img src="<?php the_post_thumbnail_url();?>" alt="" class="section__img">
                        </div>
                        <div class="col-12 col-md-8 col-xl-6 section__details">
                            <img src="<?php the_field('app_details_icon');?>" alt="" class="section__icon">
                            <h2 class="section__header section-header"><?php the_title();?></h2>
                            <p class="section__txt"><?php the_content();?></p>
                            <ul class="section__list">
                                <?php
                                // Check rows exists.
                                if( have_rows('app_details_list') ):

                                    // Loop through rows.
                                    while( have_rows('app_details_list') ) : the_row();

                                        // Load sub field value.
                                        $sub_value = get_sub_field('app_details_list_item');
                                        ?>
                                        <li class="section__list-item"><?php echo $sub_value;;?></li>
                                    <?php
                                    endwhile;
                                else :
                                    // Do something...
                                endif;
                                ?>
                            </ul>
                            <a class="section__link link link-btn" href="<?php the_permalink();?>">learn more</a>
                        </div>
                        <?php
                    }
                }
                else {
                    echo "Nothing found...";
                }
                wp_reset_postdata();
                ?>
            </section>
            <section id="faq" class="section row g-0">
                <?php
                $args = array(
                    'category_name' => 'questions',
                    'posts_per_page' => 1,
                    'orderby' => 'ID',
                    'order' => 'ASC'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="col-md-4 col-xl-6 section__img-wrapper">
                            <img src="<?php the_post_thumbnail_url();?>" alt="" class="section__img">
                        </div>
                        <div class="col-12 col-md-8 col-xl-6 section__details">
                            <img src="<?php the_field('questions_icon');?>" alt="" class="section__icon">
                            <h2 class="section__header section-header"><?php the_title();?></h2>
                            <p class="section__txt"><?php the_content();?></p>
                            <div class="faq">
                                <?php
                                // Check rows exists.
                                if( have_rows('faq') ):

                                    // Loop through rows.
                                    while( have_rows('faq') ) : the_row();

                                        // Load sub field value.
                                        $question = get_sub_field('faq_question');
                                        $answer = get_sub_field('faq_answer');
                                        ?>
                                        <div class="question">
                                            <h3 class="question__header"><?php echo $question;?></h3>
                                            <p class="question__answer"><?php echo $answer;?></p>
                                        </div>
                                    <?php
                                    endwhile;
                                else :
                                    echo "Nothing found...";
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                else {
                    echo "Nothing found...";
                }
                wp_reset_postdata();
                ?>
            </section>
            <?php
                if ( is_active_sidebar( 'counter_sidebar' ) ) {
                    dynamic_sidebar( 'counter_sidebar' );
                }
                ?>
            <div id="contacts" class="contacts row g-0">
                <?php
                $args = array(
                    'category_name' => 'contacts',
                    'posts_per_page' => 1,
                    'orderby' => 'ID',
                    'order' => 'ASC'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <h2 class="contacts__header section-header"><?php the_title();?></h2>
                        <p class="contacts__txt"><?php the_content();?></p>
                        <a href="<?php the_permalink();?>" class="contacts__link link link-btn">contact us</a>
                        <?php
                    }
                }
                else {
                    echo "Nothing found...";
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </main>
<?php
get_footer();