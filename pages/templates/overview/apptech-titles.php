<?php
$APPTECH_IONIC = 'ionic';
$APPTECH_IONIC_PROJSTR = 'ionic-project-structure';
$APPTECH_ANDROID = 'android';
$APPTECH_ANDROID_MANIFEST = 'android-manifest-file';
?>
<?php 
  if(isset($_GET["1"]) && isset($_GET["2"])){
   if($_GET["1"]==$APPTECH_IONIC && $_GET["2"]==$APPTECH_IONIC_PROJSTR){
     echo '<title>Widesecond.com | Ionic Project Structure</title>';
   } else if($_GET["1"]==$APPTECH_ANDROID && $_GET["2"]==$APPTECH_ANDROID_MANIFEST){
    echo '<title>Widesecond.com | Android Manifest File</title>';
  }
  }
?>