class EmailAddress extends React.Component {
 constructor(props) {
  super(props);
  this.state = { callBack:{ emailAddress :{ id: this.props.id, 
                                            value: '', 
                                            totalTextSize: this.props.totalTextSize,
                                            showTextCapacity:this.props.showTextCapacity,
                                            isValid: false, 
                                            msg: '' }
               }
        };
 }
 
 callBack(status, email, isValid, msg){
  let callBack = this.state.callBack;
  let fld_userEmailAddress = callBack.emailAddress.id;
  callBack.emailAddress.value = email;
  callBack.emailAddress.isValid = isValid;
  callBack.emailAddress.msg = msg;
  this.setState({ callBack });
  this.props.isFormValid(callBack);
  bootstrap_formField_trigger(status, fld_userEmailAddress);
 }

 validateEmail(event){
   let email_Id = event.target.id;
   let email_value = event.target.value;
   let validateUrl = this.props.validateUrl;
   let purpose = this.props.purpose;
   if(this.checkEmailFormat(email_value)){
    fetch(validateUrl).then(response => response.json())
    .then(data => {
      if(purpose === 'Register'){
         if(!data.isExist){
            this.callBack('success', email_value, true, '');
         } else {
            this.callBack('error', email_value, false, 'Email Address is already Registered.');
         }
      } else if(purpose === 'Authenticate') {
         if(data.isExist){
            this.callBack('success', email_value, true, '');
         } else {
            this.callBack('error', email_value, false, 'Email Address is not Registered. Please do Signup / Register for an Account.');
         }
      }
    });
   } else {
      this.callBack('error', email_value, false, 'Looks Incorrect Email Format. Please Enter Valid Email Address.');
   } 
   document.getElementById(email_Id).focus();
 }

 checkEmailFormat(email){
    let mailformat ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    let validFormat = false;
    if(email.match(mailformat)){ validFormat = true; }
    return validFormat;
 }

 ui_reset_emailAddress(){
   let emailAddress = this.state.callBack.emailAddress.id;
   document.getElementById(emailAddress).value = '';
   this.callBack('remove', '', false, '');
 }

 handleOnChange = (event) =>{
   let callBack = this.state.callBack;
   let email_value = callBack.emailAddress.value;
   let email_totalTextSize = callBack.emailAddress.totalTextSize;
   if(email_totalTextSize!==undefined){
      if(email_value.length<email_totalTextSize || event.target.value.length<email_totalTextSize){
         this.validateEmail(event);
      } else {
         this.callBack('error', email_value, false,
                              'Email Field allows '+email_totalTextSize+' letters only. You are trying to enter more than it.')
      }
   } else {
      this.validateEmail(event);
   }
 };

 ui_viewWithTextCapacity_emailAddress(){
   let callBack = this.state.callBack;
   let email_Id = callBack.emailAddress.id;
   let email_value = callBack.emailAddress.value;
   let email_totalTextSize = callBack.emailAddress.totalTextSize;
   return (<div className="input-group">
             <input id={email_Id} 
                    type="text" 
                    className="form-control" 
                    style={{borderTopRightRadius:'5px', borderBottomRightRadius:'5px'}}
                    placeholder="Enter Email Address" 
                    value={email_value}
                    onChange={this.handleOnChange}  />
             <span className="input-group-addon">
               {email_value.length} / {email_totalTextSize}</span>
          </div>);
 }

 ui_viewWithOutTextCapacity_emailAddress(){
   let callBack = this.state.callBack;
   let email_Id = callBack.emailAddress.id;
   let email_value = callBack.emailAddress.value;
   let email_totalTextSize = callBack.emailAddress.totalTextSize;
   return (
            <input id={email_Id} 
                   type="text" 
                   className="form-control" 
                   placeholder="Enter Email Address" 
                   value={email_value}
                   onChange={this.handleOnChange}  />);
 }

 render(){
  let reset_emailAddress = this.props.reset;
  let label_emailAddress = this.props.label;
  let isRequired_emailAddress = this.props.isRequired;
  let callBack = this.state.callBack;
  let showTextCapacity = callBack.emailAddress.showTextCapacity;
  let totalTextSize = callBack.emailAddress.totalTextSize;
  if(reset_emailAddress){ this.ui_reset_emailAddress(); }
  return (<div className="form-group">
            <label>{label_emailAddress} {(isRequired_emailAddress) &&  <span><b>REQUIRED</b></span>}</label>
            {(showTextCapacity!==undefined && showTextCapacity) &&  (totalTextSize!==undefined) ? 
               this.ui_viewWithTextCapacity_emailAddress() : this.ui_viewWithOutTextCapacity_emailAddress() }
         </div>);
 }
}