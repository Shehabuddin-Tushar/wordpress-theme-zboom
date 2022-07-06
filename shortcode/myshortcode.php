<?php

function amar_shortcode($atts,$content){
	
	
	$heading=extract(shortcode_atts(array(
	
	'position'=>'right'
	
	
	
	),$atts));
	
	return"<h1 align='".$position."'>My name is tushar<h1>";
	
	
	}



add_shortcode('btn','amar_shortcode');

function protfolio_shortcode($atts,$content){

$amarshortcode=extract(shortcode_atts(array(

'number'=>2


),$atts));


	
ob_start();?>
	
<div class="col-3-3">
				<div class="wrap-col">
                
                <?php
                
				$profolios=new WP_Query(array(
				
				'post_type'=>'protfolio',
				'posts_per_page'=>$number
				
				
				));
				
				
				
				?>
                
                <?php while($profolios->have_posts()):$profolios->the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                        
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y');?>]</div>
                        <?php
                        
						$terms=get_the_terms(get_the_ID(),'protfolio-catagories');
						foreach($terms as $term){
							
						   $myterms=$term->name;
							$termslink=get_term_link($term,'protfolio-catagories');
							echo '<a style="color:#3f3" href="'.$termslink.'">'.$myterms.'</a>  ';
							
							}
						
						?>
                        <br>
                        <h1 style="color:red"><?php echo get_post_meta($post->ID,'favourate',true);?></h1>
                        <h1 style="color:green"><?php echo get_post_meta($post->ID,'mycolor',true);?></h1>
                        <h1 style="color:#0FF"><?php echo get_option('header-section');?></h1>
						<?php read_more(100); ?>
						
					</article>
                   <?php endwhile;?>
				</div>
			</div>
			
	
	
<?php $protfolio=ob_get_clean();
return $protfolio;	
	}
add_shortcode('protfolio','protfolio_shortcode');
?>