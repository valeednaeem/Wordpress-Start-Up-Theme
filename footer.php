            </div>
        </section>
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
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website <?php echo date('Y'); ?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php bloginfo( 'tempalte_directory' ); ?>/js/scripts.js"></script>
    </body>
</html>
<?php wp_footer(); ?>