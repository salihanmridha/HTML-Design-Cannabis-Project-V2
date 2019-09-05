<?php

if($_POST){
  $email = $_POST['email'];
  $to = "hello@cannabisprogrammatic.com";
  $subject = 'Subscription form:  ';

  $message = "<h3>A new user has sent a message</h3>
  <b>" . $email . "<br> <b>Subject: </b>" . $subj
  ;

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From:  ' . "My Website" . ' <' . "hello@cannabisprogrammatic.com" .'>' . " \r\n" .
            'Reply-To: '.  $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


  $confirm = mail($to,$subject,$message,$headers);
  if(!$confirm){
    echo "success";
    //echo "<script type='text/javascript'>
    //alert('Something went wrong, your message didn't send!')</script>";
  } else {
  	echo "failed";
    //echo "<script type='text/javascript'> alert('Your message Successfully sent!'); window.location.href = 'index.php'; </script>";
    //header("Location: confirm.php");
  }
  return;
}
