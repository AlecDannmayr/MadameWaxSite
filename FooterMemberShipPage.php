<?php /* Template Name: Footer For offers Page */ ?>

</div>
</div>

<div class="full-width guarantee-badge">
	<img src="/wp-content/themes/madamewax/img/100-money-back-guarantee-420px.png" alt="100% Money Back Guarantee" style="vertical-align: bottom; position: relative; top: -75px;" width="150" height="150">
</div>	

<div class="full-width guarantee-text">
	<div class="row">
		<div class="small-12 large-8 large-centered columns">
			<h2 style="color: white; font-size: 2rem; font-style: italic;">Wax in confidence with our 100% money back guarantee!</h2>
			<p>If for any reason you're not happy with your treatment, simply tell your therapist <strong>before</strong> you leave the treatment room and you won't be charged a penny - simple.</p>
		</div>
	</div>
</div>	

<div class="full-width testimonials">
	<div class="row"><!-- Row for main content area -->
		<div class="small-12 large-8 large-centered columns">
			<?php 
				$widget_number = 1234;
				echo testimonials_slider( $args, $widget_number ); 
			?>
		</div>
	</div>
</div>

<div class="full-width footer-widget text-center">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="full-width footernav">
		<div class="row">
			<div class="large-12 columns">
				<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
			</div>
		</div>
	</div>
	<div class="row love-reverie">
		<div class="icon">
			<img src="/wp-content/themes/madamewax/img/footer-awardwinning-badge.png" alt="footer-awards@2x" width="" height="" />
			<img src="/wp-content/themes/madamewax/img/Footer-Cardiff-Life-2015-Winner-Beauty.png" alt="Footer-Cardiff-Life-2015-Winner-Beauty" width="" height="" />
			<img src="/wp-content/themes/madamewax/img/Footer-WHABA-2015-Winner.png" alt="Footer-WHABA-2015-Winner" width="" height="" />
			<img src="/wp-content/themes/madamewax/img/Footer-WHABA-2016-Finalist.png" alt="Footer-WHABA-2016-Finalist" width="" height="" />
			<img src="/wp-content/themes/madamewax/img/Footer-NEA-2016-Best-Customer-Service-Winner.png" alt="Footer-NEA-2016-Best-Customer-Service-Winner" width="" height="" />
		</div>
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Site by <a href="http://mikebutcher.com" target="_blank" title="Mike Butcher Design">mbd</a> | <a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a></p>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

<script src="/wp-content/themes/madamewax/js/rem.js" type="text/javascript"></script>

</body>
</html>