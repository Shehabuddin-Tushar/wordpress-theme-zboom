<?php echo get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                <?php if ( have_posts() ) :?>
                <?php while(have_posts()):the_post();?> 
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y'); ?> with <?php comments_popup_link(); ?>]</div>
						<p><?php read_more(50); ?></p>
						
					</article>
                    <?php endwhile; ?> 
                    <?php else : ?>
                           <?php get_template_part('404'); ?>
                    <?php endif; ?>
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
<!--------------Footer--------------->
<?php echo get_footer(); ?>