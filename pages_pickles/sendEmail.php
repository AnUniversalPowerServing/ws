

<?php
  $to = "nellutlalnrao@gmail.com";
  $subject = "This is subject";
  $message = "<style>@font-face { font-family:thirdDegree;src:url('http://widesecond.com/fonts/third-degree.ttf'); }</style>";     
         $message = "<a href=\"\" style=\"font-family:thirdDegree;font-size:32px;letter-spacing:1px;color: #c70d08\"";
         $message .= ">Native Pickles.</a>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:mail@widesecond.com \r\n";
         $header .= "Cc:nlnrao228@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>