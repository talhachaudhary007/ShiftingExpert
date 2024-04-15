<?php
//  Index Quote form 

// if(isset($_POST['index_form'])){
   $name = $_POST['name'];
   $user = $_POST['email'];
   $movefrom = $_POST['movefrom'];
   $date = $_POST['date'];
   $phone = $_POST['phone'];
   $moveto = $_POST['moveto'];
   $message = $_POST['message'];
   $admin = 'aljanatmart@gmail.com'; // Email address of the receiver

   $quote_subject = "$name send a quote";

// user message 
   $user_msg = "<P>
   Hi Admin, <br>
   Mr/Mrs $name send you a quote. Kindly check the details below. <br>
   Move From: $movefrom <br>
   Move To: $moveto <br>
   Moving Date: $date <br> 
   I am planning to move from $movefrom to $moveto on $date. <br>
   $message <br> 
   Sender Name: $name <br>
   Email: $user <br>
   Phone: $phone <br>
   </p>";


   // admin message

  $admin_msg = "<p>Hi $name, <br> 
  Thank you for reaching out to us. We have received your email, and our team is currently reviewing your message. We appreciate your patience.<br>
  Sender Name: <a href='shiftingexpert.ae'>Shifting Experts</a> <br>
  Email : $admin <br>
  Contact: +92 3246761804 <br>
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
//    }



?>