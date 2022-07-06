<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                <?php while(have_posts()):the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y');?> with <?php comments_popup_link('comments nai','akta comment','%comments','tushar','comments off');?>]</div>
						<p><?php read_more(20); ?> <a href="<?php the_permalink(); ?>">[ Read more ]</a></p>
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
				<?php dynamic_sidebar('amar-right-sidebar');?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>