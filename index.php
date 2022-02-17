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
		<source media="(min-width:768px)" srcset="http://13.212.87.234/wp-content/uploads/2022/02/hero-manufacture.jpg">
		<img 
			src="http://13.212.87.234/wp-content/uploads/2022/02/hero-manufacturing-mobile.jpg"
			class="attachment-full size-full hero-banner-img"
			alt=""
			style="width:100%"
			data-aos="fade-down" data-aos-anchor=".site"
		>
	</picture>
	
	<div class="hero-content">
		<div class="container-lg">
			<h4 class="tag color-secondary fw-bold text-uppercase" data-aos="fade-left" data-aos-delay="200" data-aos-anchor=".site">Contract Manufacturing</h4>
			<h4 class="head" data-aos="fade-left" data-aos-delay="400" data-aos-anchor=".site">We Make It Happen.</h4>
			<div class="desc" data-aos="fade-left" data-aos-delay="600" data-aos-anchor=".site">Working in close collaboration with our clients and our Asia resources, we proactively manage the entire manufacturing process on your behalf.</div>
		</div>
	</div>
</div>

<div class="fullwidth hero-text overflow-hidden bg-color-primary text-white">
	<div class="container-lg d-md-flex">
		<div class="left-text bg-color-primary font-3 font-head">
			Outcome Stat or Win Goes Here. EX: We Deliver 40% Faster Than The Competition.
		</div>
		<div class="right-text bg-color-primary font-regular">
			<div class="quote">
				“Customer quote Lorem ipsum dolor sit amet, consectetur adipisicing sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
			</div>
			<div class="signa text-end font-regular">
				— Customer Name, Company Name
			</div>
		</div>
	</div>
</div>

<div class="container section overflow-hidden mt-md-6 key-1">
  <div class="row align-items-center flex-column flex-md-row">
    <div class="col order-2 order-md-1">
		<div class="block text-left">
			<div class="color-gray font-tag mb-1 mt-4 mb-lg-4 mt-lg-0 ">
				What We Deliver
			</div>
			<div class="font-regular font-20 w-lg-75">
				Granford partners with trusted local manufacturers in the MITI-V region and China to produce goods to your exact specifications, cost, and timeline. Whether it’s an existing product or a new, customized item designed for shifting market demands, we’ll select the ideal manufacturer and coordinate everything needed for success.
			</div>
		</div>
    </div>
    <div class="col order-1 overflow-hidden order-md-2">
		<div class="block text-right">
			<picture>
				<source media="(min-width:768px)" srcset="http://13.212.87.234/wp-content/uploads/2022/02/services-manufacturing-01.jpg">
				<img 
					src="http://13.212.87.234/wp-content/uploads/2022/02/services-menufacturing-01-mobile.jpg"
					class="attachment-full size-full hero-banner-img"
					alt=""
					style="width:100%"
					data-aos="fade-down" data-aos-anchor=".key-1"
				>
			</picture>
		</div>
    </div>
  </div>
</div>

<div class="container section overflow-hidden mt-md-6 key-2">
  <div class="row align-items-center flex-column flex-md-row">
    <div class="col">
		<div class="block text-left">
			<picture>
				<source media="(min-width:768px)" srcset="http://13.212.87.234/wp-content/uploads/2022/02/services-manufacturing-02.jpg">
				<img 
					src="http://13.212.87.234/wp-content/uploads/2022/02/services-menufacturing-02-mobile.jpg"
					class="attachment-full size-full hero-banner-img"
					alt=""
					style="width:100%"
					data-aos="fade-down" data-aos-anchor=".key-2"
				>
			</picture>
		</div>
    </div>
    <div class="col">
		<div class="block text-right ps-md-3">
			<div class="color-gray font-tag mb-1 mt-4 mb-lg-4 mt-lg-0">
				Key Benefits
			</div>
			<div class="font-regular font-20 w-lg-75">
				Working with Granford, you’ll have the assurance of cost-effective quality, optimal production capacity, and reliability from a company with deep relationships throughout the region. Every detail is covered; we’ll closely manage production, testing, packaging, compliance, and all the other steps along the way.
			</div>
		</div>
    </div>
  </div>
</div>

<div class="container section mt-md-6 key-3">
  <div class="row align-items-center flex-column flex-md-row">
    <div class="col order-2 order-md-1">
		<div class="block text-left">
			<div class="color-gray font-tag mb-1 mt-4 mb-lg-4 mt-lg-0">
				Working With Granford
			</div>
			<div class="font-regular font-20 w-lg-75">
				We understand that the manufacturing journey can include unexpected changes to specifications, quantities, timing, packaging, and more, based on your needs. That’s why we work so closely with our clients and remain highly flexible, with the ability to quickly shift gears and manage change to ensure your success.
			</div>
		</div>
    </div>
    <div class="col order-1 order-md-2">
		<div class="block text-right">
			<picture>
				<source media="(min-width:768px)" srcset="http://13.212.87.234/wp-content/uploads/2022/02/services-manufacturing-03.jpg">
				<img 
					src="http://13.212.87.234/wp-content/uploads/2022/02/services-menufacturing-03-mobile.jpg"
					class="attachment-full size-full hero-banner-img"
					alt=""
					style="width:100%"
					data-aos="fade-down" data-aos-anchor=".key-3"
				>
			</picture>
		</div>
    </div>
  </div>
</div>

<div class="container section mt-md-6 request-quote">
  <div class="row align-items-center">
    <div class="col-12">
		<div class="block text-center">
			<div class="color-gray font-regular font-3 w-lg-50 m-auto">
				Let us share what’s possible and prove our expertise in contract manufacturing. 
			</div>
		</div>
    </div>
    <div class="col-12">
		<div class="block text-center mt-4">
			<a href="#" class="primary-btn">Request a Quote</a>
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
