<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { //whether search engines should index that page or not ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		   <?php 	//how wordpress should view the page title:
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
	<!-- referance to the css files of that page-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/footer.css">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php
		wp_head();
      	wp_enqueue_script('header');
	?>

</head>
<body <?php body_class(); ?>>
	<div class="header-widget">
		<div class="header-widget-contnet layout">
			<div class="left-side">
				<?php

					$imagesArray =  array();
					if( have_posts() ) :
						$args = array(
							'posts_per_page' => 3,
							'post_type' => 'post',
							'order' => 'DESC',
							'order_by' => 'date',
							);

						$Home = new WP_Query( $args );


						while( $Home->have_posts() ) :
							$Home->the_post();
							$post_id = get_the_ID();
							$titiele = get_the_title();
							$imagesArray[] = wp_get_attachment_url( get_post_thumbnail_id( $post_id ) );

							echo '<h1 class="content-item">' . $titiele . '</h1>';
				?>
							<div class="details <?php echo get_post_class()?>">
								<?php echo get_the_content(); ?>
							</div>
							<?php $permalink = get_permalink(); ?>
							<a href="<?php echo $permalink; ?>" class="learn-more">Learn More</a>
				<?php   endwhile;
					else :
							echo '<h1 class="content-item">There are no posts</h1>';
					endif;
				?>

			</div>	<!-- END div.left-side -->
			<div class="right-side">
				<?php foreach ($imagesArray as $value) :?>
				<div class="before-widget wrapper-border">
					<div class="left border-widget"></div>
					<div class="right border-widget"></div>
				</div>
				<img class="widget" src="<?php echo $value; ?>" />
				<div class="after-widget wrapper-border">
					<div class="left border-widget"></div>
					<div class="right border-widget"></div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="header-transperant">
				<a href="#" class="scroller scroll-up"></a>
				<a href="#" class="scroller scroll-down"></a>
			</div>
		</div>	<!-- END div.header-widget-contnet -->
	</div>  <!-- END div.header-widget -->
	<div class="header-widget-shadow"></div>
	<div id="header">		<!-- black toolbar-->
		<div class="header-contant layout">	<!-- content of black header -->
			<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
		</div>
		<div class="search-box">
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><?php get_search_form(); ?></li>
			</ul>
		</div>
	</div>
	<div class="header-shadow"></div>
	<div class="header-widget-up-shadow"></div>		<!-- the shadow over the blue background-->

	<?php wp_enqueue_script('myheader'); ?>