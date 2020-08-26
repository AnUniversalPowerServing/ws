class Sample extends React.Component {
 constructor(props) {
        super(props);
        this.state = { alertView: false,
                       alertMsg:{},
                       securityCaptcha:{ value:'', isValid: false},
                       emailAddress:{ value:'', isValid: false, sendOTPCode:false },

        };
    }

validateAndAlert(callBack, element){
  let alertMsg = this.state.alertMsg;
  let id = callBack.id;
  let isValid =  callBack.isValid;
  let msg = callBack.msg;
  let value = callBack.value;
  console.log("vale: "+value);
  alertMsg[id]={ isValid:isValid, msg: msg };
  if(isValid){
     delete alertMsg[id]; 
     let elem = { isValid: isValid, value:value };
     this.setState({ [element]:elem });
  }
  let alertMsgElem = Object.keys(alertMsg);
  let alertView = false;
  if(alertMsgElem.length>0){ alertView = true; }
  this.setState({ alertView, alertMsg });
}

isValid_securityCaptcha = (callBack) => {
  this.validateAndAlert(callBack, 'securityCaptcha');
}

isValid_emailAddress = (callBack) => { 
  this.validateAndAlert(callBack, 'emailAddress');
  
}

validate(){
    let emailAddress = this.state.emailAddress;
    emailAddress.sendOTPCode = true;
    this.setState({ emailAddress });
    console.log(this.state.emailAddress);
}

isVerified_emailAddress = (callBack) => {

}

 render(){
    let alertMsg = this.state.alertMsg;
    let alertMsgElem = Object.keys(alertMsg);
  return (
    <div>
    {this.state.alertView &&  (
      <Alert alertType="danger" 
        alertMsg={(alertMsgElem.length>0) ? 
                   alertMsg[alertMsgElem[alertMsgElem.length-1]].msg : '' } />
    )}
      <EmailAddress id="fld_emailAddress" validateUrl="http://localhost/ws/php/test.php" 
       isFormValid={this.isValid_emailAddress} />
      <SecurityCaptcha id="fld_userSecurityCaptcha" isFormValid={this.isValid_securityCaptcha} />
      <button className="btn btn-primary form-control" 
      onClick={()=>{
        this.validate();
      }}>Verify</button>
      <ValidateEmailAddress email={this.state.emailAddress.value} sendOTPCode={this.state.emailAddress.sendOTPCode}
      isFormValid={this.isVerified_emailAddress} />
    </div>
  );
 }
}