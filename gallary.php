<?php get_header(); ?>

<?php
/*

template name:gallary
*/



?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
          <?php
                   $mygallary=new WP_Query(array(
				   
				   'post_type'=>'gallary',
				   'posts_per_page'=>10
				   
				   
				   
				   ));
				   
				   
				   
				   
				   ?> 
                    
                   <?php while($mygallary->have_posts()):$mygallary->the_post();?> 
			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
				</div>
			</div>
            
          <?php endwhile; ?>  
			
		</div>
	</div>
</section>
<?php get_footer(); ?>