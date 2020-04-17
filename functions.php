<?php 
update_option( 'siteurl', 'http://test.imgconia.beget.tech' );
update_option( 'home', 'http://test.imgconia.beget.tech' );

// стили и скрипты
function create_load_styles_script()
{
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.min.css' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css' );


    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', "https://code.jquery.com/jquery-3.4.1.min.js");
    
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array(), '1', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1', true );

}

add_action('wp_enqueue_scripts', 'create_load_styles_script');

// меню
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menus(array(
        'top'    => 'Главное меню',    
        'bottom' => 'Нижнее меню'     
    ));
}

function logo_setup() {
    add_theme_support(
            'custom-logo', array(
            'height' => 52,
            'width' => 170
            )
        );
    }
add_action( 'after_setup_theme', 'logo_setup' );


function breadcrumb( $sep = ' > ' ) {
	global $post;
	$out = '';
	$out .= '<div class="breadcrumbs">';
	$out .= '<a href="' . home_url( '/' ) . '">Главная</a>';
	$out .= '<span class="breadcrumbs-sep">' . $sep . '</span>';
	if ( is_single() ) {
		$terms = get_the_terms( $post, 'category' );
		if ( is_array( $terms ) && $terms !== array() ) {
			$out .= '<a href="' . get_term_link( $terms[0] ) . '">' . $terms[0]->name . '</a>';
			$out .= '<span class="breadcrumbs-sep">' . $sep . '</span>';
		}
	}
	if ( is_singular() ) {
		$out .= '<span class="breadcrumbs-last">' . get_the_title() . '</span>';
	}
	if ( is_search() ) {
		$out .= get_search_query();
	}
	$out .= '</div><!--.breadcrumbs-->';
	return $out;
}

add_action('customize_register', function($customizer){
    $customizer->add_section(
        'section_one',
        array(
			'title' => 'Доп. настройки',
			'priority' => 11
        )
	);
	$customizer->add_setting(
		'email',
		array('default' => 'mail@mail.ru')
	);
	$customizer->add_control(
		'email',
		array(
			'label' => 'Введите E-mail',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting(
		'addr',
		array('default' => '')
	);
	$customizer->add_control(
		'addr',
		array(
			'label' => 'Введите адрес',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_setting(
		'hours-works',
		array('default' => '')
	);
	$customizer->add_control(
		'hours-works',
		array(
			'label' => 'Введите график работы',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
});
?>