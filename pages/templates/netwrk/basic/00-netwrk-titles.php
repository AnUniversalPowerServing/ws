<?php
$NTWRK_BASIC = 'basic';
$NTWRK_BASIC_DNS_IPADDR_URL = 'dns-ipAddress-url';

if(isset($_GET["1"]) && isset($_GET["2"])){
   /**
    * Angular Tutorials
    */
   if($_GET["1"]==$NTWRK_BASIC && $_GET["2"]==$NTWRK_BASIC_DNS_IPADDR_URL){
      echo '<title>Widesecond.com | DNS, IP Address, URL</title>';
   }
}