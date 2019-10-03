<?php

/*
 * function that creates template tag function 'case_studies'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

if ( ! function_exists( 'case_studies' ) ) {
  function case_studies() {
    
  $args = array(
    'post_type' => 'case_study',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );
  
  $case_studies = new WP_Query($args);
  if( $case_studies->have_posts() ): ?>
    <?php while($case_studies->have_posts()): $case_studies->the_post(); ?>
      <?php if ($case_studies->current_post % 2 == 0): ?>
              <!--even-->
              <div class="right">
                <div class="text-l">
                  <?php the_content(); ?>
                  <a href="<?php the_permalink(); ?>">Read more.</a>
                </div>
                <div class="image-r">
                 <?php the_post_thumbnail( array( 450,300) ); ?>
                </div>
              </div>
          <?php else: ?>
              <!--odd-->
              <div class="left">
                <div class="image-l">
                  <?php the_post_thumbnail( array( 450,300) ); ?>
                </div>
                <div class="text-r">
                  <?php the_content(); ?>
                  <a href="<?php the_permalink(); ?>">Read more.</a>
                </div>
              </div>
      <?php endif ?>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}
?>