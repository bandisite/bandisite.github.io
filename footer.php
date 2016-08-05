<footer class="box">
	<div class="container">
		<div class="row">
				<div class="col-md-4">
		<?php if ( have_posts() ) : query_posts('p=312');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
					</div>
				<div class="col-md-4">
		<?php if ( have_posts() ) : query_posts('p=316');
		while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<div class="form">
						<form action="#">
							<input type="email"/>
						</form>
					</div>
					<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
				<div class="col-md-3">
		<?php if ( have_posts() ) : query_posts('p=318');
		while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
</footer>

</div>  <!-- wrapper -->
<?php wp_footer(); ?>
</body>
</html>