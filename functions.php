<?php


function zboom_theme(){
	
	
	
	
	
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats',array('aside','audio','video'));
	
	load_theme_textdomain('zboom',get_template_directory_uri().'/languages');
	
	
	if(function_exists('register_nav_menu')){
		
		register_nav_menu('main_menu',__('main menu','zboom'));
		
		
		}
	
	function read_more($limit){
		$text=get_the_content();
		$text= $text. " ";
		$text= substr($text,0, $limit);
		$text= substr($text,0, strrpos($text,' '));
		echo $text.".......";
		
		/*$post_content=explode(" ",get_the_content());
		$less_content=array_slice($post_content,0,$limit);
		
		echo implode(" ",$less_content);*/
		
		}
	
	register_post_type('slider',array(
	
	
	
	'public'=>true,
	'exclude_from_search'=>true,
	'labels'=>array(
	
	'name'=>'slider',
	'add_new'=>'add new slider',
	'add_new_item'=>'add new slider item'
	
	),
	'supports'=>array('title','editor','thumbnail','custom-fields','comments','author','excerpt')
	
	
	
	
	));
	
	
	register_post_type('gallary',array(
	
	
	
	'public'=>true,
	
	'labels'=>array(
	
	'name'=>'gallary',
	'add_new'=>'add new photo',
	'add_new_item'=>'add new gallary item'
	
	),
	'supports'=>array('title','editor','thumbnail','custom-fields','comments','author','excerpt')
	
	
	
	
	));
	
	
	register_post_type('block',array(
	
	
	
	'public'=>true,
	
	'labels'=>array(
	
	'name'=>'block',
	'add_new'=>'add new block',
	'add_new_item'=>'add new block item'
	
	),
	'supports'=>array('title','editor','thumbnail','custom-fields','comments','author','excerpt')
	
	
	
	
	));
	
	
	
	
	
	register_post_type('protfolio',array(
	
	
	
	'public'=>true,
	
	'labels'=>array(
	
	'name'=>'protfolio',
	'add_new'=>'add new protfolio',
	'add_new_item'=>'add new protfolio item'
	
	),
	'supports'=>array('title','editor','thumbnail','custom-fields','comments','author','excerpt')
	
	
	
	
	));
	
	
	register_taxonomy('protfolio-catagories','protfolio',array(
	
	
	
	'public'=>true,
	
	'labels'=>array(
	
	'name'=>'topics',
	'parent_item'=>'parent topic'
	
	
	),
	
	'hierarchical'=>true
	
	
	
	
	
	));
	
	
	register_taxonomy('protfolio-keywords','protfolio',array(
	
	
	
	'public'=>true,
	
	'labels'=>array(
	
	'name'=>'keywords',
	
	
	
	),
	
	
	
	
	
	
	
	));
	
	
	}



add_action('after_setup_theme','zboom_theme');





function this_is_sidebar(){
	
	register_sidebar(array(
	
	'name'=>'right sidebar',
	'description'=>'this is a right sidebar',
	'id'=>'amar-right-sidebar',
	'before_widget'=>'<div class="box right-sidebar">',
	'after_widget'=>'</div></div>',
	'before_title'=>'<div class="heading"><h2>',
	'after_title'=>'</h2></div><div class="content">'
	
	
	
	
	
	));
	
	
	
	register_sidebar(array(
	
	'name'=>'contact sidebar',
	'description'=>'this is a contact sidebar',
	'id'=>'contact-sidebar',
	'before_widget'=>'<div class="box">',
	'after_widget'=>'</div></div>',
	'before_title'=>'<div class="heading"><h2>',
	'after_title'=>'</h2></div><div class="content">'
	
	
	
	
	
	));
	
	
	
	register_sidebar(array(
	
	'name'=>'footer sidebar',
	'description'=>'this is a footer sidebar',
	'id'=>'footer-sidebar',
	'before_widget'=>'<div class="col-1-4"><div class="wrap-col"><div class="box">',
	'after_widget'=>'</div></div></div></div>',
	'before_title'=>'<div class="heading"><h2>',
	'after_title'=>'</h2></div><div class="content">'
	
	
	
	
	
	));
	
	
	
	}

add_action('widgets_init','this_is_sidebar');


// Add Customizer functionality.
require get_template_directory() . '/inc/amar_customize.php';

// Add settings api functionality.
require get_template_directory() . '/inc/amar_setting.php';


// Add widget functionality.
require get_template_directory() . '/inc/amar_widget.php';



function amar_widget_js(){
	
	wp_register_script('amar_custom_widget',get_template_directory_uri().'/inc/amar_custom_widget.js',array('media-upload','thickbox'));
	
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
	
	wp_enqueue_script('amar_custom_widget');
	
	}

add_action('admin_enqueue_scripts','amar_widget_js');




// Add custommetabox functionality.
require get_template_directory() . '/metabox/amar_metabox.php';


// Add custommetabox functionality.
require get_template_directory() . '/shortcode/myshortcode.php';


// Add cmb2metabox functionality.
require get_template_directory() . '/cmb-metabox/functions.php';
require get_template_directory() . '/cmb-metabox/init.php';
















// Hooks your functions into the correct filters

	function my_add_mce_button() {

	    // check user permissions

	    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {

	        return;

	    }

	    // check if WYSIWYG is enabled

	    if ( 'true' == get_user_option( 'rich_editing' ) ) {

	        add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );

	        add_filter( 'mce_buttons', 'my_register_mce_button' );

	    }

	}

	add_action('admin_head', 'my_add_mce_button');

	 

	// Declare script for new button

	function my_add_tinymce_plugin( $plugin_array ) {

	    $plugin_array['my_mce_button'] = get_template_directory_uri() .'/shortcode/shortcodejs.js';

	    return $plugin_array;

	}

	 

	// Register new button in the editor

	function my_register_mce_button( $buttons ) {

	    array_push( $buttons, 'my_mce_button' );

	    return $buttons;

	}
	
?>