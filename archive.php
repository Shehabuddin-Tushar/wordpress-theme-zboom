<?php get_header(); ?>


<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
              
                
                <?php while(have_posts()):the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                        
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y');?>]</div>
                       
                        <br>
						<?php read_more(100); ?>
						
					</article>
                   <?php endwhile;?>
                   <div id="pagi">
                    <?php the_posts_pagination(array(
					
					'prev_text'=>'prev',
					'next_text'=>'next',
					'screen_reader_text'=>' '
					
					
					)); ?>
                    </div>
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