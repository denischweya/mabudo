</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-black py-12" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
	<?php if (is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') || is_active_sidebar('footer-widget-3')) : ?>

	<div id="contact">
		<div class="wrapper">
			<?php if (is_active_sidebar('contact-widget')) : ?>
			<?php dynamic_sidebar('contact-widget'); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="footer-widgets ">
		<div class="lg:flex mx-auto">
			<div class="wrapper lg:flex w-100">
				<div class="footer-widget-area w-2/6 sm:text-center justify-start">
					<?php if (is_active_sidebar('footer-widget-1')) : ?>
					<?php dynamic_sidebar('footer-widget-1'); ?>
					<?php endif; ?>
				</div>
				<div class="footer-widget-area w-2/6 justify-center text-center">
					<?php if (is_active_sidebar('footer-widget-2')) : ?>
					<?php dynamic_sidebar('footer-widget-2'); ?>
					<?php endif; ?>
				</div>
				<div class="footer-widget-area w-2/6 justify-center text-center">
					<?php if (is_active_sidebar('footer-widget-3')) : ?>
					<?php dynamic_sidebar('footer-widget-3'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="lg:flex mx-auto mt-20 footer-area-2 ">
		<div class="wrapper w-100 md:flex lg:flex">
			<div class="footer-widget-area-2 w-4/6 md:w-1/2 text-left">
				<?php if (is_active_sidebar('footer-widget-4')) : ?>
				<?php dynamic_sidebar('footer-widget-4'); ?>
				<?php endif; ?>
			</div>
			<div class="footer-widget-area-2 w-2/6 text-left">
				<?php if (is_active_sidebar('footer-widget-5')) : ?>
				<?php dynamic_sidebar('footer-widget-5'); ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
	<!-- Scroll to Top Button -->
	<div class="footer-menu">
		<?php
                wp_nav_menu(
                    array(
                                                                                                                                                                                                                                                                                                                                                        'container_id'    => 'footer-menu',
                                                                                                                                                                                                                                                                                                                                                        'container_class' => 'bg-black mt-4 p-4',
                                                                                                                                                                                                                                                                                                                                                        'menu_class'      => 'flex lg:-mx-4',
                                                                                                                                                                                                                                                                                                                                                        'theme_location'  => 'footer',
                                                                                                                                                                                                                                                                                                                                                        'li_class'        => 'lg:mx-4',
                                                                                                                                                                                                                                                                                                                                                        'fallback_cb'     => false,
                                                                                                                                                                                                                                                                                                                                                        )
                );?>
	</div>
</footer>
<a href="#" id="scroll-to-top" style="display: none;"><span class="dashicons dashicons-arrow-up-alt"></span></a>
</div>

<?php wp_footer(); ?>

</body>

</html>