class EmailAddress extends React.Component {
 constructor(props) {
  super(props);
  this.state = { fld_userEmailAddress: this.props.id,
                 callBack:{ emailAddress :{ id: this.props.id, 
                                            value: '', 
                                            isValid: false, 
                                            msg: '' }
               }
        };
 }

 callBack(status, email, isValid, msg){
  let fld_userEmailAddress = this.state.fld_userEmailAddress;
  let callBack = { id:fld_userEmailAddress, 
      value:email, 
      isValid: isValid, 
      msg: msg
    };
  this.setState({ callBack });
  this.props.isFormValid(callBack);
  bootstrap_formField_trigger(status, fld_userEmailAddress);
 }

 validateEmail(event){
   let email = event.target.value;
   if(this.checkEmailFormat(email)){
    fetch(this.props.validateUrl).then(response => response.json())
    .then(data => {
      if(this.props.purpose === 'Register'){
         if(!data.isExist){
            this.callBack('success', email, true, '');
         } else {
            this.callBack('error', email, false, 'Email Address is already Registered.');
         }
      } else if(this.props.purpose === 'Authenticate') {
         if(data.isExist){
            this.callBack('success', email, true, '');
         } else {
            this.callBack('error', email, false, 'Email Address is not Registered. Please do Signup / Register for an Account.');
         }
      }
    });
   } else {
      this.callBack('error', email, false, 'Looks Incorrect Email Format. Please Enter Valid Email Address.');
   } 
 }

 checkEmailFormat(email){
    let mailformat ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    let validFormat = false;
    if(email.match(mailformat)){ validFormat = true; }
    console.log(validFormat);
    return validFormat;
 }

 ui_reset_emailAddress(){
   let emailAddress = this.state.emailAddress;
   document.getElementById(this.state.fld_userEmailAddress).value = '';
   this.callBack('remove', emailAddress, false, '');
 }

 render(){
  if(this.props.reset){ this.ui_reset_emailAddress(); }
  return (
    <div className="form-group">
     <label>{this.props.label} {(this.props.isRequired) && <span>Required</span>}</label>
     <input id={this.state.fld_userEmailAddress} type="text" className="form-control" 
     placeholder="Enter Email Address" onChange={(event)=>{
        this.validateEmail(event);
     }}/>
    </div>
  );
 }
}