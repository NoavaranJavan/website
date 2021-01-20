<?php
// Email Submit

  $name = @trim(stripslashes($_POST['name'])); 
  $email = @trim(stripslashes($_POST['email']));
  $message = @trim(stripslashes($_POST['message'])); 

  $email_from = $email;
  $email_to = 'goudarz.jafari@gmail.com';

  $message = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

  $success = @mail($email_to, "[NoavaranJavan Ltd.] ".$name, $message);

  $noreply = @mail($email_from, "[NoavaranJavan Ltd.] Thank you to email us.", "We will be back to you soon!");
?>