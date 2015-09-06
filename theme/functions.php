<?php
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'full-thumbnail', 650, 250, true ); // название, ширина, высота, жесткая обрезка
}
?>