<?php
   $user = $_POST['useremail'];
   $username = $_POST['username'];
   $subject = $_POST['usersubject'];
   $body = $_POST['userbody'];
   $admin = 'aljanatmart@gmail.com'; // Email address of the receiver
   
   //Recieving >> mail-to-Admin 

   $mybody = "<p>Hi Admin, <br> 
   Mr./Mrs. $username has sent a query. Kindly check the details below.<br>
   Sender Name: $username<br>
   Email : $user <br>
   Subject: $subject<br>
   Message : $body<br>
   </p>";

  // Confiramtion >> mail-to-user

  $confirm_msg = "<p>Hi $username, <br> 
  Thank you for reaching out to us. We have received your email, and our team is currently reviewing your message. We appreciate your patience.<br>
  Sender Name: <a href='shiftingexpert.ae'>Shifting Experts</a> <br>
  Email : $admin <br>
  Subject: $subject<br>
  </p>";

   // Additional headers for HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers .= "From: ShiftingExpert <aljanatmart@gmail.com>\r\n";

   // mail query

   $mail_sent = mail($admin, $subject, $mybody, $headers);
  $mailtouser = mail($user, $subject, $confirm_msg, $headers);

   if($mail_sent){
     echo '<div class="alert alert-success">Email has been sent</div>';
      
   } else {
      echo "<div class='alert alert-danger'>Your mail could not be sent.></div>";
   }



?>