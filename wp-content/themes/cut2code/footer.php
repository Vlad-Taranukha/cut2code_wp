<footer id="footer" class="footer">
    <div class="container">
        <div class="row g-0 align-items-center">
            <?php
            if ( is_active_sidebar( 'footer_social_sidebar' ) ) {
                dynamic_sidebar( 'footer_social_sidebar' );
            }
            ?>
            <div class="footer__logo col-sm-6 col-lg-4 order-1 order-sm-2">
                <?php
                if( has_custom_logo() ){
                    echo get_custom_logo();
                }
                ?>
            </div>
            <?php
                if ( is_active_sidebar( 'footer_copy' ) ) {
                    dynamic_sidebar( 'footer_copy' );
                }
                ?>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>