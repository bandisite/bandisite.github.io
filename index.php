<?php get_header(); ?>
<!-- Features -->
<section class="features box">
<div class="container">
<div class="row">
	<h1 class="title"><?php echo get_cat_name(24); ?>    </h1>
	<span class="heart">
		<?php if ( have_posts() ) : query_posts('cat=29');
		while (have_posts()) : the_post(); ?>
		<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
		<? endwhile; endif; wp_reset_query(); ?>
	</span>
	<div class="features-descr">
		<div class="owl-carousel">
			<div class="item">
		<?php if ( have_posts() ) : query_posts('p=206');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
			<?php if ( have_posts() ) : query_posts('p=209');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
		<?php if ( have_posts() ) : query_posts('p=212');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
		<?php if ( have_posts() ) : query_posts('p=206');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
			<?php if ( have_posts() ) : query_posts('p=209');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
		<?php if ( have_posts() ) : query_posts('p=212');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
		<?php if ( have_posts() ) : query_posts('p=206');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
			<?php if ( have_posts() ) : query_posts('p=209');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="item">
		<?php if ( have_posts() ) : query_posts('p=212');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(100, 100)); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
</div>
</section>						
<!-- Works -->
<section class="work box clearfix">
<div class="container">
<div class="col-md-12">
<div class="row">
	<h1 class="title"><?php echo get_cat_name(25); ?>    </h1>
	<span class="heart">
		<?php if ( have_posts() ) : query_posts('cat=29');
		while (have_posts()) : the_post(); ?>
		<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
		<? endwhile; endif; wp_reset_query(); ?>
	</span>
	<?php if ( have_posts() ) : query_posts('p=215');
		while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
	<? endwhile; endif; wp_reset_query(); ?>
	<ul class="filterbox">
<?php if ( have_posts() ) : query_posts('p=361');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	</ul>
</div>
</div>
</div> 
<div class="portfolio">
<ul>
<li class="mix Branding mixitup_img" data-myorder="2">
			<?php if ( have_posts() ) : query_posts('p=369');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix Branding mixitup_img" data-myorder="2">
			<?php if ( have_posts() ) : query_posts('p=378');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix Web mixitup_img" data-myorder="3">
			<?php if ( have_posts() ) : query_posts('p=381');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix Web mixitup_img" data-myorder="3">
			<?php if ( have_posts() ) : query_posts('p=384');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix LogoDesign mixitup_img" data-myorder="4">
			<?php if ( have_posts() ) : query_posts('p=387');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix LogoDesign mixitup_img" data-myorder="4">
			<?php if ( have_posts() ) : query_posts('p=389');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix Photography mixitup_img" data-myorder="5">
			<?php if ( have_posts() ) : query_posts('p=394');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
<li class="mix Photography mixitup_img" data-myorder="5">
			<?php if ( have_posts() ) : query_posts('p=396');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail(array(350, 300)); ?>
			<? endwhile; endif; wp_reset_query(); ?>
</li>
</ul>	
</div>
</section>		
<!-- Team -->
<section class="team box">
<div class="container">
<div class="row">
			<h1 class="title"><?php echo get_cat_name(26); ?></h1>
	<span class="heart">
		<?php if ( have_posts() ) : query_posts('cat=29');
		while (have_posts()) : the_post(); ?>
		<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
		<? endwhile; endif; wp_reset_query(); ?>
	</span>
	<?php if ( have_posts() ) : query_posts('p=227');
		while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
	<? endwhile; endif; wp_reset_query(); ?>
	<div class="team-item">
		<div class="col-md-3">
			<div class="xoverlay x-simple">
		<?php if ( have_posts() ) : query_posts('p=232');
					while (have_posts()) : the_post(); ?>
				<?php the_post_thumbnail(array(300, 300)); ?>
				<div class="xoverlay-box">
					<div class="xoverlay-data">
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
				</div>
				<?php if ( have_posts() ) : query_posts('p=234');
				while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="col-md-3">
				<div class="xoverlay x-simple">
				<?php if ( have_posts() ) : query_posts('p=244');
					while (have_posts()) : the_post(); ?>
					<?php the_post_thumbnail(array(300, 300)); ?>
					<div class="xoverlay-box">
						<div class="xoverlay-data">
							<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
					</div>
					<?php if ( have_posts() ) : query_posts('p=246');
				while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
				</div>
				<div class="col-md-3">
					<div class="xoverlay x-simple">
						<?php if ( have_posts() ) : query_posts('p=251');
					while (have_posts()) : the_post(); ?>
					<?php the_post_thumbnail(array(300, 300)); ?>
						<div class="xoverlay-box">
							<div class="xoverlay-data">
								<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
								</div>
							</div>
						</div>
						<?php if ( have_posts() ) : query_posts('p=254');
				while (have_posts()) : the_post(); ?>
						<a href="#"><h2><?php the_title(); ?></h2></a>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-3">
						<div class="xoverlay x-simple">
							<?php if ( have_posts() ) : query_posts('p=262');
					while (have_posts()) : the_post(); ?>
					<?php the_post_thumbnail(array(300, 300)); ?>
							<div class="xoverlay-box">
								<div class="xoverlay-data">
									<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
									</div>
								</div>
							</div>
							<?php if ( have_posts() ) : query_posts('p=265');
					while (have_posts()) : the_post(); ?>
							<a href="#"><h2><?php the_title(); ?></h2></a>
						<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
	</section>	
	<!-- Fun Facts -->
	<section class="facts box">
		<div class="container">
			<div class="row">
					<h1 class="title"><?php echo get_cat_name(27); ?></h1>
					<span class="heart">
		<?php if ( have_posts() ) : query_posts('cat=29');
		while (have_posts()) : the_post(); ?>
		<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
		<? endwhile; endif; wp_reset_query(); ?>
					</span>
					<div class="facts-item">
						<div class="col-md-3">
							<?php if ( have_posts() ) : query_posts('cat=31');
							while (have_posts()) : the_post(); ?>
							<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
							<? endwhile; endif; wp_reset_query(); ?>


							<?php if ( have_posts() ) : query_posts('p=337');
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<h3><?php the_title(); ?></h3>
							<? endwhile; endif; wp_reset_query(); ?>
						</div>
						<div class="col-md-3">
						<?php if ( have_posts() ) : query_posts('cat=32');
						while (have_posts()) : the_post(); ?>
						<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
						<? endwhile; endif; wp_reset_query(); ?>

							<?php if ( have_posts() ) : query_posts('p=337');
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<h3><?php the_title(); ?></h3>
							<? endwhile; endif; wp_reset_query(); ?>
						</div>
						<div class="col-md-3">
						<?php if ( have_posts() ) : query_posts('cat=33');
						while (have_posts()) : the_post(); ?>
						<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
						<? endwhile; endif; wp_reset_query(); ?>

							<?php if ( have_posts() ) : query_posts('p=337');
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<h3><?php the_title(); ?></h3>
							<? endwhile; endif; wp_reset_query(); ?>
						</div>
						<div class="col-md-3">

						<?php if ( have_posts() ) : query_posts('cat=34');
						while (have_posts()) : the_post(); ?>
						<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
						<? endwhile; endif; wp_reset_query(); ?>

							<?php if ( have_posts() ) : query_posts('p=337');
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<h3><?php the_title(); ?></h3>
							<? endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
	</section>	
	<!-- Register -->	
	<section class="register">
		<div class="container">
			<div class="row">
					<h1 class="title">Let’s Discuss</h1>
					<span class="heart">
		<?php if ( have_posts() ) : query_posts('cat=29');
		while (have_posts()) : the_post(); ?>
		<i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i>
		<? endwhile; endif; wp_reset_query(); ?>
					</span>
					<p class="descr">Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
					<div class="form-wr">
						<div class="col-md-2">
							<h2>Cras at ultrices erat, sed vulputate!</h2>
							<address>
								2345 Setwant natrer, 1234, 
								Washington. United States.
								(401) 1234 567
								hello@brandi.com
								www.brandi.com
							</address>
						</div>
						<div class="col-md-8">
							<h1>Say hello!</h1>
							<div class="forma">
								<form action="#">
									<div class="name-form left">
										<input type="text" placeholder="Name" required>
									</div>
									<div class="email-form right">
										<input type="Email" placeholder="Email" required>
									</div>
									<div class="message-form">
										<input type="text" placeholder="Message" required>
									</div>
									<button><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>Send message</button>
								</form>
							</div>
						</div>
						<div class="col-md-2">
							<div class="social">
							<ul>
								<li>	
					<?php if ( have_posts() ) : query_posts('cat=30');
		while (have_posts()) : the_post(); ?>
		<a href="<?php echo get_post_meta($post->ID, 'social_url',  true);  ?>" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'font_awesome', true);  ?> fa-2x" aria-hidden="true"></i></a>
		<? endwhile; endif; wp_reset_query(); ?>
		             </li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		<img class="map" src="<?php bloginfo('template_url'); ?>./img/map.jpg" alt="">
	</section>		
<?php get_footer(); ?>