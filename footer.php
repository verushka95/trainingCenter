
<footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-3 col-md-6 col-xl-2">
                        <a href="<?php echo get_home_url();?>">
                            <div class="logo">
                                <?php if( has_custom_logo() ): the_custom_logo(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo">
                                <?php endif; ?>
                            </div>
                        </a>
                        <!-- <div class="logo">
                            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo" class="img-fluid">
                        </div> -->
                    </div>
                    <div class="col-12 col-sm-9 col-md-6 text-lg-right col-xl-4">
                            <?php 
                                wp_nav_menu( array(
                                    'container'       => false,           
                                    'container_class' => '',              
                                    'menu_class'=>'menu footer-menu',
                                    'theme_location'=>'bottom',
                                    'after'=>' '
                                ) );
                                ?>    
                       
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3 text-xl-center align-self-start">
                        <div class="addr">
                            <?php echo get_theme_mod('addr', ' '); ?>
                        </div>
                        <div class="schedule">
                            <?php echo get_theme_mod('hours-works', ''); ?>
                        </div>
                    </div>
                    <div class="col-12 text-center col-sm-6 col-xl-3 text-sm-right">
                        <div class="phone">
                            <a href="tel:+78002052055">+7 (800) <b>205-205-5</b> </a>
                        </div>
                        <div class="mail">
                            <a href="mailto:"><?php echo get_theme_mod('email', 'mail@mail.ru'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 col-xl-6">
                        <div class="copyright">
                            © 2017-2020 «Название Логотип».  Все права защищены
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 d-flex flex-wrap justify-content-around">
                        <div class="politica">
                            <a href="/politika-konficzenczialnosti/">Политика конфиденциальности</a>
                        </div>
                        <div class="map-site">
                            <a href="/karta-sajta/">Карта сайта</a>
                        </div>
                    </div>
                
                    <div class="col-12 text-center col-md-3 col-xl-2 text-md-right">
                        <div class="social">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/img/VK.png" alt="vk">
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/img/Twit.png" alt="twitter">
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/img/FaceB.png" alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <h4>Оставьте свои контактные данные и с Вами свяжется наш специалист</h4>
                    <?php echo do_shortcode('[contact-form-7 id="98" title="Связаться"]'); ?>
                </div>
                </div>
            </div>
        </div>
        <div id="button-up">
        </div>
    </footer>	
	<?php wp_footer(); ?>
</body>
</html>
