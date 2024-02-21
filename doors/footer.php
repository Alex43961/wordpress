  <!-- Footer -->
    <footer class="container">
        <div class="row text-center">
            <div class="col">
                 <?php wp_nav_menu(array (	                   
	                    'container'       => 'menu',
	                    'container_class' => '',
	                    'container_id'    => '',
	                    'menu_class'      => 'nav justify-content-center',
	                    'menu_id'         => '',
	                    'echo'            => true,
	                    'fallback_cb'     => 'wp_page_menu',
	                    'before'          => '',
	                    'after'           => '',
	                    'link_before'     => '',
	                    'link_after'      => '',
	                    'items_wrap'      => '<menu id="%1$s" class="%2$s">%3$s</menu>',
	                    'depth'           => 0,
	                    'walker'          => '',
                        ));?>                
                <p class="text-uppercase">Политика конфиденциальности<span>&copy;</span>Dveri-zovner.com</p>
            </div>
        </div>
    </footer>


    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>