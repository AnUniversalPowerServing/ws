<?php
$APPTECH_IONIC = 'ionic';
$APPTECH_IONIC_PROJSTR = 'ionic-project-structure';
?>
<?php 
  if(isset($_GET["1"]) && isset($_GET["2"])){
   if($_GET["1"]==$APPTECH_IONIC && $_GET["2"]==$APPTECH_IONIC_PROJSTR){
     echo '<title>Widesecond.com | Ionic Project Structure</title>';
   }
  }
?>