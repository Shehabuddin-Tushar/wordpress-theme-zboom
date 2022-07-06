<?php get_header(); ?>

<?php
/*

template name:Home
*/



?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
               
                <?php
                   $myslider=new WP_Query(array(
				   
				   'post_type'=>'slider',
				   'posts_per_page'=>5
				   
				   
				   
				   ));
				   
				   
				   
				   
				   ?> 
                   <?php if($myslider->have_posts()):?>
                   <?php while($myslider->have_posts()):$myslider->the_post();?>
					<li><?php the_post_thumbnail(); ?></li>
                    
                     <?php endwhile; ?> 
                     <?php else: ?>
                     <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png"/></li>
					 <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.png"/></li>
					 <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide3.png"/></li>
				<?php endif; ?>	
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
        
          <?php
                   $myblock=new WP_Query(array(
				   
				   'post_type'=>'block',
				   'posts_per_page'=>3
				   
				   
				   
				   ));
				   
				   
				   
				   
				   ?> 
             <?php if($myblock->have_posts()):?>       
             <?php while($myblock->have_posts()):$myblock->the_post();?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<p><?php read_more(100);?></p>
					<div class="more"><a href="<?php the_permalink();?>">[...]</a></div>
				</div>
			</div>
            <?php endwhile; ?> 
            <?php else: ?>
               <div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<?php endif; ?>	
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
                    
                   <?php
                   $mypost=new WP_Query(array(
				   
				   'post_type'=>'post',
				   'posts_per_page'=>5
				   
				   
				   
				   ));
				   
				   
				   
				   
				   ?> 
                    
                   <?php while($mypost->have_posts()):$mypost->the_post();?> 
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="info">By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('comment nai','akta comment','% comments','tushar','comment off');?></div>
								<p><?php read_more(100);?> <a href="<?php the_permalink(); ?>">[...]</a></p>
							</div>
						</div>
					</article>
                  <?php endwhile; ?>  
					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<?php dynamic_sidebar('right-sidebar');?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>