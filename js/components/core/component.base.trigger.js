

class Trigger extends React.Component {
 constructor(props) {
  super(props);
  this.state = { alert: { view: false, msg:{} },
                 badge: { index:0,
                          info: this.props.form,
                        },
                 emailAddress:{ id:'', value:'', isValid: false, reset:false, sendOTPCode:false }, 
                 mobile:{ id:'', value:'', isValid: false, reset:false, sendOTPCode:false },
                 mobCode:{ id:'', value:'', isValid: false, reset:false, },
               };
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
  console.log(info);
  let formData = info.form.data;
  let size = formData.length;
  if(size>0){
    formData.map((arry, formIndex)=>{
        badgeMenu.push((size > 1)?(<div align="center" className="col-xs-3">
                                     <span id={'menu'+formIndex} 
                                           className="badge"
                                           onClick={(event)=>this.sel_BadgeMenu(formIndex, size)}>
                                        {formIndex+1}
                                     </span>
                                   </div>):'');
        let elements = arry.elements; 
        let alertMsg = this.state.alert.msg;
        let alertMsgElem = Object.keys(alertMsg);
        badgeContent.push(
          (formIndex > 0)?
            <div id={'content'+formIndex} className="mtop15p hide-block">
              {this.state.alert.view &&  (
                <Alert alertType="danger" 
                       alertMsg={(alertMsgElem.length>0) ? 
                                  alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
              )}
              {this.ui_elements(elements)} 
              {this.ui_formExtension(formIndex)}
            </div>:
            <div id={'content'+formIndex}>
              {this.state.alert.view &&  (
                <Alert alertType="danger" 
                       alertMsg={(alertMsgElem.length>0) ? 
                       alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
              )}
              {this.ui_elements(elements)}
              {this.ui_formExtension(formIndex)}
            </div>
        );  
    });


  }
  return { menu: badgeMenu, content:badgeContent };
 }

 ui_formExtension(formIndex){
  return(<div className="container-fluid">
         <div className="col-md-4 col-sm-4 col-xs-4">
          <button className="btn btn-success form-control"><b>Back</b></button>
         </div>
         <div className="col-md-4 col-sm-4 col-xs-4">
          <button className="btn btn-primary form-control" 
          onClick={()=>{
            this.ui_formSubmit(formIndex);
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
    let emailAddress_Id = formName+'_emailAddress';
    this.state.emailAddress.id = emailAddress_Id;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    return (<EmailAddress id={emailAddress_Id} 
                    isRequired={isRequired}
                    validateUrl={validateUrl} 
                    isFormValid={this.isValid_emailAddress}
                    reset={this.state.emailAddress.reset} />);
 }

 ui_mobile(element){
    let formName = this.state.badge.info.form.name;
    let mobile_Id = formName+'_mobile';
    let mobCode = formName+'_mobCode';
    this.state.mobCode.id = mobile_Id;
    this.state.mobile.id = mobCode;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    return (<Mobile mobCodeId={mobile_Id}
                    mobCodeDefault={{ value:'+91', 
                                      flag:'/img/country-flag/india.png', 
                                      country:'India' }}
                    mobileId={mobCode} 
                    isRequired={isRequired}
                    validateUrl={validateUrl}
                    isFormValid={this.isValid_mobile}
                    resetMobCode={this.state.mobCode.reset}
                    resetMobile={this.state.mobile.reset} />);
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
  console.log();
  return html;
 }
 

 ui_reset(formIndex){
  let elements = this.state.badge.info.form.data[formIndex].elements;
  this.resetAlert();
  elements.map((element)=>{
    let field = element.field;
    let isRequired = element.isRequired;
    if(isRequired){
      switch(field){
        case FORM_INPUT_NAME: { break; }
        case FORM_INPUT_EMAIL: { this.state.emailAddress.reset = true;
                                 break; 
                               }
        case FORM_INPUT_MOBILE: { this.state.mobile.reset = true;
                                  this.state.mobCode.reset = true;
                                  break; 
                                }
        case FORM_VALIDATE_EMAIL: { break; }
        case FORM_VALIDATE_MOBILE: { break; }
        case FORM_INPUT_SQ: { break; }
      }
    }
  });
 }

 ui_formSubmit(formIndex){
  let elements = this.state.badge.info.form.data[formIndex].elements;
  elements.map((element)=>{

  });
 }

 validateAndAlert(callBack, element){
  let elem = this.state[element];
      elem.reset = false;
  let alertMsg = this.state.alert.msg;
  let id = callBack.id;
  let isValid =  callBack.isValid;
  let msg = callBack.msg;
  let value = callBack.value;
  if(isValid){ 
    delete alertMsg[id]; 
    elem.id = id;
    elem.isValid = isValid;
    elem.value = value;
  } else {
    if(msg.length>0){
      alertMsg[id]={ isValid:isValid, msg: msg };
    }
  }
  this.setState({ [element]: elem });
  let alertMsgElem = Object.keys(alertMsg);
  if(alertMsgElem.length>0){ this.showAlert(alertMsg); }
  else { this.hideAlert(); }
}


isValid_emailAddress = (callBack) => { 
  this.validateAndAlert(callBack, 'emailAddress');
}

isValid_mobile = (callBack) => { 
  this.validateAndAlert(callBack.mobile, 'mobile');
  this.validateAndAlert(callBack.mobCode, 'mobCode');
}

 render(){
    let badge = this.ui_viewBadgeMenu();
    return (<div>
              <div className="container-fluid">{badge.menu}</div>
              <div>{badge.content}</div>
            </div>);
 }
 
}