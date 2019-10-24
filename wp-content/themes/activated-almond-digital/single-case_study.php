<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--single case studies-->
      <section class="single-case">
          <?php
          while ( have_posts() ) :
            the_post();
          ?>
          <!--single case banner-->        
          <div class="case-banner">
            <!--banner text-->
            <div class="text">
              <h1><?php the_title(); ?></h1>
              <h4><?php  
                  $terms = get_the_terms( $post->ID, 'filter' );
                  if ( !empty( $terms ) ){
                      // get the first term
                      $term = array_shift( $terms );
                      echo $term->name;
                  }
                  ?>
              </h4>
              <p><?php the_content(); ?></p>
            </div>
            <!--banner image-->
            <div class="image">
              <span>
                <?php the_post_thumbnail( array( 500,500) ); ?>
              </span>
            </div>
          </div>
          <!--objective-->
          <div class="objective">
            <div class="image">
              <span>
                <?php 

                $image = get_field('objective_image');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
              </span>
            </div>
            <div class="text">
                <h3>Objective</h3>
                <p><?php echo get_field('objective'); ?></p>
            </div>
          </div>
          <!--results-->
          <div class="results">
            <h3>Results</h3>
            <p><?php echo get_field('results'); ?></p>
            <span>
              <?php 

              $image = get_field('results_image');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </span>
        </div>
        <?php
        endwhile; // End of the loop.
        ?>
      </section>
      <section class="content">
        <?php
          contactautomation();
        ?>
      </section>
      <!--other case studies-->
      <section class="other-cases">
        <div class="sub-heading">
          <h1>More like this.</h1>
        </div>
        <div class="other">
          <?php case_studies_other(); ?>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
