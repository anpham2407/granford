<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="hero-banner">
	<picture>
		<source media="(min-width:768px)" srcset="/wp-content/uploads/2022/02/hero-contact.jpg">
		<img 
			src="/wp-content/uploads/2022/02/hero-contact-mobile.jpg"
			class="attachment-full size-full hero-banner-img"
			alt=""
			style="width:100%"
			data-aos="fade-down" data-aos-anchor=".site"
		>
	</picture>
	
	<div class="hero-content py-2 py-md-5">
		<div class="container-lg">
			<h4 class="head" data-aos="fade-left" data-aos-delay="200" data-aos-anchor=".site">Let’s Connect.</h4>
		</div>
	</div>
</div>

<div class="fullwidth hero-text mb-0 hero-text-contact-fix-space d-none d-md-block">
	<div class="container-lg d-md-flex">
		<div class="left-text bg-white font-3 font-head primary-color">
			Let’s Connect.
		</div>
		<div class="right-text bg-white font-regular">
		</div>
	</div>
</div>

<div class="fullwidth contact-body mb-5">
	<div class="container-lg">
		<div class="row">
			<div class="left-side col-12 col-md-6 mt-3 mt-md-0" data-aos="fade-up">
				<div class="card border-0 h-100 justify-content-between">
					<div class="introduce font-regular">
						The Granford team—backed by our deep network of resources—is ready to help problem-solve your supply chain challenges. 
					</div>
					<div class="address font-30 mb-md-5 text-dark" style="max-width: 280px">
						<br>
						<div class="fw-bold text-uppercase">US Headquarters</div>
						<div class="fw-regular">900 Riverdale Street, #187 West Springfield, MA 01089</div><br>

						<div class="fw-bold text-uppercase">US Distribution Center</div>
						<div class="fw-regular mb-md-4">1545 E. Locust Street Ontario, CA 91761</div>
					</div>
				</div>
			</div>
			<div class="right-side col-12 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
				<div class="card border-0 px-md-5">
					[contact-form-7 id="303"]
				</div>
			</div>
  		</div>
	</div>
</div>
<?php
// if ( have_posts() ) {

// 	// Load posts loop.
// 	while ( have_posts() ) {
// 		the_post();

// 		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
// 	}

// 	// Previous/next page navigation.
// 	twenty_twenty_one_the_posts_navigation();

// } else {

// 	// If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/content/content-none' );

// }

get_footer();
