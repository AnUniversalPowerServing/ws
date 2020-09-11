const FORM_SELECT = "SelectForm";
const FORM_TEXTAREA_SINGLE = "singleTextArea";
const FORM_INPUT_SIMPLETXT = "simpleText";
const FORM_INPUT_AUTOCOMPTXT = "autoCompleteText";
const FORM_INPUT_DATETIME = "dateTime";
const FORM_INPUT_EMAIL = "email";
const FORM_INPUT_MOBILE = "mobile";
const FORM_INPUT_SQ = "sQ"; 
const FORM_VALIDATE_EMAIL = "validate_email";
const FORM_VALIDATE_MOBILE = "validate_mobile";

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
  var col = 12/ids.length;
  var content='<div class="form-group mtop15p">';
      content+='<label class="form-group-label">'+label;
      if(isRequired){
        content+='<span class="form-group-label-span">Required</span>';
      }
      content+='</label>';
      content+='<div class="row">';
  for(var idIndex=0;idIndex<ids.length;idIndex++){
    if(idIndex === 0 && idIndex === ids.length-1){ content+='<div class="col-xs-'+col+' pad15p">'; }
    else if(idIndex === 0){ content+='<div class="col-xs-'+col+' padLeft15p">';  }
    else if(idIndex === ids.length-1){ content+='<div class="col-xs-'+col+' padRight15p">'; }
    else { content+='<div class="col-xs-'+col+'">'; }
    content+='<select id="'+ids[idIndex]+'" class="form-control">'; 
    content+='<option value="">'+placeholders[idIndex]+'</option>';
     console.log("idIndex: "+idIndex);
     console.log("options: "+options[idIndex].length);
     for(let optIndex=0;optIndex<options[idIndex].length;optIndex++){
      let label = options[idIndex][optIndex].label;
      let value = options[idIndex][optIndex].value;
      if(value === defaultSelection[idIndex]){
        content+='<option value="'+value+'" selected>'+label+'</option>';
      } else {
        content+='<option value="'+value+'">'+label+'</option>';
      }
     }
      content+='</select>';   
      content+='</div>';
  }
  content+='</div>';
  content+='</div>';
  console.log(content);
  return content;
 }

}

class TextAreaSingleForm { 
 display(){ }
}

class InputSimpleTextForm {
 display(){ }
}

class InputAutoCompTextForm {
 display(){ }
}

class InputDateTimeForm {
 display(){ }
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
     var elements = data[page].elements;
     for(var index in elements){
      var element = elements[index];
      var field = element.field;
      if(field === FORM_SELECT) {
        var selectForm  = new SelectForm(element);
        formContent+=selectForm.display();
      }
     }
    }
    var content = this.buildPageContent(formContent);
    return content;
 }
}
var webFormBuilder;
var webForm = { name:"authRegister", 
                display:"badge",
                data:[{ title:"Page#1", 
                        elements:[
                                  { field:FORM_SELECT,
                                    id:'MultipleFormOpt1|MultipleFormOpt2|MultipleFormOpt3',
                                    label:'Select Form', 
                                    placeholder:'Select an Opt1|Select an Opt2|Select an Opt3',
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
                                             {label:'Option#4', value:'4'}]]
                                  },{ field:FORM_SELECT,
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
                                  { field: FORM_INPUT_SIMPLETXT, 
                                    label: "Name",
                                    id: "name1" },
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