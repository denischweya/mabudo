<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta
		charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback"
		href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-100 text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header class="sticky-header">

			<div class="mx-auto wrapper">
				<div class="lg:flex lg:justify-between lg:items-center border-b">
					<div class="header-inner flex justify-between">
						<div class="items-left w-2/4 md:w-1/4 lg:w-1/5 logo">
							<?php if (has_custom_logo()) { ?>
							<?php the_custom_logo(); ?>
							<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>"
								class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo('name'); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>

							<?php } ?>
						</div>

						<div class="burger-menu lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
					
							</a>
						</div>
					</div>
					<div class="header-menu">
						<?php
wp_nav_menu(
    array(
        'container_id'    => 'primary-menu',
        'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
        'menu_class'      => 'lg:flex lg:-mx-4',
        'theme_location'  => 'primary',
        'li_class'        => 'lg:mx-4',
        'fallback_cb'     => false,
    )
);
wp_nav_menu(
    array(
        'container_id'    => 'language-switcher',
        'container_class' => '',
        'menu_class'      => '',
        'theme_location'  => 'language-switcher',
        'li_class'        => '',
        'fallback_cb'     => false,
    )
);

?>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>