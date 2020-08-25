class EmailAddress extends React.Component {
 constructor(props) {
  super(props);
  this.state = { fld_userEmailAddress: this.props.id

        };
 }

 validateEmail(event){
   let fld_userEmailAddress = this.state.fld_userEmailAddress;
   let email = event.target.value;
   if(this.checkEmailFormat(email)){
    fetch(this.props.validateUrl).then(response => response.json())
    .then(data => {
        if(data.isExist){
           bootstrap_formField_trigger('success', fld_userEmailAddress);
           let callBack = { id:fld_userEmailAddress, isValid: true, msg: '' }
           this.props.isFormValid(callBack);
        } else {
           bootstrap_formField_trigger('error', fld_userEmailAddress);
           let callBack = { id:fld_userEmailAddress, isValid: false, msg: 'Email Address is already Registered.' }
           this.props.isFormValid(callBack);
        }
    });
   } else {
      bootstrap_formField_trigger('error', fld_userEmailAddress);
      let callBack = { id:fld_userEmailAddress, isValid: false, msg: 'Looks Incorrect Email Format. Please Enter Valid Email Address.' }
      this.props.isFormValid(callBack);
   }
   
 }

 checkEmailFormat(email){
    let mailformat ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    let validFormat = false;
    if(email.match(mailformat)){ validFormat = true; }
    console.log(validFormat);
    return validFormat;
 }

 render(){
  return (
    <div className="form-group">
     <label>Email Address</label>
     <input id={this.state.fld_userEmailAddress} type="text" className="form-control" 
     placeholder="Enter Email Address" onChange={(event)=>{
        this.validateEmail(event);
     }}/>
    </div>
  );
 }
}