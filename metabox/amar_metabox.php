<?php



function amar_custom_metabox(){
	
	
	
	add_meta_box(
	
	'its_amar_meta_id',
	'what is your favourate food',
	'its_amar_callback',
	'protfolio',
	'normal'
	
	
	
	
	);
	
	
	
	
	
	}


add_action('add_meta_boxes','amar_custom_metabox');


function its_amar_callback($post){?>
	
	<input type="text" class="widefat" name="favourate" value="<?php echo get_post_meta($post->ID,'favourate',true);?>"/>
	
	
	<?php }


function ami_postmeta_savekorbo($post_id){
	
	update_post_meta($post_id,'favourate',$_POST['favourate']);
	
	}
add_action('save_post','ami_postmeta_savekorbo');
?>