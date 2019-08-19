<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Activated_Almond_Digital
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <!--heading-->
    <div class="heading">
      <?php
        post_content(76);
      ?>
    </div>
    <!--office, general and business-->
    <div class="office">
      <!--office-->
      <span>
        <?php
          post_content(78);
        ?>
      </span>
    </div>
    <div class="general">
      <!--general-->
      <span>
        <?php
          post_content(81);
        ?>
      </span>
    </div>
    <div class="business">
      <!--business-->
      <span>
        <?php
          post_content(83);
        ?>
      </span>
      <span>
        <div class="circle">
          <?php
						$post = 83;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
        </div>
      </span>
    </div>
    <div class="social">
      <ul>
        <li><a href="#">LinkedIn</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
      <p>&#169 2019 Activated Almond Digital. All Rights Reserved</p>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
