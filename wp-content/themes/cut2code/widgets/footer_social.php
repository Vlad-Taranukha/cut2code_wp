<?php

class footer_social extends WP_Widget {

    function __construct() {
        parent::__construct('footer_social', 'Social icons custom', array( 'description' => 'Custom social icons widget', ));
    }

    public function widget( $args, $instance ) {
        $social_arr = array_values(array_values($instance['acf'])[0]);
        if ($social_arr) {
            ?>
            <ul class="footer__social col-sm-6 col-lg-4 order-2 order-sm-1">
                <?php
                for ($i = 0; $i < count($social_arr); $i++) {
                    $social_arr[$i] = array_values($social_arr[$i]);
                    ?>
                    <li class="footer__social-item">
                        <a href="<?php echo $social_arr[$i][0];?>" class="footer__social-link">
                            <?php echo $social_arr[$i][1];?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }

    }

    public function form( $instance ) {

    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['acf'] = $new_instance['acf'];
        return $instance;
    }

}