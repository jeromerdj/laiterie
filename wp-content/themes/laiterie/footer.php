			<!-- footer -->
			<footer class="footer container" role="contentinfo">

				<?php if ( is_active_sidebar( 'sidebar-social' ) ) : ?>
				    <div id="widget-area" class="widget-area text-center" role="complementary">
				        <?php dynamic_sidebar( 'sidebar-social' ); ?>
				    </div>
				<?php endif; ?>
				<p class="text-center"> © 2018 - La laiterie   |   Mentions légales</p>

			</footer>
			<!-- /footer -->



		<?php wp_footer(); ?>

		<script type="text/javascript" src="http://localhost:35729/livereload.js">

		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
