<?php



class ami_widget_banate_pari extends WP_Widget{
	
	
	
	
	public function __construct(){
		
		
		parent::__construct('ami_widget_banate_pari','About us',array(
		
		'description'=>'About yourself'
		
		));
		
		}
		
		
	public function widget($args,$instance){
		
		$title=$instance['title'];
		$name=$instance['name'];
		$companyname=$instance['companyname'];
		$logo=$instance['logo-image'];
		
		
		$amar_widget=$args['before_widget'].$args['before_title'].$title.$args['after_title'];
		
		$amar_widget.="<h1>owner name : $name</h1>";
		$amar_widget.="<h1>company name : $companyname</h1>";
		echo $amar_widget.='<img class="image" src="'.$logo.'"/>'.$args['after_widget'];
		
		
		}
	
	public function form($instance){
		
		$title=$instance['title'];
		$name=$instance['name'];
		$companyname=$instance['companyname'];
		$logo=$instance['logo-image'];
		
		?>
		
		
		<p>
        <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
        </p>
        
        
        
        <p>
        <label for="<?php echo $this->get_field_id('name'); ?>">Name:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $name; ?>">
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('companyname'); ?>">Company:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('companyname'); ?>" name="<?php echo $this->get_field_name('companyname'); ?>" type="text" value="<?php echo  $companyname; ?>">
        </p>
		
		 
        <p>
        <label for="<?php echo $this->get_field_id('logo-image'); ?>">Upload your image:</label>
		<input class="widefat images1" id="<?php echo $this->get_field_id('logo-image'); ?>" name="<?php echo $this->get_field_name('logo-image'); ?>" type="text" value="<?php echo $logo; ?>">
        </p>
        <button class="image2">select image</button>
		
		
		
		
		<?php }
	
}



function amar_widget_register_korbo(){
	
	register_widget('ami_widget_banate_pari');
	
	}


add_action('widgets_init','amar_widget_register_korbo');













?>