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
		src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/banner-top.png"
		class="attachment-full size-full hero-banner-img"
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
		<div>
			<?php echo do_shortcode( '[recent_posts num="10" cat="" order="asc"]' ); ?>
		</div>
	</div>
</div>
<div class="image-bottom-content">
	<img 
		src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/banner-section.png"
		class="attachment-full size-full"
		alt=""
		style="width:100%"
	>
	<div class="bottom maxwidth text-center">
		<h4
			class="primary-color primary-headline"
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
		<div class="content-slider">
			<div data-slidernav="2016" title="SOURCING" icon="icon-magnifier">
				<div class="inner">
					<div class="tab-pane fade show active" id="sourcing" role="tabpanel" aria-labelledby="sourcing-tab">
						<div class="ct f-align-center">
							<div class="l-ct">
								<div class="head" data-aos="fade-down" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									The Ideal Source
								</div>
								<div class="des" data-aos="fade-down" data-aos-delay="150" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
								We offer diversified, cost-effective sourcing solutions, based on trusted local relationships throughout Southeast Asia.
								</div>
								<a class="primary-outline-btn" href="javascript:;" data-aos="fade-down" data-aos-delay="300" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">Learn more</a>
							</div>
							<div class="r-ct bag-bg">
								<img
									src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/hp-banner-tabs-01.png"
									class="attachment-full size-full"
									style="width:100%"
								>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-slidernav="2016" title="DISTRIBUTION" icon="icon-delivery">
				<div class="inner">
					<div class="tab-pane fade show active" id="sourcing" role="tabpanel" aria-labelledby="sourcing-tab">
						<div class="ct f-align-center">
							<div class="l-ct">
								<div class="head" data-aos="fade-down" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									Speed and Smarts
								</div>
								<div class="des" data-aos="fade-down" data-aos-delay="150" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									Count on us for efficient factory-to-door services, supported by our US distribution centers.
								</div>
								<a class="primary-outline-btn" href="javascript:;" data-aos="fade-down" data-aos-delay="300" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">Learn more</a>
							</div>
							<div class="r-ct bag-bg">
								<img
									src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/hp-banner-tabs-01.png"
									class="attachment-full size-full"
									style="width:100%"
								>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-slidernav="2014" title="CONTRACT MANUFACTURING" icon="icon-building">
				<div class="inner">
					<div class="tab-pane fade show active" id="sourcing" role="tabpanel" aria-labelledby="sourcing-tab">
						<div class="ct f-align-center">
							<div class="l-ct">
								<div class="head" data-aos="fade-down" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									Your Specs, Our Expertise
								</div>
								<div class="des" data-aos="fade-down" data-aos-delay="150" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									Granford has a proven ability to cost-effectively manufacture products to exact specifications.
								</div>
								<a class="primary-outline-btn" href="javascript:;" data-aos="fade-down" data-aos-delay="300" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">Learn more</a>
							</div>
							<div class="r-ct bag-bg">
								<img
									src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/hp-banner-tabs-01.png"
									class="attachment-full size-full"
									style="width:100%"
								>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-slidernav="2014" title="PRIVATE LABELING" icon="icon-tag">
				<div class="inner">
					<div class="tab-pane fade show active" id="sourcing" role="tabpanel" aria-labelledby="sourcing-tab">
						<div class="ct f-align-center">
							<div class="l-ct">
								<div class="head" data-aos="fade-down" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									Precision Solutions
								</div>
								<div class="des" data-aos="fade-down" data-aos-delay="150" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">
									We deliver customized private labeling for products sourced in the MITI-V region and China.
								</div>
								<a class="primary-outline-btn" href="javascript:;" data-aos="fade-down" data-aos-delay="300" data-aos-anchor=".tabs-content" data-aos-anchor-placement="top-center">Learn more</a>
							</div>
							<div class="r-ct bag-bg">
								<img
									src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/hp-banner-tabs-01.png"
									class="attachment-full size-full"
									style="width:100%"
								>
							</div>
						</div>
					</div>
				</div>
			</div>
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
						src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/hp-banner-z.png"
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
		src="https://Granford.000webhostapp.com/wp-content/uploads/2022/01/home-banner-02.jpg"
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
