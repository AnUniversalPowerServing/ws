const FORM_SELECT = "SelectForm";
const FORM_TEXTAREA = "TextAreaForm";
const FORM_INPUT_SIMPLETXT = "simpleText";
const FORM_INPUT_GROUP = "inputGroup";
const FORM_INPUT_DATETIME = "dateTime";
const FORM_INPUT_EMAIL = "email";
const FORM_INPUT_MOBILE = "mobile";
const FORM_INPUT_SQ = "sQ"; 
const FORM_VALIDATE_EMAIL = "validate_email";
const FORM_VALIDATE_MOBILE = "validate_mobile";
var pagePosition = 0;
var autoCompleteFields = [];
var datePickerFields = [];

class HtmlCommons {
 wrap_div(id){
  return '<div id="'+id+'"></div>';
 }
 wrap_label(title, isRequired){
  var content='<label class="form-group-label">'+title;
  if(isRequired){ content+='<span class="form-group-label-span">Required</span>'; }
  content+='</label>';
  return content;
 }
 wrap_inlineElements(columnData){
  let content = '<div class="row">';
  let col = 12/columnData.length;
  if(col<4){ col=4; }
  console.log(columnData);
  for(let index in columnData){ 
    index = parseInt(index);
    console.log(index+" "+index%3);
    if(index === 0 && index === columnData.length-1) { content+='<div class="col-xs-'+col+' mtop10p padLeft15p padRight15p">'; }
    else if(index%3 === 0 || index === 0) { 
      content+='<div class="col-xs-'+col+' mtop10p padLeft15p padRight0">';  
    } else if((index+1)%3 === 0 || index === columnData.length-1) { 
      content+='<div class="col-xs-'+col+' mtop10p padRight15p padLeft0">'; 
    } else { 
      content+='<div class="col-xs-'+col+' mtop10p padRight5p padLeft5p">'; 
    }
    content+=columnData[index]; 
    content+= '</div>';
  }
  content+= '</div>';
  return content;
 }
 wrap_formGroup(htmlContent){
  return '<div class="form-group mtop15p">'+htmlContent+'</div>';
 }
 wrap_inputGroup(htmlContent){
  return '<div class="input-group">'+htmlContent+'</div>';
 }
 wrap_displaySize(currentSize, totalSize){
  return '<span class="input-group-addon">'+currentSize+' / '+totalSize+'</span>';
 }
 wrap_empty(id){
  document.getElementById(id).innerHTML='';
 }

 buildElement_alert(message){
  let content='<div class="alert alert-success alert-dismissible">';
      content+='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
      content+='<strong>Alert Message!</strong> '+message;
      content+='</div>';
  return content;
 }
 buildElement_textArea(data){
  let id = data.id;
  let rows = data.rows;
  let placeholder = data.placeholder;
  let totalSize = data.totalSize;
  let content='<textarea id="'+id+'" rows='+rows+' ';
      content+=' onKeyPress="javascript:return htmlCommons.displayElementSize_onKeyPress(event, this.id, '+totalSize+');" ';
      content+=' onKeyUp="javascript:htmlCommons.displayElementSize_onKeyUp(this.id, '+totalSize+');" ';
      content+='placeholder="'+placeholder+'" class="form-control"></textarea>';
  return content;
 }
 buildElement_selectOption(data){
  let id = data.id;
  let placeholder = data.placeholder;
  let options = data.options;
  let defaultSelection = data.defaultSelection;
  let content='<select id="'+id+'" class="form-control">'; 
      content+='<option value="">'+placeholder+'</option>';
   for(let optIndex=0;optIndex<options.length;optIndex++){
    let label = options[optIndex].label;
    let value = options[optIndex].value;
    if(value === defaultSelection){
      content+='<option value="'+value+'" selected>'+label+'</option>';
    } else {
      content+='<option value="'+value+'">'+label+'</option>';
    }
   }
  content+='</select>'; 
  return content;  
 }
 buildElement_inputText(data){
  let id = data.id;
  let placeholder = data.placeholder;
  let totalSize = data.totalSize;
  let autocomplete = data.autocomplete;
  if(autocomplete !== undefined && autocomplete.url !== undefined) { autoCompleteFields.push({ id:id, url:autocomplete.url, totalSize:totalSize }); }
  console.log("autoCompleteFields[autocomplete]: "+autocomplete);
  console.log("autoCompleteFields[url]: "+autocomplete.url);
  console.log("autoCompleteFields[build]: "+autoCompleteFields);
  let content='<input type="text" id="'+id+'" placeholder="'+placeholder+'" class="form-control" ';
	  content+=' onKeyPress="javascript:return htmlCommons.displayElementSize_onKeyPress(event, this.id, '+totalSize+');" ';
      content+=' onKeyUp="javascript:htmlCommons.displayElementSize_onKeyUp(this.id, '+totalSize+');" ';
	  content+='/>';  
  return content;  
 }
 buildElement_inputDate(data){
  let id = data.id;
  let minDate = data.minDate;
  let maxDate = data.maxDate;
  let content='<input type="date" id="'+id+'" class="form-control" ';
      content+='min="'+minDate+'" max="'+maxDate+'" />';
  return content;  
 }
 buildElement_inputTime_hr(id){
  let content = '<select id="'+id+'" class="form-control">';
  for(let index=0;index<=12;index++){ 
    index = (index<=9)?'0'+index:index;
    content+='<option value="'+index+'">'+index+'</option>';
  }
  content+='</select>';
  return content;
 }
 buildElement_inputTime_minsec(id){
  let content = '<select id="'+id+'" class="form-control">';
  for(let index=0;index<=60;index++){ 
    index = (index<=9)?'0'+index:index;
    content+='<option value="'+index+'">'+index+'</option>';
  }
  content+='</select>';
  return content;
 }

 autoComplete_element(id, url, totalSize){
  fetch(url).then(response => response.json()).then(data => {
    $('#'+id ).autocomplete({ source: data, select: function (event, ui) { 
      let currentSize = ui.item.value.length;
      document.getElementById(id).nextSibling.innerHTML = currentSize+' / '+totalSize;
     } 
    });
  }).catch(error => {
    // handle the error
  }); 
 }

 displayElementSize_onKeyPress(event, id, totalSize){
  let currentSize = document.getElementById(id).value.length+1;
  if(currentSize>totalSize){   
    event.preventDefault();
    return false;
  }
 }
 displayElementSize_onKeyUp(id, totalSize){ 
  let currentSize = document.getElementById(id).value.length;
  document.getElementById(id).nextSibling.innerHTML = currentSize+' / '+totalSize;
}

}

var htmlCommons = new HtmlCommons();

class SelectForm { 
 constructor(props){
  this.props = props; // Receiving field, size, id, label, placeholder, isRequired, 
                      // defaultSelection, options
 }

 display(){
  let ids = this.props.id.split("|");
  let label = this.props.label;
  let placeholders = this.props.placeholder.split("|");
  let isRequired = this.props.isRequired;
  let options = this.props.options;
  let defaultSelection = this.props.defaultSelection.split("|");
  let col = 12/ids.length;
  let content=htmlCommons.wrap_label(label, isRequired);
  var rowContents = [];
  for(var idIndex=0;idIndex<ids.length;idIndex++){
    var data = { id:ids[idIndex],
                 placeholder:placeholders[idIndex],
                 options:options[idIndex], 
                 defaultSelection:defaultSelection[idIndex]};
  rowContents.push(htmlCommons.buildElement_selectOption(data));
  }
  content+=htmlCommons.wrap_inlineElements(rowContents);
  content=htmlCommons.wrap_formGroup(content);
  console.log(content);
  return content;
 }

}

class TextAreaForm { 
 constructor(props){ this.props = props; }

 display(){ 
  let id = this.props.id;
  let totalSize = this.props.size;
  let label = this.props.label;
  let currentSize = 0;
  let displaySize = this.props.displaySize;
  let rows = this.props.rows;
  let placeholder = this.props.placeholder;
  let isRequired = this.props.isRequired;
  let content = htmlCommons.wrap_label(label, isRequired);
  let fieldContent = htmlCommons.buildElement_textArea({ id:id, rows:rows, placeholder:placeholder, totalSize:totalSize });
  if(displaySize!==undefined && displaySize){
    fieldContent+= htmlCommons.wrap_displaySize(currentSize, totalSize);
    fieldContent = htmlCommons.wrap_inputGroup(fieldContent);
  }
  content+=fieldContent;
  content = htmlCommons.wrap_formGroup(content); 
  return content;
 }
}

class InputSimpleTextForm {
 constructor(props){ this.props = props; }
 display(){ 
  let id = this.props.id;
  let totalSize = this.props.size;
  let label = this.props.label;
  let currentSize = 0;
  let displaySize = this.props.displaySize;
  let placeholder = this.props.placeholder;
  let isRequired = this.props.isRequired;
  let autocomplete = this.props.autocomplete;
  let content = htmlCommons.wrap_label(label, isRequired);
  let fieldContent = htmlCommons.buildElement_inputText({ id:id, placeholder:placeholder, totalSize:totalSize, autocomplete:autocomplete });
  if(displaySize!==undefined && displaySize){
    fieldContent+= htmlCommons.wrap_displaySize(currentSize, totalSize);
    fieldContent = htmlCommons.wrap_inputGroup(fieldContent);
  }
  content+=fieldContent;
  content = htmlCommons.wrap_formGroup(content); 
  return content;
 }
}

class InputDateForm {
 constructor(props){
  this.props = props;
 }
 display(){ 
  let id = this.props.id;
  let label = this.props.label;
  let isRequired = this.props.isRequired;
  let currentSize = 0;
  let displaySize = this.props.displaySize;
  let pick = this.props.pick;
  let content = htmlCommons.wrap_label(label, isRequired);
  let fieldContent='';
  if(pick.type === undefined){
	 let data = { id:id, minDate: pick.from, maxDate: pick.to };
	 fieldContent+=htmlCommons.buildElement_inputDate(data);
  } else {
     let durationTime = pick.durationTime.split("-");
     let durYear = parseInt(durationTime[0]);
     let durMonth = parseInt(durationTime[1]);
     let durDate = parseInt(durationTime[2]);
     let date = new Date();
     let todayYear = date.getFullYear();
     let todayMonth = date.getMonth()+1;
     let todayDate = date.getDate();
     if(pick.type === 'past'){ 
      let minYear = (todayYear-durYear);
      let minMonth = (todayMonth-durMonth);
          minMonth = (minMonth<=9?'0'+minMonth:minMonth);
      let minDate = (todayDate-durDate);
          minDate = (minDate<=9?'0'+minDate:minDate);
      todayMonth = (todayMonth<=9?'0'+todayMonth:todayMonth);
      todayDate = (todayDate<=9?'0'+todayDate:todayDate);
      let min = minYear+'-'+minMonth+'-'+minDate;
      let max = todayYear+'-'+todayMonth+'-'+todayDate;
      let data = { id:id, minDate: min, maxDate: max };
      fieldContent+=htmlCommons.buildElement_inputDate(data);
     } 
     else if(pick.type === 'future'){ 
      let minYear = (todayYear+durYear);
      let minMonth = (todayMonth+durMonth);
          minMonth = (minMonth<=9?'0'+minMonth:minMonth);
      let minDate = (todayDate+durDate);
          minDate = (minDate<=9?'0'+minDate:minDate);
      todayMonth = (todayMonth<=9?'0'+todayMonth:todayMonth);
      todayDate = (todayDate<=9?'0'+todayDate:todayDate);
      let min = todayYear+'-'+todayMonth+'-'+todayDate;
      let max = minYear+'-'+minMonth+'-'+minDate;
      let data = { id:id, minDate: min, maxDate: max };
      fieldContent+=htmlCommons.buildElement_inputDate(data);
     }
  }
  if(displaySize!==undefined && displaySize){
    fieldContent+= htmlCommons.wrap_displaySize(currentSize, totalSize);
    fieldContent = htmlCommons.wrap_inputGroup(fieldContent);
  }
  content+=fieldContent;
  content = htmlCommons.wrap_formGroup(content); 
  return content;
 }
}

class InputTimeForm {
  constructor(props){
   this.props = props;
  }
  display(){
    let content = htmlCommons.wrap_label(label, isRequired);
    buildElement_selectOption({id:id, placeholder:placeholder, options:options });
    return content;
  }
}

class InputEmailForm {
 display(){ }
}

class InputMobileForm {
 display(){ }
}

class InputSQForm {
 display(){ }
}

class ValidateEmailForm {
 display(){ }
}

class validate_mobileForm {
 display(){ }
}


class WebFormBuilder {
 constructor(props){
    this.props = props;
 }

 buildPageContent(formContent){
  var content='<div class="container-fluid">';
      content+='<div class="row">';
      content+='<div class="col-sm-4 pad10p">';
      content+=formContent;
      content+='</div>';
      content+='</div>';
      content+='</div>';
  return content;
 }
 display(){
    var data = this.props.data;
    var formContent = '';
    for(var page=0;page<data.length;page++){
     formContent = htmlCommons.wrap_div('formAlert-'+page);
     var elements = data[page].elements;
     for(var index in elements){
      var element = elements[index];
      var field = element.field;
      if(field === FORM_SELECT) {
			var selectForm  = new SelectForm(element);
			formContent+=selectForm.display();
      } else if(field === FORM_TEXTAREA){
			var textAreaForm  = new TextAreaForm(element);
			formContent+=textAreaForm.display();
      } else if(field === FORM_INPUT_SIMPLETXT){
			var inputTextForm  = new InputSimpleTextForm(element);
			formContent+=inputTextForm.display();
	  } else if(field === FORM_INPUT_DATETIME){
			var inputDateForm = new InputDateForm(element);
			formContent+=inputDateForm.display();
      }
     }
    }
    var content = this.buildPageContent(formContent);
    return content;
 }
 executeAfterContentLoad(){
  setTimeout(function(){
    console.log("autoCompleteFields [Trigger]: "+autoCompleteFields);
    for(let index=0;index<autoCompleteFields.length;index++){
      let id = autoCompleteFields[index].id;
      let url = autoCompleteFields[index].url;
      let totalSize = autoCompleteFields[index].totalSize;
      htmlCommons.autoComplete_element(id, url, totalSize);;
    }
  },1000);
 }
}
var webFormBuilder;
var webForm = { name:"authRegister", 
                display:"badge",
                data:[{ title:"Page#1", 
                        elements:[
                                  { field:FORM_SELECT,
                                    id:'MultipleFormOpt1|MultipleFormOpt2|MultipleFormOpt3|MultipleFormOpt5|MultipleFormOpt6|MultipleFormOpt7',
                                    label:'Select Form', 
                                    placeholder:'Select an Opt1|Select an Opt2|Select an Opt3|Select an Opt4|Select an Opt5|Select an Opt6',
                                    isRequired:true,
                                    defaultSelection:'3|2|4',
                                    options:[[{label:'Option#1', value:'1'},
                                              {label:'Option#2', value:'2'},
                                              {label:'Option#3', value:'3'},
                                              {label:'Option#4', value:'4'}],
                                             [{label:'Option#1', value:'1'},
                                             {label:'Option#2', value:'2'},
                                             {label:'Option#3', value:'3'},
                                             {label:'Option#4', value:'4'}],
                                             [{label:'Option#1', value:'1'},
                                             {label:'Option#2', value:'2'},
                                             {label:'Option#3', value:'3'},
                                             {label:'Option#4', value:'4'}],
                                             [{label:'Option#1', value:'1'},
                                             {label:'Option#2', value:'2'},
                                             {label:'Option#3', value:'3'},
                                             {label:'Option#4', value:'4'}],
                                             [{label:'Option#1', value:'1'},
                                             {label:'Option#2', value:'2'},
                                             {label:'Option#3', value:'3'},
                                             {label:'Option#4', value:'4'}],
                                             [{label:'Option#1', value:'1'},
                                             {label:'Option#2', value:'2'},
                                             {label:'Option#3', value:'3'},
                                             {label:'Option#4', value:'4'}]]
                                  },
                                  { field:FORM_SELECT,
                                    id:'SingleFormOpt1',
                                    label:'Select Form', 
                                    placeholder:'Select an Option',
                                    isRequired:true,
                                    defaultSelection:'3',
                                    options:[[{label:'Option#1', value:'1'},
                                            {label:'Option#2', value:'2'},
                                            {label:'Option#3', value:'3'},
                                            {label:'Option#4', value:'4'}
                                            ]]
                                  },
                                  {
                                    field:FORM_INPUT_TIME,
                                    id:'time1',
                                    type:'24H',
                                    label:'Time Form 1', 
                                    isRequired:true,
                                    display:{ from:'00:00', to:'13:00' }
                                  },
                                  {
                                    field:FORM_INPUT_DATETIME,
                                    id:'dateTime1',
                                    label:'date Form 1', 
                                    isRequired:true,
                                    pick:{ from:'2020-09-13', to:'2020-09-16' }
                                  },
                                  {
                                    field:FORM_INPUT_DATETIME,
                                    id:'dateTime2',
                                    label:'date Form 2', 
                                    isRequired:true,
                                    pick:{ type:'past', durationTime:'1-0-0' }
                                  },
                                  {
                                    field:FORM_INPUT_DATETIME,
                                    id:'dateTime3',
                                    label:'date Form 3', 
                                    isRequired:true,
                                    pick:{ type:'future', durationTime:'1-0-0' }
                                  },
                                  {
                                    field:FORM_TEXTAREA,
                                    id:'SingleFormTextArea1',
                                    label:'TextArea Field',
                                    size:30,
                                    rows:3,
                                    displaySize:true,
                                    placeholder:'Enter your Description',
                                    isRequired:true
                                  },
                                  { field: FORM_INPUT_SIMPLETXT, 
                                    label: "Name",
                                    id: "name1",
                                    size:30,
                                    displaySize:true,
                                    placeholder:'Enter your Name',
                                    isRequired:true,
                                    autocomplete:{ url:'http://localhost/ws/php/autocomplete.php' } // If it exists true
								                  },
                                  { field: FORM_INPUT_EMAIL, 
                                    label: "Enter Email Address",
                                    id: "email1",
                                    isRequired: true, 
                                    validateUrl: PROJECT_URL+"/php/test.php", 
                                    purpose: 'Register',
                                    showTextCapacity: true,
                                    totalTextSize: 15 },
                                 {  field: FORM_INPUT_EMAIL, 
                                    id: "email2",
                                    label: "Email Address",
                                    isRequired: true, 
                                    validateUrl: PROJECT_URL+"/php/test.php", 
                                    purpose: "Register" },
                                 { field: FORM_INPUT_MOBILE, 
                                   id:"mobCodeId|mobileId",
                                   label:"Enter Mobile Number",
                                   isRequired:"false|true", 
                                   validateUrl:PROJECT_URL+'/php/test.php', 
                                   purpose:'Register',
                                   showTextCapacity:true,
                                   totalTextSize:5
                                   }
                                 ]
                      }]
              };