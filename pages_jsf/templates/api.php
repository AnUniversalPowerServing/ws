<?php 
$PROJECT_MODE='DEBUG';
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
</script>