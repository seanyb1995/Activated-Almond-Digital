<?php

if ( ! function_exists( 'contactautomation' ) ) {
  function contactautomation() {

  ?>
  <div class="get-in-touch">
    <h1><?php echo get_option( 'contactform_message' ); ?></h1>
      <form action="<?php echo $contact_plugin_root_url; ?>/wp-content/plugins/contact-form/inc/contactform-add.php" method="post">
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter email here...">
        <input type ="hidden" name="referer" value="<?php echo get_permalink() ?>">
        <button id="submit" type ="submit" name="submit" value="submit">Send.</button>
      </form>
  </div>
  <?php
  }
}

if ( ! function_exists( 'contactform_box' ) ) {
  function contactform_box() {
  ?>
  <div class="lets-talk">
    <h1>Let's Talk.</h1>
    <form action="<?php echo $contact_plugin_root_url; ?>/wp-content/plugins/contact-form/inc/contactform-add.php" method="post">
      <div class="name">
        <p>Hello, my name is</p>
        <input type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Sean Buchanan">
        <p>.</p>
      </div>
      <div class="help">
        <p>I am looking for help with</p>
        <input type="text" id="help" name="help" value="<?php echo $help ?>" placeholder="facebook advertising, content marketing...">
        <p>.</p>
      </div>
      <div class="time">
        <p>My budget is</p>
        <input type="text" id="budget" name="budget" value="<?php echo $budget ?>" type="text" placeholder="one billion dollars">
        <p>and I need it done by</p>
        <input type="text" type="text" id="time" name="time" value="<?php echo $time ?>" placeholder="yesterday">
        <p>.</p>
      </div>
      <div class="email">
        <p>Please contact me at</p>
        <input type="text" type="text" id="email" name="email" value="<?php echo $email ?>" placeholder="sean@buchanan.com">
        <p>.</p>
        <p>Thank you!</p>
      </div>
      <br>
      <input type ="hidden" name="referer" value="<?php echo get_permalink() ?>">
      <button id="submit" type ="submit" name="submit" value="submit">Send.</button>
    </form>
    <div class="links">
      <p>Not sure what you need? We can help you figure it out!<br>
        Get in touch with us in the links below.</p>
    </div>
  </div>
  <?php
  }
}

?>
