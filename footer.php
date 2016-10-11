<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
	
		<div class="row block09">
		    <div class="col-1-4">
			    <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </div>
		</div>
		
		<div class="row copyright">
			<p>Copyright &copy; <?php the_date( 'Y' ); ?> - <a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank"><?php the_author(); ?></a> by <a href="http://www.zerotheme.com" target="_blank"><?php the_author(); ?></a></p>
		</div>
		
	</div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>