<?php /* Template Name: Custom Temaplate */
get_header(); ?>
<?php   wp_link_pages(); ?>
<main role="main">
	<!-- section -->
	<div class="head">
		<div class="grid-x grid-padding-x">
			<div id="head" class="cell large-12">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<?php
					if( get_query_var('paged')) $paged = get_query_var('paged');
					if( get_query_var('page')) $paged = get_query_var('page');
					$query = new WP_Query( array('post_type' => 'carousel', 'paged' => $paged));
					if( $query -> have_posts()):
					while( $query -> have_posts() ): $query -> the_post();
					$images = get_field('owl_carousel_images');
					foreach($images as $image):
					?>

					<div class="item"><img src="<?php echo $image['url'];?>"/> </div>

					<?php
				endforeach;
					endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
	<section id="pages">
		<div class="features">
			<div class="wrapper">
				<div class="grid-x grid-padding-x">
					<?php
					if( get_query_var('paged')) $paged = get_query_var('paged');
					if( get_query_var('page')) $paged = get_query_var('page');
					$query = new WP_Query( array('post_type' => 'features', 'paged' => $paged));
					if( $query -> have_posts()):
					while( $query -> have_posts() ): $query -> the_post(); ?>
					<div class="cell large-4">

						<div class="content">
							<img src="<?php  the_field('features_image');?>" />
						</div>
						<div class="content">
							<h4><strong><?php  the_field('features_title');?></strong>
							</div>
							<p> <?php the_field('features_content');?></p>
					</div>
					<?php endwhile;
					endif;
					?>

				</div>
			</div>
		</div>
	</section><section id="work">
	<div class="work">
		<div class="wrapper">
			<div class="grid-x grid-padding-x">
				<div class="cell large-1"></div>
				<div class="cell large-10">
					<div class="content">
						<h2><strong>FEATURED WORK</strong></h2>
					</div>
					<?php
					if( get_query_var('paged')) $paged = get_query_var('paged');
					if( get_query_var('page')) $paged = get_query_var('page');
					$query = new WP_Query( array('post_type' => 'feature_work', 'paged' => $paged));
					if( $query -> have_posts()):
					while( $query -> have_posts() ): $query -> the_post(); ?>
					<div class="content"><?php the_content(); ?> </div>

					<?php endwhile;
					endif;
					?>

					<div class="content"><h3> <?php the_field("featured_work_text");?> </h3> </div>

				</div>
				<div class="cell large-1"></div>
			</div>
		</div>
	</div>
	<div class="gallery">
		<div class="grid-x grid-padding-x">

			<?php
			$i = 1;
			if( get_query_var('paged')) $paged = get_query_var('paged');
			if( get_query_var('page')) $paged = get_query_var('page');
			$query = new WP_Query( array('post_type' => 'gallery', 'paged' => $paged));
			if( $query -> have_posts()):
			while( $query -> have_posts() ): $query -> the_post(); ?>
			<?php $title = get_the_title(); ?>
			<?php
					if(strpos($title, 'large') !== false): {  ?>
					<div class="cell large-6" id="gallery">
							<a data-open="modal<?php echo $i ?>">
								<img src="<?php the_field('gallery_image');?>" alt="<?php the_field('gallery_image_title'); ?>", id="gall" />
							</a>
					</div>
					<?php $i = $i + 1; }
					else : { ?>
						<div class="cell large-2" id="gallery">
								<a data-open="modal<?php echo $i ?>">
									<img src="<?php the_field('gallery_image');?>" alt="<?php the_field('gallery_image_title'); ?>", id="gall" />
								</a>
						</div>
					<?php  $i = $i + 1; }
				endif;
				?>
				<div id="modal<?php echo $i-1?>" class="reveal small" data-reveal data-animation-in="scale-in-up" data-animation-out="scale-out-down">
					<img src="<?php the_field('gallery_image');?>" alt="Placeholder 1" /><?php the_field('gallery_image_title');?>
				</div>
				<?php
			  endwhile;
				endif;
			?>

		</div>
	</div>
</section>
<section id="services">
<div class="employees">
	<div class="wrapper">
		<div class="grid-x grid-padding-x">
			<?php
			if( get_query_var('paged')) $paged = get_query_var('paged');
			if( get_query_var('page')) $paged = get_query_var('page');
			$query = new WP_Query( array('post_type' => 'employees', 'paged' => $paged));
			if( $query -> have_posts()):
			while( $query -> have_posts() ): $query -> the_post(); ?>
			<div class="cell large-3">
				<div class="content">
					<img src=" <?php the_field('employee_image'); ?>" />
				</div>
				<div class="content">
					<p> <?php  the_field('employee_name');?></p>
				</div>
			</div>
			<?php endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<div class="services">
	<div class="wrapper">
		<div class="grid-x grid-padding-x">
			<?php
			if( get_query_var('paged')) $paged = get_query_var('paged');
			if( get_query_var('page')) $paged = get_query_var('page');
			$query = new WP_Query( array('post_type' => 'services', 'paged' => $paged));
			if( $query -> have_posts()):
			while( $query -> have_posts() ): $query -> the_post(); ?>
			<div class="cell large-5">
								<div class="grid-x grid-padding-x">
									<div class="cell large-4">
									</div>
									<div class="cell large-8">
										<div class="center">
											<img src="<?php the_field('services_image')?>"/>
										</div>
									</div>
								</div>
							</div>
							<div class= "cell large-7">
								<div class="grid-x grid-padding-x">
									<h2><strong><?php the_field('services_title'); ?></strong></h2>
									<div class="cell large-8">
										<p><?php the_field('services_large_text');?></p>
									</div>
									<div class= "cell large-4">
										<p><?php the_field('services_small_text');?></p>
									</div>
								</div>
							</div>
			<?php endwhile;
			endif;
			?>
		</div>
	</div>
</div>
</section><section id="blog">
<div class="blog">
<div class="wrapper">
	<div class="grid-x grid-padding-x">
		<?php
		if( get_query_var('paged')) $paged = get_query_var('paged');
		if( get_query_var('page')) $paged = get_query_var('page');
		$query = new WP_Query( array('post_type' => 'blog', 'paged' => $paged));
		if( $query -> have_posts()):
		while( $query -> have_posts() ): $query -> the_post(); ?>
				<div class="cell large-3">
					<div class="content">
						<div class="counter" data-count="<?php the_field('blog_number'); ?>"><strong>0</strong></div>
					</div>
							<div class="content">
								<h4><?php the_field('blog_title');?></h4>
							</div>
						</div>
		<?php


		endwhile;
		endif;
		?>

	</div>
</div>
</div>
</section><section id="contact">
<div class="social-media">
<div class="wrapper">
<div class="grid-x grid-padding-x">
	<div class="cell large-4">
		<h3><strong>ABOUT US</strong></h3>

		<?php
		if( get_query_var('paged')) $paged = get_query_var('paged');
		if( get_query_var('page')) $paged = get_query_var('page');
		$query = new WP_Query( array('post_type' => 'about_us', 'paged' => $paged));
		if( $query -> have_posts()):
		while( $query -> have_posts() ): $query -> the_post(); ?>
					<p><?php the_content(); ?></p>
					<?php

					endwhile;
					endif;
					?>

		</div>
	<div class="cell large-4">
		<h3><strong>GET IN TOUCH</strong></h3>
		<div class="grid-x grid-padding-x">
			<?php
			if( get_query_var('paged')) $paged = get_query_var('paged');
			if( get_query_var('page')) $paged = get_query_var('page');
			$query = new WP_Query( array('post_type' => 'social_media', 'paged' => $paged));
			if( $query -> have_posts()):
			while( $query -> have_posts() ): $query -> the_post(); ?>
			<div class="cell large-4">
				<h5> <?php  the_field('title');?>:</h5>
			</div>
			<div class="cell large-8">
				<p> <?php  the_field('content');?>  </p>
			</div>

			<?php

			endwhile;
			endif;
			?>

		</div>
	</div>
	<div class="cell large-4">
		<h3><strong>SOCIAL MEDIA</strong></h3>
		<p>Contact us at any of these social links </p>
		<div class="social-media">
			<ul class="fa-ul">
				<?php
				if( get_query_var('paged')) $paged = get_query_var('paged');
				if( get_query_var('page')) $paged = get_query_var('page');
				$query = new WP_Query( array('post_type' => 'social_links', 'paged' => $paged));
				if( $query -> have_posts()):
				while( $query -> have_posts() ): $query -> the_post(); ?>

				<?php
					if(have_rows('social_links')) :
					while(have_rows('social_links')) : the_row();
					 ?>
					 	<?php $string = get_sub_field('button_text');?>
						<?php $class = "fa-link". $string . "fa-2x"; ?>
						<li><a target="_blank" href="<?php the_sub_field('links'); ?>" style="color:white;"><?php the_sub_field('button_text'); ?></a></i></li>
				<?php
				endwhile;
				endif;
				endwhile;
				endif;
				?>

			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>
