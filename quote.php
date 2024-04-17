<?php
//  Index Quote form 

   $name = $_POST['name'];
   $user = $_POST['email'];
   $movefrom = $_POST['movefrom'];
   $date = $_POST['date'];
   $phone = $_POST['phone'];
   $moveto = $_POST['moveto'];
   $message = $_POST['message'];
   $admin = 'shiftingexpert.ae@gmail.com'; // Email address for receiver

   $quote_subject = "$name send a quote";



// user message >> mail-to-Admin 

   $user_msg = "<P>
   Subject: $quote_subject <br>
   Move From: $movefrom <br>
   Move To: $moveto <br>
   Moving Date: $date <br> 
   Hi Admin, <br><br>
   Mr/Mrs $name send you a quote. Kindly check the details below. <br>
   Message: I am planning to move from $movefrom to $moveto on $date. <br>
   $message <br> Thanks! <br><br>
   Sender Name: $name <br>
   Email: $user <br>
   Phone: $phone <br>
   </p>";


   // admin Confiramtion message >> mail-to-user

  $admin_msg = "<p>Hi $name, <br> 
  Thank you for reaching out to Shifting Experts - (The Top Movers and Packers in Dubai). We have received your email, and our team is currently reviewing your message. We'll get back to you as soon as possible. We appreciate your patience. <br> Thanks! <br><br>
  Admin: <a href='shiftingexpert.ae'>Shifting Experts</a> <br>
  Email : $admin <br>
  Contact: +971 55 413 9978 <br>
  </p>";

     // Additional headers for HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     $headers .= "From: ShiftingExpert <aljanatmart@gmail.com>\r\n";  

     // mail query

     $mail_to_admin = mail($admin, $quote_subject, $user_msg, $headers);
     $mail_to_user = mail($user, $quote_subject, $admin_msg, $headers);
   
      if($mail_to_admin){
        echo '<div class="alert alert-success">Email has been sent</div>';
         
      } else {
         echo "<div class='alert alert-danger'>Your mail could not be sent.</div>";
      }



?>