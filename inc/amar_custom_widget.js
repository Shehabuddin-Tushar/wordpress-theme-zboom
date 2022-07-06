jQuery(document).ready(function(){
	
	
	jQuery('button.image2').click(function(){
		
		
		tb_show('','media-upload.php?post_id=77&type=image&TB_iframe=1');
		return false;
		
		
		});
	
	window.send_to_editor=function(html){
		
		var imagelink=jQuery('img',html).attr('src');
		
		jQuery('.images1').val(imagelink);
		
		tb_remove();
		
		}
	
	})