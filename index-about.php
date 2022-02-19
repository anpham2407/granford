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
		<source media="(min-width:768px)" srcset="/wp-content/uploads/2022/02/hero-about.jpg">
		<img 
			src="/wp-content/uploads/2022/02/hero-about-mobile.jpg"
			class="attachment-full size-full hero-banner-img"
			alt=""
			style="width:100%"
			data-aos="fade-down" data-aos-anchor=".site"
		>
	</picture>
	
	<div class="hero-content">
		<div class="container-lg">
			<h4 class="tag color-secondary fw-bold text-uppercase" data-aos="fade-left" data-aos-delay="200" data-aos-anchor=".site">Our Story</h4>
			<h4 class="head" data-aos="fade-left" data-aos-delay="400" data-aos-anchor=".site">Expert Problem Solvers.</h4>
			<div class="desc" data-aos="fade-left" data-aos-delay="600" data-aos-anchor=".site">We exist to provide innovative solutions to clients’ supply chain challenges. From sourcing and manufacturing to distribution and private labeling, our expertise and flexibility can help you win.</div>
		</div>
	</div>
</div>

<div class="fullwidth hero-text bg-color-primary text-white mb-0 about-fix-height">
	<div class="container-lg d-md-flex">
		<div class="left-text bg-color-primary font-3 font-head">
		Why You Should Choose Granford.
		</div>
		<div class="right-text bg-color-primary font-regular">
		</div>
	</div>
</div>
<div class="fullwidth about-list-item">
	<div class="container-lg">
		<div class="row">
			<div class="col-12 col-md-4 mt-3 mt-md-0" data-aos="fade-up" data-aos-delay="200">
				<div class="card border-0">
					<img src="/wp-content/uploads/2022/02/about-item-1.jpg" class="card-img-top" alt="A Trusted Partner">
					<div class="card-body px-0">
						<h5 class="card-title font-head primary-color font-3 fw-normal mt-2 mt-md-3">A Trusted Partner</h5>
						<p class="card-text font-20">Fortune 1000 clients trust Granford because we listen to their challenges, closely collaborate with them to identify the best solutions—then deliver on our promises.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
				<div class="card border-0">
					<img src="/wp-content/uploads/2022/02/about-item-2.jpg" class="card-img-top" alt="A Trusted Partner">
					<div class="card-body px-0">
						<h5 class="card-title font-head primary-color font-3 fw-normal mt-2 mt-md-3">A Proven Network</h5>
						<p class="card-text font-20">Over the years, we’ve built trusted, local relationships with resources across the MITI-V region and China. Let us put this proven network to work for you.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
				<div class="card border-0">
					<img src="/wp-content/uploads/2022/02/about-item-3.jpg" class="card-img-top" alt="A Trusted Partner">
					<div class="card-body px-0">
						<h5 class="card-title font-head primary-color font-3 fw-normal mt-2 mt-md-3">Dedicated to Your Success</h5>
						<p class="card-text font-20">We’re focused on being service-driven and responsive—anticipating your needs and proactively addressing issues. By championing your interests, we provide peace of mind—and real results.</p>
					</div>
				</div>
			</div>
  		</div>
	</div>
	</div>
</div>

<!-- <div class="image-bottom-content">
	<div class="bottom maxwidth text-center">
		<div class="content box-small">
		Let’s talk about how Granford—and our deep network of resources—can help problem-solve your supply chain challenges. 
		</div>
		<a class="primary-btn" href="/contact">REQUEST A QUOTE</a>
	</div>
</div> -->
<div class="container section mt-md-6 mb-5 request-quote">
  <div class="row align-items-center">
    <div class="col-12">
		<div class="block text-center">
			<div class="color-gray font-regular font-3 w-lg-75 m-auto">
			Let’s talk about how Granford—and our deep network of resources—can help problem-solve your supply chain challenges. 
			</div>
		</div>
    </div>
    <div class="col-12">
		<div class="block text-center mt-4">
			<a href="/contact" class="primary-btn">REQUEST A QUOTE</a>
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
