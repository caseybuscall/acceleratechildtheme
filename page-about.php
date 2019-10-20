<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>

 	<div id="primary" class="site-content">
 		<div class="main-content services" role="main">
      <?php query_posts('post_type="services"'); ?>
      <?php while (have_posts() ) : the_post(); ?>
          <header class="services-header">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
          </header>
      <?php endwhile;  ?>

      <?php wp_reset_query();  ?>

 		</div>

 		<section class="services-contact">
 			<h3>Interested in working with us?</h3>
 			<a class="button" href="#">Contact Us</a>
 		</section>
 	</div>

 <div class="services">
 	<?php get_footer(); ?>
 </div>
