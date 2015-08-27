<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
			echo ' :';
		} ?><?php bloginfo('name'); ?></title>


	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<!-- wrapper -->
<div class="row">

	<!-- header -->
	<header class="header clear" role="banner">

		<?php if (is_front_page()) { ?>



		<?php } else { ?>

		<?php } ?>


		<nav class="nav nav-horizontal">
			<!-- NAV ITEMS -->
			<div class="row">

				<?php wp_nav_menu(array(
					'theme_location' => 'top',
					'menu_class' => 'to-left',
				)); ?>

			</div>
		</nav>

	</header>
	<!-- /header -->