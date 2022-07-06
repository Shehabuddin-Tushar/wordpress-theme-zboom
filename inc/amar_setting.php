<?php


function amar_setting_api(){
	
	add_settings_section('mysection','header option','ajaira_text','myslug');
	
	
	
	
	add_settings_field('header-section','what is your job','job_callback','myslug','mysection');
	register_setting('mysection','settingssss');
	
	add_settings_field('opinion-section','what is your opinion','opinion_callback','myslug','mysection');
	register_setting('mysection','settingssss');
	
	
	
	
	
	
	
	add_settings_section('mytwosection','footer option','ajaira_text','myslug');
	
	
	
	
	add_settings_field('footer-section','what is your phone number','phone_callback','myslug','mytwosection');
	register_setting('mytwosection','settingssss');
	
	
	
	
	
	
	}



add_action('admin_init','amar_setting_api');

function ajaira_text(){
	
	echo"hi this is my setting api!";
	
	}


function job_callback(){
	
	$options=(array)get_option('settingssss');
	$header=$options['header-section'];
	
	?>


	
	<input type="text" class="regular-text" name="settingssss[header-section]" value="<?php echo $header ;?>"/>
    	
	<?php }
	
	
function opinion_callback(){
	
	$options=(array)get_option('settingssss');
	$opinion=$options['opinion-section'];
	
	?>
	
	<input type="text" class="regular-text" name="settingssss[opinion-section]" value="<?php echo $opinion;?>"/>
    	
	<?php }
	
function phone_callback(){
	
	$options=(array)get_option('settingssss');
	$footer=$options['footer-section'];
	
	?>
	
	<input type="text" class="regular-text" name="settingssss[footer-section]" value="<?php echo $footer;?>"/>
    	
	<?php }


function add_amar_menu(){
	
	add_theme_page('page er title','menu name','manage_options','myslug','mypage_callback');
	
	
	
	}
add_action('admin_menu','add_amar_menu');


function mypage_callback(){?>
<?php settings_errors(); ?>

<h1>Theme option</h1>
<form action="options.php" method="post">
<?php do_settings_sections('myslug'); ?>
<?php settings_fields('mysection'); ?>
<?php settings_fields('mytwosection'); ?>

<?php submit_button(); ?>

</form>
<?php }

?>