<?php
/*
 * function that creates template tag function 'case_studies'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/
if ( ! function_exists( 'services' ) ) {
  function services() {
    
  $args = array(
    'post_type' => 'services',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );
    
  $skill_set = new WP_Query($args);
  if( $skill_set->have_posts() ): ?>
    <?php while($skill_set->have_posts()): $skill_set->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="block"> 
          <div class="shape">
            <i class="<?php            
              $a = get_field_object('field_5da54866ba131'); 
              echo $a['value'];
            ?>"></i>
          </div>
          <div class="service-title">
            <h3><?php the_title(); ?></h3>
          </div>
          <div class="service-description">
            <?php the_content(); ?>
          </div>
        </div>
      </a>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}
?>