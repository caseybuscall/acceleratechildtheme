<?php
/**
 * The template for displaying the 404 page!
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

      <div class="container404">
        <img src="https://media.giphy.com/media/2xPGQCgJ72jHEevgm6/giphy.gif" />
        <h1>Whoops!</h1>
        <p>Sorry, this page either no longer exists, never existed or has been moved.</p>
        <p>But don't freak out! Feel free to take a look around our <strong><a href="<?php echo site_url('/blog/') ?>">blog</a></strong> or some of our featured <strong><a href="<?php echo site_url('/case-studies/') ?>">work</a></strong>.</p>
      </div>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
