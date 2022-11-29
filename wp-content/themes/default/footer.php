<footer>
    <div class="footer__wrap">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__head">
                    <figure class="footer__image"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/footer.png')">
                        <img class="screen-reader-text"
                             src="<?php echo get_template_directory_uri() ?> /uploads/footer.png" alt="Footer logo"/>
                    </figure>
                </div>
                <div class="footer__body">
                    <div class="footer__links">
                        <?php
                        $menuArgs = array(
                            'container' => false,
                            'menu' => 'Primary Navigation',
                            'menu_class' => 'footerNav',
                        );
                        wp_nav_menu($menuArgs);
                        ?>
                        <div class="footer__buttonWrapper">
                            <button type="button" class="button footer__button">Request a Rep</button>
                        </div>
                    </div>
                    <p>This site contains material about Ferring Pharmaceuticals Inc. (hereinafter “Ferring”) and its
                        various products that may be of interest to Ferring’s employees and customers, as well as to
                        members of the healthcare community and the general public. Please feel free to browse this
                        website. Your access and use of the information contained herein is subject to the following
                        <a href="#" class="footer__underline">terms and conditions</a> and all applicable laws. All
                        information on this site is intended for US
                        audiences only.
                    </p>
                    <p>Ferring, the Ferring Pharmaceuticals logo, and REBYOTA are registered trademarks of Ferring B.V.
                        ©2022 Ferring B.V. All rights reserved. US-REB-2200106 1/23</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <?php
            $menuArgs = array(
                'container' => false,
                'menu' => 'Footer Navigation',
                'menu_class' => 'footerSecondary',
            );
            wp_nav_menu($menuArgs);
            ?> </div>
    </div>

</footer>
</div>
<?php require_once(get_template_directory() . '/template-parts/svg-icons.php'); ?>
<?php wp_footer(); ?>
</body>

</html>