<?php 
$PROJECT_MODE='PROD';
$PROJECT_NAME='NativePickles.com';
$PROJECT_URL = 'http://localhost/ws';
$PROJECT_PAYLOGO = 'http://localhost/KalynVna/website/images/logo-square.png';
if($PROJECT_MODE=='PROD'){ 
 $PROJECT_URL = (isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on'?"https":"http")."://".$_SERVER['HTTP_HOST']; 
}
?>
<script type="text/javascript">
var PROJECT_NAME = '<?php echo $PROJECT_NAME; ?>';
var PROJECT_URL = '<?php echo $PROJECT_URL; ?>';
var PROJECT_PAYLOGO = '<?php echo $PROJECT_PAYLOGO; ?>';
var kitchenMenu = { 111:{  "name":"Lemon Pickle",
                    "img":"img/pickles/01-lemon-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 },
                                      { "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 },
                                      { "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 },
                                      { "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 },
                                      { "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 },
                                      { "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }
                                     ],
                    "discount_type":"variable", 
                    "discounts":{ 8:{"discount":10},
                                  10:{"discount":12} }
                 },
             112:{  "name":"Raw Mango Pickle",
                    "img":"img/pickles/02-raw-mango-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }],
                    "discount_type":"flat",
                    "discount":12
                 },
             113:{  "name":"Carrot Pickle",
                    "img":"img/pickles/03-carrot-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }],
                                      "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 },
                                      { "key":"Quantity", "value":"100 gms" }
                                     ],
                    "discount_type":"variable", 
                    "discounts":{ 8:{"discount":10},
                                  10:{"discount":12} }
                 },
             114:{  "name":"Onion Pickle",
                    "img":"img/pickles/04-onion-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             115:{  "name":"Tomato Pickle",
                    "img":"img/pickles/05-tomato-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             116:{  "name":"Indian Pickle",
                    "img":"img/pickles/06-indian-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             117:{  "name":"Cucumber Pickle",
                    "img":"img/pickles/07-cucumber-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             118:{  "name":"Garlic Pickle",
                    "img":"img/pickles/08-garlic-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             119:{  "name":"Green Chilli Pickle",
                    "img":"img/pickles/09-green-chilli-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             120:{  "name":"Radish Pickle",
                    "img":"img/pickles/10-radish-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             121:{  "name":"Bitter Gourd Pickle",
                    "img":"img/pickles/11-bitter-gourd-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             122:{  "name":"Red Chilli Sweet Potato Pickle",
                    "img":"img/pickles/12-red-chilli-sweet-potato-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             123:{  "name":"Beetroot Pickle",
                    "img":"img/pickles/13-beetroot-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             124:{  "name":"Capsicum Pickle",
                    "img":"img/pickles/14-capsicum-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             125:{  "name":"Amla Pickle",
                    "img":"img/pickles/15-amla-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             126:{  "name":"Cabbage Pickle",
                    "img":"img/pickles/16-cabbage-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             127:{  "name":"Okra Pickle",
                    "img":"img/pickles/17-okra-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             128:{  "name":"Cauliflower Pickle",
                    "img":"img/pickles/18-cauliflower-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             129:{  "name":"Meat Pickle",
                    "img":"img/pickles/19-meat-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 },
             130:{  "name":"Fish Pickle",
                    "img":"img/pickles/20-fish-pickle.png", 
                    "saleQuantity":"Bottle", 
                    "saleCurrency":"Indian Rupee",
                    "saleCurrencySymbol":"Rs",
                    "salePrice":40,
                    "specifications":[{ "key":"Quantity", "value":"100 gms" },
                                      { "key":"Pieces", "value":8 }]
                 } };
var appMenu = { "pickles-home":{"label":"PICKLE VARIETIES", 
                                "url":"pickles/home",
                                "value":"3",
                                "valueType":"label",
                                "menu":{"page#1":{"label":"PICKLE VARIETIES", 
                                                  "url":"pickles/home" },
                                        "page#2":{"label":"PICKLE VARIETIES", 
                                                  "url":"pickles/home" }
                                }
                               },
                "pickles-profile":{ "label":"MY PROFILE", 
                                    "url":"pickles/my-profile" },
                "pickles-myOrderHistory":{ "label":"MY ORDER HISTORY", 
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