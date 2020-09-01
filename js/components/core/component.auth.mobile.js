
class Mobile extends React.Component {
 constructor(props) {
  super(props);
  this.state = { fld_userMobCode: this.props.mobCodeId,
                 fld_userMobile: this.props.mobileId,
                 mobCode: this.props.mobCodeDefault, // Default
                 callBack: { mobile: { id: this.props.mobileId, 
                                       value: '', 
                                       isValid: false, 
                                       msg: '' },
                             mobCode: { id: this.props.mobCodeId,
                                        value: '',
                                        isValid: true, 
                                        msg: ''
                                       }
                            }
               };
 }

 callBack(mobileValue, mobileIsValid, mobileMsg, 
          mobCodeValue, mobCodeIsValid, mobCodeMsg){
   let callBack = this.state.callBack;
       callBack.mobile.value = mobileValue;
       callBack.mobile.isValid = mobileIsValid;
       callBack.mobile.msg = mobileMsg;
       callBack.mobCode.value = mobCodeValue;
       callBack.mobCode.isValid = mobCodeIsValid;
       callBack.mobCode.msg = mobCodeMsg;
   this.setState({ callBack });
   this.props.isFormValid(callBack);
 }

 validateMobile(event){
   let fld_userMobile = this.state.fld_userMobile;
   let mobile = event.target.value;
   let callBack = this.state.callBack;
   let mobCode = this.state.mobCode.value;
   if(mobile.length=== 10){
    fetch(this.props.validateUrl).then(response => response.json())
    .then(data => {
      if(this.props.purpose === 'Register'){
         if(!data.isExist){
            bootstrap_formField_trigger('success', fld_userMobile);
            this.callBack(mobile, true, '', mobCode, true, '');
         } else {
            bootstrap_formField_trigger('error', fld_userMobile);
            this.callBack(mobile, false, 'Mobile Number is already Registered.', mobCode, true, '');
         }
      } else if(this.props.purpose === 'Authenticate') {
         if(data.isExist){
            bootstrap_formField_trigger('success', fld_userMobile);
           this.callBack(mobile, true, '', mobCode, true, '');
         } else {
            bootstrap_formField_trigger('error', fld_userMobile);
            this.callBack(mobile, false, 'Mobile Number is not Registered. Please do Signup / Register for an Account.', mobCode, true, '');
         }
      }
    });
   } else {
      bootstrap_formField_trigger('error', fld_userMobile);
      this.callBack(mobile, false, 'Please Enter valid 10-digit Mobile Number.', mobCode, true, '');
   }
   document.getElementById(event.target.id).focus();
 }

 ui_reset_mobCode(){
   let mobCode = this.state.mobCode;
       mobCode.flag = this.props.mobCodeDefault.flag;
       mobCode.value = this.props.mobCodeDefault.value;
       mobCode.country = this.props.mobCodeDefault.country;
   this.callBack('', false, '', '', false, '');
  }

  ui_reset_mobile(){
   let callBack = this.state.callBack;
   let mobile = callBack.mobile;
   callBack.mobile.value = '';
   document.getElementById(mobile.id).value = '';
   bootstrap_formField_trigger('remove',mobile.id);
  }

 render(){
  if(this.props.resetMobCode){ this.ui_reset_mobCode(); }
  if(this.props.resetMobile){ this.ui_reset_mobile(); }
  return (
    <div className="form-group">
     <label>{this.props.label} {(this.props.isRequired) && <span>Required</span>}</label>
     <div className="input-group">
     <div className="input-group-btn">
       <div className="dropdown">
         <button id={this.state.fld_userMobCode} 
            className="btn btn-default dropdown-toggle bordRad0 border1px-skyBlue" 
            type="button" data-toggle="dropdown">
               <div>
            <img style={{width:'20px'}}  src={PROJECT_URL+this.state.mobCode.flag} />
                &nbsp;&nbsp; {this.state.mobCode.value} &nbsp;
            <span className="caret"></span>
         </div></button>
         <ul className="dropdown-menu">
            {mobCodes.map((data) =>{
               return (<li onClick={()=>{
                           let mobCode = this.state.mobCode;
                               mobCode.value = data.mobCode;
                               mobCode.flag = data.flag;
                               mobCode.country = data.country;
                           this.setState({ mobCode });
                        }}>
                        <a href="#">
                           <img style={{width:'25px'}}  src={PROJECT_URL+data.flag} />
                           &nbsp;&nbsp;&nbsp; {data.mobCode} &nbsp;&nbsp; ({data.country})
                        </a>
                       </li>);
            })}
         </ul>
      </div>
     </div>
     <input id={this.state.fld_userMobile} type="number" className="form-control" 
     placeholder="Enter Mobile Number"  
     onKeyPress={(event)=>{ allowOnlyNumbers(event); }}
     onChange={(event)=>{
        this.validateMobile(event);
        
     }}/>
     </div>
    </div>
  );
 }
}