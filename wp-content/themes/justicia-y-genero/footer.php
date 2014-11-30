</section>
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
</div><!--fin container -->
<!--fixed search -->
<aside id="buscador" class="desktop">
	<div class="caja-deck" data-track-id="">
	Busca la sentencia
	</div>
</aside>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
