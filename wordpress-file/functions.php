<?php 

 
	// Регистрируем меню
	register_nav_menus( array(
		'primary'  => __( 'Header menu', 'fe_starter' ),
	) );

        // Подключаем js с зависимостью от jqery
	function my_scripts_method() {
		wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery') );
	}
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );    

	// Добавление стандартной функции меню по умолчанию
	function courage_default_menu() {
		echo '<ul id="mainnav-menu" class="menu">'. wp_list_pages('title_li=&echo=0') .'</ul>';
	}




