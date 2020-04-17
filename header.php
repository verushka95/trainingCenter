<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
	<?php wp_head(); ?>
</head>
<body>
    <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-3 col-md-12 col-xl-6">
                            <nav>
                                <div class="menu-mob" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                               
                               <?php 
                                wp_nav_menu( array(
                                    'container'       => false,           
                                    'container_class' => '',              
                                    'menu_class'=>'menu',
                                    'theme_location'=>'top',
                                    'after'=>' '
                                ) );

                                ?>
                               
                            </nav>
                        </div>
                        
                        
                        <div class="col-9  col-md-12 col-xl-6 text-xl-right ">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-7">
                                    <div class="mail">
                                        <a href="mailto:"><?php echo get_theme_mod('email', 'mail@mail.ru'); ?></a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-md-5 text-md-right">
                                    <div class="phone">
                                        <a href="tel:+78002052055">+7 (800) <b>205-205-5</b> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="collapse navbar-collapse" id="navbar">
                                        <!-- Вертикальное меню -->
                                <?php wp_nav_menu( array(
                                    'container'       => false,           
                                    'container_class' => '',              
                                    'menu_class'=>'navbar-nav',
                                    'theme_location'=>'top',
                                    'after'=>' '
                                ) );
                                 ?>      
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-6 col-md-3">
                            <a href="<?php echo get_home_url();?>">
                            <div class="logo">
                            <?php if( has_custom_logo() ): the_custom_logo(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo">
                            <?php endif; ?>
                            </div>
                        </a>
                            
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 col-lg-6 text-center">
                            <div class="target">
                                Поставь цель и я покажу как ее достигнуть!
                            </div>
                        </div>
                        <div class="col-12  text-center col-md-4 col-lg-3 text-md-right">
                            <div class="btn">
                                <a href="/stranicza/">Смотреть</a> 
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        
    </header>

    <?php 
    $image_array = get_field('image');
    if ($image_array) { ?>
        <div class="header-banner" style="background-image: url('<?php echo esc_url($image_array['url']); ?>')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-0">
                    
                        <div class="banner-text">
                            <div class="container">
                                <div class="banner-text__title">
                                    <?php the_field('title');?>
                                </div>
                                <div class="banner-text__descr">
                                    <?php the_field('descr');?>
                                </div>
                                <div class="button">
                                    <a href="/vse-speczialnosti/">Подробнее</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <a href="#main">
                <div class="header__arrow" ></div>
            </a>           
        </div>
    <?php } ?>
    


