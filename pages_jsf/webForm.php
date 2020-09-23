<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPSC Preparation Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/css/bootstrap-advanced.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/jquery-ui/css/jquery-ui.css">
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/captcha/js/jquery-captcha-lgh.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery-ui/js/jquery-ui.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/js/bootstrap-advanced.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
<script type="text/javascript">
function build_fieldIndexes(){
 var row = document.getElementById("row").value;
	 row = parseInt(row);
 var colm = document.getElementById("colm").value;
	 colm = parseInt(colm);
 var content='<div class="container-fluid">';
     content+='<div class="row">';
 for(var i =0;i<row;i++){
  for(var j=0;j<colm;j++){
    content+='<div class="col-sm-4">';
    content+='<div class="list-group">';
	  content+='<div class="list-group-item">';
	  content+='<div class="container-fluid">';
    content+='<div class="row">';
	  content+='<div class="col-sm-2"><h3>'+i+''+j+'</h3></div>';
	  content+='<div class="col-sm-4"></div>';
	  content+='<div align="right" class="col-sm-6">';
	  content+='<div class="form-group">';
	  content+='<label>No. of Elements</label>';
	  content+='<select id="noOfElementsInRow" class="form-control" onchange="javascript:build_fieldElements(this.id,'+i+','+j+');">';
	  content+='<option value="">Select</option>';
	  content+='<option value="1">1</option>';
	  content+='<option value="2">2</option>';
	  content+='<option value="3">3</option>';
	  content+='<option value="4">4</option>';
	  content+='</select>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	//
	content+='</div>';
	content+='<div id="elements-'+i+''+j+'"></div>';
	content+='</div>';
	content+='</div>';
  } 
 }
 content+='</div>';
 content+='</div>';
 document.getElementById("gen").innerHTML=content;
 // 
}
function build_fieldElements(id,i,j){
 var noOfElementsInRow = document.getElementById(id).value;
 var content='';
 for(var index=0;index<noOfElementsInRow;index++){
  content+='<div class="list-group-item" style="background-color:#ccc;"><b>Element#'+(index+1)+'</b></div>';
  content+='<div class="list-group-item">';
  
  content+='<div class="container-fluid">';
  content+='<div class="row">';
  content+='<div class="col-sm-12">';
	
  content+='<div class="form-group">';
  content+='<label>Label</label>';
  content+='<input id="element-'+i+''+j+'-label" type="text" class="form-control" placeholder="Enter Label" />';
  content+='</div>';
  
  content+='</div>';
  content+='</div>';
  
  content+='<div class="row">';
  content+='<div class="col-sm-6">';
  
  content+='<div class="form-group mtop5p">';
  content+='<br/><label class="checkbox-inline">';
  content+='<input  id="element-'+i+''+j+'-isInputGroup" type="checkbox" ';
  content+='onclick="enable_elementInputGroup(this.id,'+i+','+j+');" /> Is Input-Group?';
  content+='</label>';
  content+='</div>';
  
  content+='</div>';
  
  content+='<div class="col-sm-6">';
  
  content+='<div class="form-group hide-block">';
  content+='<label>No. of Input-Groups</label>';
  content+='<select id="inputGrpElementsNum-'+i+''+j+'" class="form-control" onchange="javascript:build_fieldInputGroupElements(this.id,'+i+','+j+');">';
  content+='<option value="">Select</option>';
  content+='<option value="1">1</option>';
  content+='<option value="2">2</option>';
  content+='<option value="3">3</option>';
  content+='<option value="4">4</option>';
  content+='</select>';
  content+='</div>';
  
  content+='</div>';
  
  content+='</div>';
  
  content+='<div class="row">';
  content+='<div class="col-sm-12">';
  
  
  content+='<div class="form-group">';
  content+='<label>Id</label>';
  content+='<input id="element-'+i+''+j+'-id" type="text" class="form-control" placeholder="Enter Element Id" />';
  content+='</div>';
  
  content+='<div class="form-group">';
 content+='<label>Field Type</label>';
 content+='<select id="element-'+i+''+j+'-field" class="form-control" onchange="javascript:onFieldUpdate(this.id,\'element-'+i+''+j+'-fieldParams\');">';
 content+='<option value="">Select Field</option>';
 content+='<option value="FORM_SELECT">FORM_SELECT</option>';
 content+='<option value="FORM_INPUT_TIME">FORM_INPUT_TIME</option>';
 content+='<option value="FORM_INPUT_DATETIME">FORM_INPUT_DATETIME</option>';
 content+='<option value="FORM_TEXTAREA">FORM_TEXTAREA</option>';
 content+='<option value="FORM_INPUT_SIMPLETXT">FORM_INPUT_SIMPLETXT</option>';
 content+='<option value="FORM_INPUT_EMAIL">FORM_INPUT_EMAIL</option>';
 content+='<option value="FORM_INPUT_MOBILE">FORM_INPUT_MOBILE</option>';
 content+='<option value="FORM_INPUT_SQ">FORM_INPUT_SQ</option>';
 content+='<option value="FORM_VALIDATE_EMAIL">FORM_VALIDATE_EMAIL</option>';
 content+='<option value="FORM_VALIDATE_MOBILE">FORM_VALIDATE_MOBILE</option>';
 content+='</select>';
 content+='</div>';

 content+='<div id="element-'+i+''+j+'-fieldParams"></div>';
  
  content+='<div class="form-group">';
  content+='<label>Placeholder</label>';
  content+='<input id="element-'+i+''+j+'-placeholder" type="text" class="form-control" placeholder="Enter Placeholder" />';
  content+='</div>';
  
  content+='</div>';
  content+='</div>';
  
  
  
  
  content+='<div class="row">';
  content+='<div class="col-sm-8">';
  
  content+='<div class="form-group">';
  content+='<label>isRequired</label>';
  content+='<select id="element-'+i+''+j+'-isRequired" class="form-control">';
  content+='<option value="Y">Yes</option>';
  content+='<option value="N">No</option>';
  content+='</select>';
  content+='</div>';
  
  content+='</div>';
  content+='</div>';
  
  content+='</div>';
  
  content+='</div>';
  content+='<div id="elements-'+i+''+j+'-inputGroups"></div>';
 }
 document.getElementById("elements-"+i+""+j).innerHTML=content;
}

function enable_elementInputGroup(id,i,j){
 var isInputGrpChecked = document.getElementById(id).checked;
 console.log("isInputGrpChecked: "+isInputGrpChecked);
 var element_Id = $("#element-"+i+""+j+"-id").closest('div.form-group');
 var element_field = $("#element-"+i+""+j+"-field").closest('div.form-group');
 var element_placeholder = $("#element-"+i+""+j+"-placeholder").closest('div.form-group');
 var element_isRequired = $("#element-"+i+""+j+"-isRequired").closest('div.form-group');
 var inputGrpElementsNum = $("#inputGrpElementsNum-"+i+""+j).closest('div.form-group');
 if(isInputGrpChecked){ // Hide Element's id, placeholder,isRequired
   if(!element_Id.hasClass('hide-block')){ element_Id.addClass('hide-block'); }
   if(!element_field.hasClass('hide-block')){ element_field.addClass('hide-block'); }
   if(!element_placeholder.hasClass('hide-block')){ element_placeholder.addClass('hide-block'); }
   if(!element_isRequired.hasClass('hide-block')){ element_isRequired.addClass('hide-block'); }
   // Display InputGroup's
   if(inputGrpElementsNum.hasClass('hide-block')){ inputGrpElementsNum.removeClass('hide-block'); } 
 } else {
   if(element_Id.hasClass('hide-block')){ element_Id.removeClass('hide-block'); }
   if(element_field.hasClass('hide-block')){ element_field.removeClass('hide-block'); }
   if(element_placeholder.hasClass('hide-block')){ element_placeholder.removeClass('hide-block'); }
   if(element_isRequired.hasClass('hide-block')){ element_isRequired.removeClass('hide-block'); }
   // Display InputGroup's
   if(!inputGrpElementsNum.hasClass('hide-block')){ inputGrpElementsNum.addClass('hide-block'); }
   
 }
}

function build_fieldInputGroupElements(id,i,j){
var content='';
var inputGrpElementsNum = document.getElementById(id).value;
for(var index=0;index<inputGrpElementsNum;index++){
 content+='<div class="list-group-item" style="background-color:#ccc;"><b>InputGroupElement#'+(index+1)+'</b></div>';
 content+='<div class="list-group-item"';
 content+='<div class="container-fluid">';
 content+='<div class="row">';
 content+='<div class="col-xs-12">';
 content+='<div class="form-group">';
 content+='<label>Field Type</label>';
 content+='<select id="elements-'+i+''+j+'-inputGroups-'+index+'" class="form-control" onchange="javascript:onFieldUpdate(this.id,\'elements-'+i+''+j+'-inputGroups-'+index+'-params\');">';
 content+='<option value="">Select Field</option>';
 content+='<option value="FORM_SELECT">FORM_SELECT</option>';
 content+='<option value="FORM_INPUT_TIME">FORM_INPUT_TIME</option>';
 content+='<option value="FORM_INPUT_DATETIME">FORM_INPUT_DATETIME</option>';
 content+='<option value="FORM_TEXTAREA">FORM_TEXTAREA</option>';
 content+='<option value="FORM_INPUT_SIMPLETXT">FORM_INPUT_SIMPLETXT</option>';
 content+='<option value="FORM_INPUT_EMAIL">FORM_INPUT_EMAIL</option>';
 content+='<option value="FORM_INPUT_MOBILE">FORM_INPUT_MOBILE</option>';
 content+='<option value="FORM_INPUT_SQ">FORM_INPUT_SQ</option>';
 content+='<option value="FORM_VALIDATE_EMAIL">FORM_VALIDATE_EMAIL</option>';
 content+='<option value="FORM_VALIDATE_MOBILE">FORM_VALIDATE_MOBILE</option>';
 content+='</select>';
 content+='</div>';
 content+='</div>';
 content+='</div>';
 content+='<div id="elements-'+i+''+j+'-inputGroups-'+index+'-params"></div>'
 content+='</div>';
 content+='</div>';
}
document.getElementById("elements-"+i+""+j+"-inputGroups").innerHTML=content;
}
function onFieldUpdate(id1, id2){
 var fieldId = document.getElementById(id1).value;
 var content='';
 if(fieldId === 'FORM_SELECT'){
  content+='<div class="form-group">';
  content+='<label>Options</label>';
  content+='<textarea id="'+id1+'-'+'options" class="form-control" placeholder="Enter Options" rows=6></textarea>';
  content+='</div>';
  
  content+='<div class="form-group">';
  content+='<label>Default Selection</label>';
  content+='<input id="'+id1+'-'+'defaultSelection" class="form-control" placeholder="Enter Default Selection" />';
  content+='</div>';
 }
 document.getElementById(id2).innerHTML=content;
}
</script>
<style>
.mtop15p { margin-top:15px; }
.mtop5p { margin-top:5px; }
</style>
</head>
<body>
  
<div class="container-fluid mtop15p">
 <div class="row">
  <div class="col-sm-3">
	<div class="form-group">
	  <label>Rows</label>
	  <input id="row" type="number" class="form-control" placeholder="Enter Rows" />
	</div><!--/.form-group -->
  </div><!--/.col-ms-3 -->
  <div class="col-sm-3">
	<div class="form-group">
	  <label>Columns</label>
	  <select id="colm" class="form-control">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	  </select>
	</div><!--/.form-group -->
   </div><!--/.col-sm-3 -->
   <div class="col-sm-3">
     <br/><button class="btn btn-default mtop5p form-control" onclick="javascript:build_fieldIndexes();"><b>Submit</b></button>
   </div><!--/.col-sm-3 -->
 </div><!--/.row -->
 <div><hr/></div>
 </div>
 <div id="gen"></div>
 <div class="container-fluid mtop15p">
 
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
     <!-- -->
	 <div class="form-group">
		<button class="btn btn-default form-control"><b>Generate JSON</b></button>
	  </div>
	 <!-- -->
    </div>
    <div  class="col-sm-4">
      <!-- -->
	  
	  <!-- -->
    </div>
  </div>
</div>

</body>
</html>


