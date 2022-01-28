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


<div class="header-banner">
	<img 
		src="http://localhost/granford/wp-content/uploads/2022/01/banner-top.png"
		class="attachment-full size-full"
		alt=""
		style="width:100%"
	>
	<div class="center-content">
		<h4 class="head" data-aos="fade-down" data-aos-anchor=".site">Extend Your Reach.</h4>
		<div class="desc" data-aos="fade-right" data-aos-anchor=".site">As a trusted US partner, Granford can optimize your supply chain with established resources across the MITI-V region and China.</div>
		<!-- <div data-aos="fade-zoom-in" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"> -->
	</div>
	<div class="what-news" data-aos="fade-up">
		What's new at Granford
		<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'arrow_down' ); ?>
	</div>
</div>
<div class="maxwidth news-block">
	<div class="left-text">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>
	<div class="right-news-slider">
		slider should be comfirm
	</div>
</div>
<div class="image-bottom-content">
	<img 
		src="http://localhost/granford/wp-content/uploads/2022/01/banner-section.png"
		class="attachment-full size-full"
		alt=""
		style="width:100%"
	>
	<div class="bottom maxwidth text-center">
		<h4
			class="primary-color primary-headline"
			data-aos="fade-up"
			data-aos-offset="200"
			data-aos-delay="50"
			data-aos-duration="1000"
			data-aos-easing="ease-in-out"
			data-aos-mirror="true"
			data-aos-once="false"
			data-aos-anchor-placement="top-center"
		>
			Factory to Door and More
		</h4>
		<div class="content">
			Granford specializes in optimizing resources, </br>flexibly working with you to unlock new supply chain opportunities.
		</div>
	</div>
</div>

<div class="maxwidth tabs-content">
	<div class="tile" id="tile-1">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<div class="slider"></div>
			<li class="nav-item">
				<a class="nav-link active" id="sourcing-tab" data-toggle="tab" href="#sourcing" role="tab" aria-controls="sourcing" aria-selected="true"><?php echo twenty_twenty_one_get_icon_svg( 'ui', 'magnifier' ); ?><span class="value">SOURCING</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="distribution-tab" data-toggle="tab" href="#distribution" role="tab" aria-controls="distribution" aria-selected="false"><?php echo twenty_twenty_one_get_icon_svg( 'ui', 'delivery' ); ?><span class="value">DISTRIBUTION</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="manufacturing-tab" data-toggle="tab" href="#manufacturing" role="tab" aria-controls="contact" aria-selected="false"><?php echo twenty_twenty_one_get_icon_svg( 'ui', 'building' ); ?><span class="value">CONTRACT</br>MANUFACTURING</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="labeling-tab" data-toggle="tab" href="#labeling"role="tab" aria-controls="labeling" aria-selected="false"><?php echo twenty_twenty_one_get_icon_svg( 'ui', 'tag' ); ?><span class="value">PRIVATE</br>LABELING</span></a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade show active" id="sourcing" role="tabpanel" aria-labelledby="sourcing-tab">
				<div class="ct f-align-center">
					<div class="l-ct">
						<div class="head" data-aos="fade-down" data-aos-anchor=".nav-tabs" data-aos-anchor-placement="top-center">
							Speed and Smarts
						</div>
						<div class="des" data-aos="fade-down" data-aos-delay="150" data-aos-anchor=".nav-tabs" data-aos-anchor-placement="top-center">
							Count on us for efficient factory-to-door services, supported by our US distribution centers.
						</div>
						<a class="primary-outline-btn" href="javascript:;" data-aos="fade-down" data-aos-delay="300" data-aos-anchor=".nav-tabs" data-aos-anchor-placement="top-center">Learn more</a>
					</div>
					<div class="r-ct bag-bg">
						<img
							src="http://localhost/granford/wp-content/uploads/2022/01/hp-banner-tabs-01.png"
							class="attachment-full size-full"
							style="width:100%"
						>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="distribution" role="tabpanel" aria-labelledby="distribution-tab">distribution</div>
			<div class="tab-pane fade" id="manufacturing" role="tabpanel" aria-labelledby="manufacturing-tab">manufacturing</div>
			<div class="tab-pane fade" id="labeling" role="tabpanel" aria-labelledby="labeling-tab">labeling</div>
		</div>
	</div>
</div>
<div class="fullwidth block-z">
	<div class="container">
		<div class="block-z-style">
			<div class="z-left">
				<div class="z-content">
					<div class="head">Medical Distribution</div>
					<div class="desc">One of our areas of expertise is Medical Distribution, where we apply our core competencies, expand our scope, and provide value to clients.</div>
					<img
						src="http://localhost/granford/wp-content/uploads/2022/01/hp-banner-z.png"
						class="attachment-full size-full"
						alt=""
						style="width:100%"
					>
				</div>
			</div>
			<div class="z-right">
				<div class="z-content">
					<div class="head">Providing Certainty in Uncertain Times</div>
					<div class="desc">Since early 2020, Granford has helped Fortune 1000 clients navigate the turbulent market conditions brought on by the coronavirus pandemic. Our services in alternative product development, compliance, warehousing and distribution, and other areas are helping clients to maintain operations and stay competitive.</div>
					<a class="primary-outline-btn" href="#">Learn more</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fullwidth">
	<div class="container">
		<div class="block-two-coloumn">
			<div class="left">
				<div class="head">Flexible Solutions to Supply Chain Challenges</div>
			</div>
			<div class="right">
				<div class="desc">Granford is a US company that deploys a vast network of proven supply-chain resources in the MITI-V region and China, along with our own US distribution centers. Driven by our clients’ needs, we combine flexibility, expertise, and a strong service culture to help them achieve new levels of growth and efficiency in the North American market.</div>
				<a class="primary-outline-btn" href="javascript:;">READ OUR STORY</a>
			</div>
		</div>
	</div>
</div>

<div class="image-bottom-content">
	<img 
		src="http://localhost/granford/wp-content/uploads/2022/01/home-banner-02-1.jpg"
		class="attachment-full size-full"
		style="width:100%"
	>
	<div class="bottom maxwidth text-center">
		<div class="content box-small">
		Count on Granford’s vast network of trusted, local resources throughout Southeast Asia, together with a collaborative, flexible partnering style, to help you optimize and diversify your supply chain. 
		</div>
		<a class="primary-btn" href="javascript:;">REQUEST A QUOTE</a>
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
