<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
        
			<?php dynamic_sidebar('footer-sidebar');?>
			
			
		</div>
		
		<div class="row copyright">
			<p class="copy" style="color:<?php echo get_theme_mod('color');?>"><?php if(get_theme_mod('copyright')){echo get_theme_mod('copyright') ;}else{echo"Copyright © 2013 - Free Html5 Templates by Zerotheme.com";} ?></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>