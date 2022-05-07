<?php

class counters_widget extends WP_Widget {

    function __construct() {
        parent::__construct('counters_widget', 'Counters', array( 'description' => 'Put max counters values here', ));
    }

    public function widget( $args, $instance ) {
        $counters_arr = array_values(array_values($instance['acf'])[0]);
        if ($counters_arr) {
?>
            <div class="counters row g-0">
            <?php
            for ($i = 0; $i < count($counters_arr); $i++) {
                $counters_arr[$i] = array_values($counters_arr[$i]);
                ?>
                <div class="counter col-sm-6 col-lg-3">
                    <p class="counter__val">
                        <span class="count-num"><?php echo $counters_arr[$i][0];?></span><?php echo $counters_arr[$i][1];?></p>
                    <h4 class="counter__header"><?php echo $counters_arr[$i][2];?></h4>
                </div>
                    <?php
                }
            ?>
            </div>
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