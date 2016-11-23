
    	   </div>
        </div>

        <footer>
            <div id="inner-footer" class="vertical-nav">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6">
                            <?php dynamic_sidebar('disclosure'); ?>
                        </div>

                        <div class="col-sm-6">
                            <?php dynamic_sidebar('follow-us'); ?>
                        </div>

                    </div>

                    <div class="row">
                        <?php dynamic_sidebar('footer1'); ?>

                        <div class="col-xs-12 text-center">
                            <p>&copy; <?php echo date("Y") ?>&nbsp;<?php bloginfo('name'); ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

	<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>