<?php 
   header('Content-type: text/html');
   include('lib/simple_html_dom.php');
 
   // get DOM from URL or file
   $html = file_get_html('https://www.google.co.in/search?q=learn%20react&start=10');
   // echo $html;

   // find all link
   echo '<div style="width:30%;height:auto;float:left;">';
   foreach($html->find('h3') as $e){  echo $e->innertext . '<br>'; }
   echo '</div>';
   echo '<div style="width:30%;height:auto;float:left;">';
   foreach($html->find('div.BNeawe') as $e){ echo $e->innertext . '<br>'; }  
   echo '</div>';

   echo '<div style="width:30%;height:auto;float:left;">';
   foreach($html->find('a>div') as $e){  echo $e->innertext . '<br>'; }
   echo '</div>';
   
?>