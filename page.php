<?php get_header(); ?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                
                <?php while(have_posts()):the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2 style="color:#FFF"><?php the_title();?></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y');?>]</div>
						<?php the_content(); ?>
						
					</article>
                   <?php endwhile;?>
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