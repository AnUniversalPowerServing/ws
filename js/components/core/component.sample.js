class Sample extends React.Component {
 constructor(props) {
        super(props);
        this.state = { alertView: false,
                       alertMsg:{},
                       securityCaptcha:{ value:'', isValid: false},
                       emailAddress:{ value:'', isValid: false, sendOTPCode:false },
                       mobile:{ value:'', isValid: false, sendOTPCode:false },
                       mobCode:{ value:'', isValid: false },
                       isVerified: false
                     };
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
    this.setState({ securityCaptcha: elem });
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

isValid_mobile = (callBack) => { 
  this.validateAndAlert(callBack.mobile, 'mobile');
  this.validateAndAlert(callBack.mobCode, 'mobCode');
}

validate(){
    let emailAddress = this.state.emailAddress;
    if(emailAddress.isValid) {   emailAddress.sendOTPCode = true; } 
    this.setState({ emailAddress });
    console.log(this.state.emailAddress);

    let mobCode= this.state.mobCode;
    console.log(this.state.mobCode);

    let mobile = this.state.mobile;
    if(mobile.isValid) {   mobile.sendOTPCode = true; } 
    this.setState({ isVerified:true, mobile });
    console.log(this.state.mobile);
}

isVerified_emailAddress = (callBack) => {

}

isVerified_mobile = (callBack) => {

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
      <EmailAddress id="fld_emailAddress" 
                    validateUrl="http://localhost/ws/php/test.php" 
                    isFormValid={this.isValid_emailAddress} />

      <Mobile mobCodeId="fld_mobileCode"
              mobileId="fld_mobile" 
              validateUrl="http://localhost/ws/php/test.php" 
              isMobileFormValid={this.isValid_mobile}
              isMobCodeFormValid={this.isValid_mobCode} />

      <SecurityCaptcha id="fld_userSecurityCaptcha" 
                       isFormValid={this.isValid_securityCaptcha} />

      <button className="btn btn-primary form-control" 
              onClick={()=>{ this.validate(); }}>Verify</button>
      {this.state.isVerified && (
        <div>
        <ValidateEmailAddress email={this.state.emailAddress.value} 
                              sendOTPCode={this.state.emailAddress.sendOTPCode}
                              isFormValid={this.isVerified_emailAddress} />

        <ValidateMobile mobCode={this.state.mobCode.value} 
                        mobile={this.state.mobile.value} 
                        sendOTPCode={this.state.mobile.sendOTPCode}
                        isFormValid={this.isVerified_mobile} />
        </div>
      )}
    </div>
  );
 }
}