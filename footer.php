</main>

<?php do_action( 'greenfield_theme_content_end' ); ?>

</div>

<?php do_action( 'greenfield_theme_content_after' ); ?>

<footer id="colophon" class="site-footer bg-green-900 py-12" role="contentinfo">
	<?php do_action( 'greenfield_theme_footer' ); ?>

	<div class="container mx-auto text-center text-white">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?> by GreenField Development
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
