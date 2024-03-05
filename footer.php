            <!-- Footer-->
            <footer class="py-2 bg-dark">
                <div class="contianer">
                    <div class="col-md-6"><?php dynamic_sidebar('footer1sidebar'); ?></div>
                    <div class="col-md-6"><?php dynamic_sidebar('footer2sidebar'); ?></div>
                </div>
                <div class="contianer">
                    <div class="col-md-6"><?php dynamic_sidebar('footer3sidebar'); ?></div>
                    <div class="col-md-6"><?php dynamic_sidebar('footer4sidebar'); ?></div>
                    <div class="col-md-6"><?php dynamic_sidebar('footer5sidebar'); ?></div>
                </div>
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website <?php echo date('Y'); ?></div></div>
                        <div class="col-auto">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                                <?php wp_nav_menu(
                                        array(
                                            'theme_location'    => 'footer-menu',
                                            'menu_class'        => 'nav'
                                            )
                                    ); ?>

                            </ul>


                    <!--    <a class="link-light small" href="#!">Privacy</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small" href="#!">Terms</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small" href="#!">Contact</a> -->
                        </div>
                    </div>
                </div>
            </footer>
    </body>
</html>
<?php wp_footer(); ?>