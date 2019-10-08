<?php

/*
 * function that creates template tag function 'case_studies'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

add_action('wp_ajax_csfilter', 'case_studies_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_csfilter', 'case_studies_filter_function');

function case_studies_filter_function() {
	// if any filters are set 
  
    $filter = $_POST['filter'];
  
    // setup the parameters for the query
    $tax_query = "";
    /*
        if category is not empty, then filter must be active
        set var $tax_query to be used in out final WP query
        for the product post
    */
    
    if( $filter != "" ){
    $tax_query_filter = array(
    array(
        'taxonomy' => 'filter',
        'field' => 'term_id',
        'terms' => $filter
    )
    );
    }
    
    if( $filter !=""){
    $args = array(
        'post_type' => 'case_study',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query_filter
    );
      
    }else{
        
    // else, just query all posts as normal (no filtering)
    $args = array(
        'post_type' => 'case_study',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    }
  
  $query = new WP_Query($args);
  if( $query->have_posts() ): ?>
    <?php $i = 1; ?>
    <?php while($query->have_posts()): $query->the_post(); ?>
      <?php if ($query->current_post % 2 == 0): ?>
              <div class="right">
                <div class="text-l">
                  <h3><?php echo $i ?></h3>
                  <h1><?php the_title(); ?></h1>
                  <h4><?php  
                      $terms = get_the_terms( $post->ID, 'filter' );
                      if ( !empty( $terms ) ){
                          // get the first term
                          $term = array_shift( $terms );
                          echo $term->name;
                      }
                      ?></h4>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">Read more.</a>
                </div>
                <div class="image-r">
                 <?php the_post_thumbnail( array( 450,300) ); ?>
                </div>
              </div>
          <?php $i++; ?>
          <?php else: ?>
              <!--odd-->
              <div class="left">
                <div class="image-l">
                  <?php the_post_thumbnail( array( 450,300) ); ?>
                </div>
                <div class="text-r">
                  <h3><?php echo $i ?></h3>
                  <h1><?php the_title(); ?></h1>
                  <h4><?php  
                      $terms = get_the_terms( $post->ID, 'filter' );
                      if ( !empty( $terms ) ){
                          // get the first term
                          $term = array_shift( $terms );
                          echo $term->name;
                      }
                      ?></h4>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">Read more.</a>
                </div>
              </div>
      <?php $i++; ?>
      <?php endif ?>
    <?php endwhile ?>
    <?php wp_reset_postdata(); ?>
    <?php else :
      echo 'No posts found';
    ?>
  <?php endif ?>
  <?php die();
}

if ( ! function_exists( 'case_studies_other' ) ) {
  function case_studies_other() {
    
  $currentID = get_the_ID(); 
    
    
    
  $args = array(
    'post_type' => 'case_study',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'numberposts' => 3, //how many posts to query from DB
    'posts_per_page' => 3, // how many posts to display per page
    'post__not_in' => array($currentID)
  );
  
  $query = new WP_Query($args);
  if( $query->have_posts() ): ?>
    <?php while($query->have_posts()): $query->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <!--other-->
        <div class="case">
          <?php the_post_thumbnail( array( 450,300) ); ?>
          <h1><?php the_title(); ?></h1>
          <h4><?php  
          $terms = get_the_terms( $post->ID, 'filter' );
          if ( !empty( $terms ) ){
              // get the first term
              $term = array_shift( $terms );
              echo $term->name;
          }
          ?></h4>
          <?php the_excerpt(); ?>
        </div>
      </a>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}

?>