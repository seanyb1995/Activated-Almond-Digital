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
            <div class="wrap">
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
                <p>
                  <?php the_content(); ?>
                  <ul>
                    <li>
                      <div class="stat">
                        <span>1.</span>
                        <p>Improve their position within the competitive Australian retail market.</p>
                      </div>
                    </li> 
                    <li>
                      <div class="stat">
                        <span>2.</span>
                        <p>Build brand awareness and grow consumer loyalty online.</p>
                      </div>
                    </li>  
                    <li>
                      <div class="stat">
                        <span>3.</span>
                        <p>Increase the number of leads and enquiries from website visitors.</p>
                      </div>
                    </li>  
                  </ul>
                </p>
              </div>
              <!--banner image-->
              <div class="image">
                <span>
                  <?php the_post_thumbnail( array( 700,400) ); ?>
                </span>
              </div>              
            </div>
          </div>
          <!--objective-->
          <div class="objective">
            <div class="container">
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
                  <div class="wrap">
                    <h3>Objective</h3>
                    <p><?php echo get_field('objective'); ?></p>
                  </div>
              </div>
            </div>
          </div>
          <!--results-->
          <div class="results">
            <div class="wrap">  
              <h3>Results</h3>
              <p><?php echo get_field('results'); ?></p>
            </div>
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
        <div class="contact-image">
            <?php
              $post = 411;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>
        </div>
        <div class="get-in-touch">
          <div class="wrap">
            <h1>Talk to our experts <br>about your requirements</h1>
            <p>Contact us and know more about how our experts can help your business grow.</p>
            <p><a href="https://activated-almond-digital-seanbuchanan1995351517.codeanyapp.com/contact">Enquire now</a></p>
          </div>
        </div>
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
