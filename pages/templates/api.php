<?php 
$PROJECT_MODE='PROD';
$PROJECT_URL = 'http://localhost/ws';
if($PROJECT_MODE=='PROD'){ $PROJECT_URL = 'http://widesecond.com'; }
?>
<script type="text/javascript">
var PROJECT_URL = '<?php echo $PROJECT_URL; ?>';
</script>