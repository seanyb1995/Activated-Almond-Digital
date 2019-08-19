<?php

/*
 * First require the wp-load.php
 * we need these in order to use wordpress
 * functions like update_post_meta
*/
require_once('../../../../wp-load.php');

// 1. Check if any POST data has been submitted
if (isset($_POST['submit'])) {

  // 2. Get submitted fields & create variables
  $name = $_POST['name'];
  $help = $_POST['help'];
  $budget = $_POST['budget'];
  $time = $_POST['time'];
  $email = $_POST['email'];
  $referer = $_POST['referer'];

  // 3. Redirect with error if mandatory fields are empty
  if( $name === "" || $help === "" || $budget === "" || $time === "" || $email === "" ){
    $msg = urlencode('Sorry, we need name, email and your message!');
    header("Location: $referer?msg=$msg");
    die();
  }

  // 4. Insert new row in database table
  global $wpdb;

  $wpdb->show_errors();
    $table_name = $wpdb->prefix . "contact_form";
    $insert =  $wpdb->insert(
                $table_name, //table
                array(
                  'name' => $name,
                  'help' => $help,
                  'budget' => $budget,
                  'time' => $time,
                  'email' => $email,
                ),
                array('%s', '%s', '%s', '%s', '%s') //data format
  );

  /* 5. Check if something went wrong with the insert query
   * and redirect back to staff post page ($referer) with message
   */
  if(!$insert){
    $msg = urlencode('Sorry, we were unable to submit your form.');
    header("Location: $referer?msg=$msg");
    die();
  }

  if($insert){
    $msg = 'message successfully sent!';
    header("Location: $referer?contactform-added=1&msg=$msg");
    exit;
  }

}

?>
