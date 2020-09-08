

class Trigger extends React.Component {
 constructor(props) {
  super(props);
  this.state = { alert: { view: false, msg:{} },
                 badge: { index:0,
                          info: this.props.form,
                          formValidation: { }, // Validates only to respective index=0
                        },
                 emailAddress:{ id:'', value:'', isValid: false, reset:false, sendOTPCode:false }, 
                 mobile:{ id:'', value:'', isValid: false, reset:false, sendOTPCode:false },
                 mobCode:{ id:'', value:'', isValid: false, reset:false }
               };
               this.ui_formValidate_build();  
 }

 ui_formValidate_build(){ // Add isValid and reset to the All the Fields in formValidation
  let formIndex = this.state.badge.index;
  let badge = this.state.badge;
  let formValidation = badge.formValidation;
  let formData = badge.info.form.data;
  let elements = formData[formIndex].elements;
    for(let elementIndex=0;elementIndex<elements.length;elementIndex++){
      let element = elements[elementIndex];
          element.value = '';
      let ids = element.id.split("|");
      if(ids.length>1){
        for(let i in ids){
          formValidation[ids[i]] = { isValid:false, reset: false }; 
        }  
      } else {
        formValidation[ids] = { isValid:false, reset: false }; }
      }
      console.log("callBack formValidation[rebuild]: "+JSON.stringify(formValidation));
  // this.setState({ badge }); 
 }

 showAlert(msg){
  let alert = this.state.alert;
      alert.view = true;
  if(msg.length>0){ alert.msg = msg; } 
  this.setState({ alert });
 }

 hideAlert(){
  let alert = this.state.alert;
      alert.view = false;
  this.setState({ alert });
 }

 resetAlert(){
  let alert = this.state.alert;
      alert.view = false;
      alert.msg = {};
  this.setState({ alert });
 }

 ui_viewBadgeMenu(){
  let badgeMenu = []; // Build Form
  let badgeContent = [];
  let info = this.state.badge.info;
  let formData = info.form.data;
  let size = formData.length;
  if(size>0){
    formData.map((arry, formIndex)=>{
        /** Building badgeMenu */

        badgeMenu.push((size > 1)?(<div align="center" className={'col-xs-'+(12/size)}>
                                     <span id={'menu'+formIndex} 
                                           className="badge"
                                           onClick={(event)=>this.sel_BadgeMenu(formIndex, size)}>
                                        {formIndex+1}
                                     </span>
                                   </div>):'');
        let elements = arry.elements; 
        let alertMsg = this.state.alert.msg;
        let alertMsgElem = Object.keys(alertMsg);
        /** Building badgeContent */
        badgeContent.push(
          (formIndex > 0)?
            <div id={'content'+formIndex} className="mtop15p hide-block">
              {this.state.alert.view &&  (
                <Alert alertType="danger" 
                       alertMsg={(alertMsgElem.length>0) ? 
                                  alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
              )}
              {this.ui_elements(elements)} 
              {this.ui_formExtension(elements, formIndex)}
            </div>:
            <div id={'content'+formIndex}>
              {this.state.alert.view &&  (
                <Alert alertType="danger" 
                       alertMsg={(alertMsgElem.length>0) ? 
                       alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
              )}
              {this.ui_elements(elements)}
              {this.ui_formExtension(elements, formIndex)}
            </div>);  
    });
  }
  return { menu: badgeMenu, content:badgeContent };
 }

 ui_formExtension(elements, formIndex){
  return(<div  className="container-fluid">
         <div className="col-md-4 col-sm-4 col-xs-4">
         {(formIndex>0) && (
          <button className="btn btn-success form-control" 
          onClick={()=>{ this.ui_formExtension_backFunc(formIndex);}}><b>Back</b></button>
         )}
         </div>
         <div className="col-md-4 col-sm-4 col-xs-4">
          <button className="btn btn-primary form-control" 
          onClick={()=>{
            this.ui_formExtension_submitFunc(elements, formIndex);
          }}><b>Next</b></button>
         </div>
         <div className="col-md-4 col-sm-4 col-xs-4">
          <button className="btn btn-danger form-control" 
              onClick={()=>{
                this.ui_reset(formIndex);
              }}><b>Reset</b></button>
         </div>
         </div>);
 }

ui_formExtension_backFunc(formIndex){
  formIndex =  formIndex-1;
  let badge = this.state.badge;
      badge.index = formIndex;
  let info = badge.info;
  let formData = info.form.data;
  let size = formData.length;
  console.log(JSON.stringify(badge));
  this.setState({ badge });
  this.sel_BadgeMenu(formIndex, size);
}

ui_formExtension_submitFunc(elements, formIndex){
  let badge = this.state.badge;
  let formValidation = badge.formValidation;
  let filteredData = elements.filter((element)=>{
      let ids = element.id.split("|");
      if(ids.length>1){
        let isRequireds = element.isRequired.split("|"); 
        let status = false;
        for(let i in ids){
          if(JSON.parse(isRequireds[i].toLowerCase()) === true && 
             formValidation[ids[i]].isValid === false){
            status = true;
            break;
          }
        }
        return status;
      } else {
        let result = element.isRequired && formValidation[ids].isValid === false;
          return result;
      }
  });
  console.log("formValidation [submit]: "+JSON.stringify(formValidation));
  console.log("filteredData [submit]: "+JSON.stringify(filteredData));
  if(filteredData.length === 0){
    let size = badge.info.form.data.length;
    formIndex = formIndex+1;
    this.sel_BadgeMenu(formIndex, size);
  } else {
    // Add a Alert for all Required Fields
    let missingFields = [];
    let alertMsg = this.state.alert.msg;
   // let alertMsg = 'Missing ';
    for(let alertData =0;alertData<filteredData.length;alertData++){
      let data = filteredData[alertData];
      let ids = data.id.split("|");
      let label = data.label;
      if(ids.length>1){
        let isRequireds = data.isRequired.split("|"); 
        for(let i in ids){
          let id = ids[i];
          if(JSON.parse(isRequireds[i].toLowerCase()) === true){
            missingFields.push(id);
            alertMsg[id] = { isValid:false, msg: label+' is missing.' };
          }
        }  
      } else {
        missingFields.push(ids);
        alertMsg[ids] = { isValid:false, msg: label+' is missing.' };
      }
    }
    console.log("missingFields [a]: "+missingFields);
    console.log("alertMsg [a]: "+alertMsg);
    this.showAlert(alertMsg);
    console.log("alertMsg [a]: "+JSON.stringify(this.state.alert));
    bootstrap_formField_trigger('error', missingFields);
  }
  console.log("formValidation: "+JSON.stringify(formValidation));
  console.log("filteredData: "+JSON.stringify(filteredData));
  
      
}

 sel_BadgeMenu(index, size){
  this.state.badge.index = index;
  console.log("badgeIndex: "+this.state.badge.index);
  for(let i=0;i<size;i++){
    if(i === index) {
        if($('#content'+i).hasClass('hide-block')){ $('#content'+i).removeClass('hide-block'); }
    } else {
        if(!$('#content'+i).hasClass('hide-block')){ $('#content'+i).addClass('hide-block'); }
    }
  }
 }

 ui_emailAddress(element){
    let formName = this.state.badge.info.form.name;
    let emailAddress_Id = element.id;
    this.state.emailAddress.id = emailAddress_Id;
    let isRequired = element.isRequired;
    let validateUrl = element.validateUrl;
    let showTextCapacity = element.showTextCapacity;
    let totalTextSize = element.totalTextSize;
    let purpose = element.purpose;
    let label = element.label;
    console.log("Base Trigger: ");
    console.log(JSON.stringify(this.state.badge.formValidation));
    let reset = this.state.badge.formValidation[emailAddress_Id].reset;
    console.log("emailAddress_Id: "+emailAddress_Id);
    console.log("showTextCapacity: "+showTextCapacity);
    return (<EmailAddress id={emailAddress_Id} 
                    label={label}
                    isRequired={isRequired}
                    purpose={purpose}
                    validateUrl={validateUrl} 
                    showTextCapacity={showTextCapacity}
                    totalTextSize={totalTextSize}
                    isFormValid={this.isValid_emailAddress}
                    reset={reset} />);
 }

 ui_mobile(element){
    let formName = this.state.badge.info.form.name;
    let mobile_Id = element.id.split("|")[0];
    let mobCode_Id = element.id.split("|")[1];
    this.state.mobCode.id = mobile_Id;
    this.state.mobile.id = mobCode_Id;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    let showTextCapacity = element.showTextCapacity;
    let totalTextSize = element.totalTextSize;
    let purpose = element.purpose;
    let label = element.label;
    let mobile_reset = this.state.badge.formValidation[mobile_Id].reset;
    let mobCode_reset = this.state.badge.formValidation[mobCode_Id].reset;
    return (<Mobile label={label}
                    mobCodeId={mobile_Id}
                    mobCodeDefault={{ value:'+91', 
                                      flag:'/img/country-flag/india.png', 
                                      country:'India' }}
                    mobileId={mobCode_Id} 
                    isRequired={isRequired}
                    validateUrl={validateUrl}
                    purpose={purpose}
                    showTextCapacity={showTextCapacity}
                    totalTextSize={totalTextSize}
                    isFormValid={this.isValid_mobile}
                    resetMobCode={mobCode_reset}
                    resetMobile={mobile_reset} />);
 }

 ui_elements(elements){
  
  let html = [];
  elements.map((element)=>{
      console.log(element);
    let field = element.field;
    let isRequired = element.isRequired;
    switch(field){
      case FORM_INPUT_NAME: { html.push(<div>Name {(isRequired) && '(Required)'}</div>);break; }
      case FORM_INPUT_EMAIL: { html.push(this.ui_emailAddress(element));break; }
      case FORM_INPUT_MOBILE: { html.push(this.ui_mobile(element));break; }
      case FORM_VALIDATE_EMAIL: { html.push(<div>Validate Email {(isRequired) && '(Required)'}</div>);break; }
      case FORM_VALIDATE_MOBILE: { html.push(<div>Validate Mobile {(isRequired) && '(Required)'}</div>);break; }
      case FORM_INPUT_SQ: { html.push(<div>SQ {(isRequired) && '(Required)'}</div>);break; }
    }
  });
  return html;
 }
 

 ui_reset(formIndex){
  let elements = this.state.badge.info.form.data[formIndex].elements;
  this.resetAlert();
  let field_Ids = [];
  elements.map((element)=>{
    let field = element.field;
    let isRequired = element.isRequired;
    if(isRequired){
      let formValidation = this.state.badge.formValidation;
      switch(field){
        case FORM_INPUT_NAME: { break; }
        case FORM_INPUT_EMAIL: { let id = element.id;
                                 formValidation[id].reset = true;
                                 break; 
                               }
        case FORM_INPUT_MOBILE: { let ids = element.id.split("|");
                                  formValidation[ids[0]].reset = true;
                                  formValidation[ids[1]].reset = true;
                                  break; 
                                }
        case FORM_VALIDATE_EMAIL: { break; }
        case FORM_VALIDATE_MOBILE: { break; }
        case FORM_INPUT_SQ: { break; }
      }
    }
  });
  bootstrap_formField_trigger('remove', field_Ids);
 }

 validateAndAlert(callBack){
  let id = callBack.id;
  let isValid =  callBack.isValid;
  let msg = callBack.msg;
  let value = callBack.value;

  let formIndex = this.state.badge.index;
  let badge = this.state.badge;
  let formValidation = badge.formValidation;
      formValidation[id].reset = false;
  let alertMsg = this.state.alert.msg;
  console.log("callBack: "+JSON.stringify(callBack));
  if(isValid){ 
    delete alertMsg[id]; 
    formValidation[id].isValid = true;
    let formData = badge.info.form.data;
    let elements = formData[formIndex].elements;
    for(let elementIndex=0;elementIndex<elements.length;elementIndex++){
      let element = elements[elementIndex];
      if(element.id === id){
        element.value = value;
      }
    }
  } else {
    if(msg.length>0){
      alertMsg[id]={ isValid:isValid, msg: msg };
    }
  }
  console.log("callBack formValidation: "+JSON.stringify(formValidation));
  this.setState({ badge });
  let alertMsgElem = Object.keys(alertMsg);
  if(alertMsgElem.length>0){ this.showAlert(alertMsg); }
  else { this.hideAlert(); }
  console.log("badge: "+JSON.stringify(badge));
}


isValid_emailAddress = (callBack) => { 
  this.validateAndAlert(callBack.emailAddress);
}

isValid_mobile = (callBack) => { 
  this.validateAndAlert(callBack.mobile);
  this.validateAndAlert(callBack.mobCode);
}

 render(){
  console.log("Base Trigger: ");
  console.log(JSON.stringify(this.state.badge.formValidation));
    let badge = this.ui_viewBadgeMenu();
    return (<div>
              <div className="container-fluid">{badge.menu}</div>
              <div>{badge.content}</div>
            </div>);
 }
 
}