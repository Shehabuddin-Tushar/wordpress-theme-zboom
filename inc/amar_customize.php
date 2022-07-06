<?php


function ami_customize_banate_pari($customizekorbo){
	
	
	
	$customizekorbo->add_section('logo-copyright-section',array(
	'title'=>'logo and copyright change',
	'priority'=>20
	
	));
	
	$customizekorbo->add_setting('copyright',array(
	
	'default'=>'Copyright © 2013 - Free Html5 Templates by Zerotheme.com',
	'transport'=>'postMessage'
	
	));
	
	$customizekorbo->add_control('copyright',array(
	
	'section'=>'logo-copyright-section',
	'label'=>'copyright text',
	'type'=>'text'
	
	));
	
	$customizekorbo->add_setting('color',array(
	
	'default'=>'#fff',
	'transport'=>'refresh'
	
	));
	
	$customizekorbo->add_control(
	
	
	new WP_Customize_Color_Control($customizekorbo,'color',array(
	
	'section'=>'logo-copyright-section',
	'label'=>'copyright color change',
	'setting'=>'color'
	
	
	))
	
	
	);
	
	
	$customizekorbo->add_setting('logo-img',array(
	
	'default'=>get_template_directory_uri().'/images/logo.png',
	'transport'=>'refresh'
	
	));
	
	$customizekorbo->add_control(
	
	
	new WP_Customize_Image_Control($customizekorbo,'logo-img',array(
	
	'section'=>'logo-copyright-section',
	'label'=>'logo image upload',
	'setting'=>'logo-img'
	
	
	))
	
	
	);
	
	$customizekorbo->add_setting('logo-show',array(
	
	'default'=>'',
	'transport'=>'refresh'
	
	));
	
	$customizekorbo->add_control('logo-show',array(
	
	'section'=>'logo-copyright-section',
	'label'=>'if you want logo do not show then select',
	'type'=>'checkbox'
	
	));
	
	
	}


add_action('customize_register','ami_customize_banate_pari');

 function this_is_customize(){
	 
	 
	 
	 wp_enqueue_script('amar_customjs',get_template_directory_uri().'/inc/amar_customjs.js',array('jquery','customize-preview'));
	 
	 
	 
	 
	 }
add_action('customize_preview_init','this_is_customize');

?>