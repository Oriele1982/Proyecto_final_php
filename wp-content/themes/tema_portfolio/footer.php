<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>
	<footer class="footer_index">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h5> Oriele´s Portafolio 2018 </h5>
			</div>
		</div>
	</footer>
<?php wp_footer() ?>
</body>
</html>