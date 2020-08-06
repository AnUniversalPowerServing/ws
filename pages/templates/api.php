<?php 
$PROJECT_MODE='PROD';
$PROJECT_URL = 'http://localhost/ws';
if($PROJECT_MODE=='PROD'){ $PROJECT_URL = 'http://widesecond.com'; }
?>
<script type="text/javascript">
var PROJECT_URL = '<?php echo $PROJECT_URL; ?>';
var appMenu = { "ws-home":{ "label":"HOME", 
                                "url":"/home",
                                "value":"3",
                                "valueType":"label",
                                "menu":{"page#1":{"label":"PICKLE VARIETIES", 
                                                  "url":"pickles/home" },
                                        "page#2":{"label":"PICKLE VARIETIES", 
                                                  "url":"pickles/home" }
                                }
                               },
                "ws-tutorials-webTech":{ "label":"Web Technologies", 
                                         "url":"#" },
                "ws-tutorials-webBackEnd":{ "label":"Web Backend Development", 
                                           "url":"pickles/my-order-history" },
                "pickles-myCart":{ "label":"MY CART", 
                                   "url":"pickles/my-cart",
                                   "value":"0", "valueType":"label" },
                "pickles-contactUs":{ "label":"CONTACT US", 
                                      "url":"pickles/contact-us"  },
                "pickles-logout":{ "label":"LOG OUT", "url":"#" },
                "pickles-auth":{ "label":"SIGN IN | REGISTER", 
                                 "url":"pickles/auth" } };
</script>