

<?php
  $to = "nellutlalnrao@gmail.com";
  $subject = "This is subject";
  $message= "<img src=\"http://widesecond.com/pages_pickles/logo.jpg\"/>";
  $message .= "<div style=\"background-color:#027d72;color:#fff;\">";
  $message .= "<h3 style=\"padding:8px;\"><b><i>Thanks for Visiting our Website and choosing to Register an Account, <br/>";
  $message .= "we have received your request to validate your Email Address for Signup.</i></b></h3>";
  $message .= "</div>";
  $message .= "<h2><b>Your OTP Code : 123456</b></h2>";
 
  $message .= "<div align=\"left\" style=\"font-size:10px;\">To ensure delivery to your inbox, add ";
  $message .= "mail@widesecond.com to your address book.</div>";
  echo $message;   
   /*      $header = "From:mail@widesecond.com \r\n";
         $header .= "Cc:nlnrao228@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }*/
?>