<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/*
//добавляем нужные кнопки в меню
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);

function add_login_logout_link($items, $args) {
$loginoutlink = wp_loginout('index.php', false);
if(!is_user_logged_in()) 
	 $items .= '<li><a href="/wp-login.php?action=register">Регистрация</a></li>';
else 
$items .= '<li><a href="/wp-admin/">Личный кабинет</a></li>';
$items .= '<li>'. $loginoutlink .'</li>';
 return $items;
}

*/
?>