<?php

/*
 * function that creates template tag function 'post_list'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){

	// if any filters are set
  
    $category = $_POST['category'];
  
    // setup the parameters for the query
    $tax_query = "";
    /*
        if category is not empty, then filter must be active
        set var $tax_query to be used in out final WP query
        for the product post
    */
    
    if( $category != "" ){
    $tax_query_category = array(
    array(
        'taxonomy' => 'category',
        'field' => 'term_id',
        'terms' => $category
    )
    );
    }
    
    if( $category !=""){
    $args = array(
        'post_type' => 'blog',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query_category
    );
      
    }else{
        
    // else, just qyery all posts as normal (no filtering)
    $args = array(
        'post_type' => 'blog',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    }

    $query = new WP_Query( $args );

    if( $query->have_posts() ): ?>
         <?php while($query->have_posts()): $query->the_post(); ?>
         <div class="post">
           <div class="image">
           <?php the_post_thumbnail( array(1000,600) ); ?>
           </div>
           <div class="text">
             <h1><a href="<?php the_permalink(); ?>"><mark><?php echo the_title(); ?></mark></a></h1>
             <div class="tag">
               <div class="thumbnail">
                 <img src="/wp-content/themes/activated-almond-digital/images/logo_colour.png" alt="activated-almond-logo">
               </div>
               <h3>Activated Almond Digital</h3>
               <h3><?php echo get_the_date(); ?></h3>
             </div>
              <?php
              $excerpt = get_the_excerpt();
              $excerpt = '<mark>'.$excerpt.'</mark>';
              echo apply_filters('the_excerpt', $excerpt);
              ?>
              <a href="<?php the_permalink(); ?>">Read more.</a>
           </div>
         </a>
         </div>
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?>
         <?php else :
          echo 'No posts found';
         ?>
         <?php endif; ?>
         <?php die();
  }

?>
