

class Trigger extends React.Component {
 constructor(props) {
  super(props);
  this.state = { alertView: false,
                 alertMsg:{},
                 badge: { index:0,
                          info: this.props.form,
                        },
                 emailAddress:{ value:'', isValid: false, sendOTPCode:false }, 
               };
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
        let alertMsg = this.state.alertMsg;
        let alertMsgElem = Object.keys(alertMsg);
        badgeContent.push((formIndex > 0)?
        <div id={'content'+formIndex} className="mtop15p hide-block">
          {this.state.alertView &&  (
      <Alert alertType="danger" 
             alertMsg={(alertMsgElem.length>0) ? 
                        alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
    )}
           {this.ui_elements(elements)} 
        </div>:
        <div id={'content'+formIndex}>
           {this.state.alertView &&  (
      <Alert alertType="danger" 
             alertMsg={(alertMsgElem.length>0) ? 
                        alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
    )}
          {this.ui_elements(elements)}
        </div>);  
    });
  }
  return { menu: badgeMenu, content:badgeContent };
 }

 sel_BadgeMenu(index, size){
  this.state.badge.index = index;
  console.log("badgeIndex: "+this.state.badge.index);
  for(let i=0;i<size;i++){
    if(i === index) {
        if($('#content'+i).hasClass('hide-block')){
            $('#content'+i).removeClass('hide-block');
        }
    } else {
        if(!$('#content'+i).hasClass('hide-block')){
            $('#content'+i).addClass('hide-block');
        }
    }
  }
 }

 ui_emailAddress(element){
    let formName = this.state.badge.info.form.name;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    return (<EmailAddress id={formName+'_emailAddress'} 
                    isRequired={isRequired}
                    validateUrl={validateUrl} 
                    isFormValid={this.isValid_emailAddress} />);
 }

 ui_mobile(element){
    let formName = this.state.badge.info.form.name;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    return (<Mobile mobCodeId={formName+'_mobCode'}
                    mobileId={formName+'_mobile'} 
                    isRequired={isRequired}
                    validateUrl={validateUrl}
                    isMobileFormValid={this.isValid_mobile}
                    isMobCodeFormValid={this.isValid_mobCode} />);
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


 validateAndAlert(callBack, element){
  let alertMsg = this.state.alertMsg;
  let id = callBack.id;
  let isValid =  callBack.isValid;
  let msg = callBack.msg;
  let value = callBack.value;
  alertMsg[id]={ isValid:isValid, msg: msg };
  if(isValid){ 
    delete alertMsg[id]; 
    let elem = this.state[element];
    elem.isValid = isValid;
    elem.value = value;
    this.setState({ [element]: elem });
  }
  let alertMsgElem = Object.keys(alertMsg);
  let alertView = false;
  if(alertMsgElem.length>0){ alertView = true; }
  this.setState({ alertView, alertMsg });
  console.log(this.state);
}

isValid_emailAddress = (callBack) => { 
  this.validateAndAlert(callBack, 'emailAddress');
}

 render(){
    let badge = this.ui_viewBadgeMenu();
    return (<div>
              <div className="container-fluid">{badge.menu}</div>
              <div>{badge.content}</div>
            </div>);
 }
 
}