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

<div class="wide-max-width news">
	<div class="fullwidth title-section mb-5">
		<div class="container-lg p-lg-0">
			<div class="row">
				<div class="col-12">
					<div class="tag font-30 fw-bold text-uppercase color-secondary p-0" data-aos="fade-left">NEWS</div>
					<div class="title font-3 font-size-xl p-0" data-aos="fade-left" data-aos-delay="200">Here’s The Latest At Granford.</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wide-max-width">
	<div class="fullwidth news-list pb-lg-5">
		<div class="container-lg p-lg-0">
			[recent_posts num="20" cat="" order=""]
		</div>
	</div>
</div>

<div class="wide-max-width">
	<div class="fullwidth contact-body mt-4 mb-3 mt-lg-5 mb-lg-5">
		<div class="container-lg p-lg-0">
			<div class="row">
				<div class="left-side col-12 col-md-6 mt-3 mt-md-0">
					<div class="card border-0">
						<div class="introduce font-3 font-head primary-color">
							To learn more about Granford, please fill out this form.
						</div>
					</div>
				</div>
				<div class="right-side col-12 col-md-6 mt-4 mt-md-0">
					<div class="card border-0 px-md-5">
						[contact-form-7 id="303"]
					</div>
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
