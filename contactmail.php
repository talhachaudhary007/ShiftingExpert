<?php
   $user = $_POST['useremail'];
   $username = $_POST['username'];
   $subject = $_POST['usersubject'];
   $body = $_POST['userbody'];
   $admin = 'shiftingexpert.ae@gmail.com'; // Email address for receiver
   
   //Recieving >> mail-to-Admin 

   $mybody = "<p>
   Subject: $subject<br>
   Hi Admin, <br> <br>
   Mr./Mrs. $username has sent you a query. Kindly check the details below.<br>
   Message : $body <br> Thanks! <br> <br>
   Sender Name: $username<br>
   Email : $user <br>
   </p>";

  // Confiramtion >> mail-to-user

  $confirm_msg = "<p>
  Subject: $subject <br>
  Hi $username, <br> <br>
  Thank you for reaching out to Shifting Experts. We have received your email, and our team is currently reviewing your message. We'll get back to you as soon as possible. We appreciate your patience. <br> Thanks! <br> <br>
  Admin: <a href='shiftingexpert.ae'>Shifting Experts</a> <br>
  E-mail : $admin <br>
  </p>";

   // Additional headers for HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers .= "From: ShiftingExpert <info@shiftingexpert.ae>\r\n";

   // mail query

   $mail_to_admin = mail($admin, $subject, $mybody, $headers);
  $mail_to_user = mail($user, $subject, $confirm_msg, $headers);

   if($mail_to_admin){
     echo '<div class="alert alert-success">Email has been sent</div>';
      
   } else {
      echo "<div class='alert alert-danger'>Your mail could not be sent.></div>";
   }



?>