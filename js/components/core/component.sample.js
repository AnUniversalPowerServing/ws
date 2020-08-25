class Sample extends React.Component {
 constructor(props) {
        super(props);
        this.state = { alertView: false,
                       alertMsg:{},
                       securityCaptcha_isValid: false,
                       emailAddress_isValid: false,

        };
    }

validateAndAlert(callBack, elem_isValid){
  let alertMsg = this.state.alertMsg;
  let alertView = true;
  let alertMsgElem = Object.keys(alertMsg);
      if(alertMsgElem.length==0){ alertView = false; }
  let id = callBack.id;
  let isValid =  callBack.isValid;
  let msg = callBack.msg;
  alertMsg[id]={ isValid:isValid, msg: msg  };
  if(isValid){ delete alertMsg[id]; }
  this.setState({ alertView, elem_isValid: isValid, alertMsg });
}

isValid_securityCaptcha = (callBack) => {
  this.validateAndAlert(callBack, this.state.securityCaptcha_isValid);
}

isValid_emailAddress = (callBack) => { 
  this.validateAndAlert(callBack, this.state.emailAddress_isValid);
}

 render(){
    let alertMsg = this.state.alertMsg;
    console.log(JSON.stringify(alertMsg));
    let alertMsgElem = Object.keys(alertMsg);
    console.log(alertMsgElem);
    console.log(alertMsgElem.length);
  return (
    <div>
    {this.state.alertView && (!this.state.securityCaptcha_isValid || 
      !this.state.emailAddress_isValid) &&  (
      <Alert alertType="danger" 
        alertMsg={(alertMsgElem.length>0) ? 
                   alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
    )}
      <EmailAddress id="fld_emailAddress" validateUrl="http://widesecond.com/php/test.php" 
       isFormValid={this.isValid_emailAddress} />
      <SecurityCaptcha id="fld_userSecurityCaptcha" isFormValid={this.isValid_securityCaptcha} />
    </div>
  );
 }
}