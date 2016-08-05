<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Brandi</title>
<?php wp_head(); ?>
</head>
<body>

<div id="wrapper">

<header>
<div class="container">
<div class="col-md-12">
<div class="row">
		<?php if ( have_posts() ) : query_posts('p=202');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	<nav class="right">
		<?php if ( have_posts() ) : query_posts('p=294');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	</nav>
	<?php if ( have_posts() ) : query_posts('p=194');
		while (have_posts()) : the_post(); ?>
	<div class="header-txt">
		<?php the_content(); ?>
	</div>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
<div class="social-header">
	<?php if ( have_posts() ) : query_posts('cat=28');
		while (have_posts()) : the_post(); ?>
		<a href="<?php echo get_post_meta($post->ID, 'social_url',  true);  ?>" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i></a>
		<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>
</header>
