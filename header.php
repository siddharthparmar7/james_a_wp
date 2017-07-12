<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge; IE=EmulateIE8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<?php get_template_part('template-parts/content', 'navbar') ?>
	</header>
