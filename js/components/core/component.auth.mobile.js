
class Mobile extends React.Component {
 constructor(props) {
  super(props);
  this.state = { callBack: { mobile: { id: this.props.mobileId, 
                                       value: '', 
                                       isValid: false, 
                                       totalTextSize: this.props.totalTextSize,
                                       showTextCapacity:this.props.showTextCapacity,
                                       msg: '' },
                             mobCode: { id: this.props.mobCodeId,
                                        value: '',
                                        isValid: true, 
                                        msg: '',
                                        default: this.props.mobCodeDefault, // Default
                                       }
                            }
               };
 }

 callBack(status, mobileValue, mobileIsValid, mobileMsg, 
          mobCodeValue, mobCodeIsValid, mobCodeMsg){
   let callBack = this.state.callBack;
   let fld_userMobile = callBack.mobile.id;
       callBack.mobile.value = mobileValue;
       callBack.mobile.isValid = mobileIsValid;
       callBack.mobile.msg = mobileMsg;
       callBack.mobCode.value = mobCodeValue;
       callBack.mobCode.isValid = mobCodeIsValid;
       callBack.mobCode.msg = mobCodeMsg;
   this.setState({ callBack }); 
   if(status.length>0){
      bootstrap_formField_trigger(status, fld_userMobile);
   } 
   this.props.isFormValid(callBack);
 }

 validateMobile(event){
   let callBack = this.state.callBack;
   let fld_userMobile_id = callBack.mobile.id;
   let fld_userMobile_value = event.target.value;
   let totalTextSize = callBack.mobile.totalTextSize;
   let mobCode = this.state.callBack.mobCode.default.value;
   let validateUrl = this.props.validateUrl;
   let purpose = this.props.purpose;
   if(fld_userMobile_value.length=== totalTextSize){
    fetch(validateUrl).then(response => response.json())
    .then(data => {
      if(purpose === 'Register'){
         if(!data.isExist){
            this.callBack('success',fld_userMobile_value, true, '', mobCode, true, '');
         } else {
            this.callBack('error',fld_userMobile_value, false, 'Mobile Number is already Registered.', mobCode, true, '');
         }
      } else if(purpose === 'Authenticate') {
         if(data.isExist){
           this.callBack('success',fld_userMobile_value, true, '', mobCode, true, '');
         } else {
            this.callBack('error',fld_userMobile_value, false, 'Mobile Number is not Registered. Please do Signup / Register for an Account.', mobCode, true, '');
         }
      }
    });
   } else {
      this.callBack('error',fld_userMobile_value, false, 'Please Enter valid 10-digit Mobile Number.', mobCode, true, '');
   }
   document.getElementById(fld_userMobile_id).focus();
 }

 ui_reset_mobCode(){
   let mobCode = this.state.callBack.mobCode.default;
       mobCode.flag = this.props.mobCodeDefault.flag;
       mobCode.value = this.props.mobCodeDefault.value;
       mobCode.country = this.props.mobCodeDefault.country;
   this.callBack('','', false, '', '', false, '');
  }

  ui_reset_mobile(){
   console.log('ui_reset_mobile: called...');
   let callBack = this.state.callBack;
   let mobile = callBack.mobile;
   callBack.mobile.value = '';
   document.getElementById(mobile.id).value = '';
   bootstrap_formField_trigger('remove',mobile.id);
  }

  handleMobileOnChange = (event) =>{
   let callBack = this.state.callBack;
   let mobile_value = callBack.mobile.value;
   let mobCode_value = callBack.mobCode.value;
   let mobile_totalTextSize = callBack.mobile.totalTextSize;
   if(mobile_totalTextSize!==undefined){
      if(mobile_value.length<mobile_totalTextSize || event.target.value.length<mobile_totalTextSize){
         this.validateMobile(event);
      } else {
         this.callBack('error', mobile_value, false,
                              'Mobile Field allows '+mobile_totalTextSize+' letters only. You are trying to enter more than it.',
                              mobCode_value, true, '' );
      }
   } else {
      this.validateMobile(event);
   }
 };

 render(){
  let label = this.props.label;
  let isRequired = this.props.isRequired;
  let resetMobCode = this.props.resetMobCode;
  let resetMobile = this.props.resetMobile;
  let callBack = this.state.callBack;
  let fld_userMobCode_Id =  callBack.mobCode.id;
  let fld_userMobCode_flag = PROJECT_URL+this.state.callBack.mobCode.default.flag;
  let fld_userMobCode_value = this.state.callBack.mobCode.default.value;
  let fld_userMobile_Id = callBack.mobile.id;
  let fld_userMobile_value = callBack.mobile.value;
  let showTextCapacity = callBack.mobile.showTextCapacity;
  let totalTextSize = callBack.mobile.totalTextSize;

  if(resetMobCode){ this.ui_reset_mobCode(); }
  if(resetMobile){ this.ui_reset_mobile(); }
  return (
    <div className="form-group">
     <label>{label} {(isRequired) && <span><b>REQUIRED</b></span>}</label>
     <div className="input-group">

     <div className="input-group-btn">
       <div className="dropdown">
         <button id={fld_userMobCode_Id} 
            className="btn btn-default dropdown-toggle bordRad0 border1px-skyBlue" 
            type="button" data-toggle="dropdown">
               <div>
            <img style={{width:'20px'}}  src={fld_userMobCode_flag} />
                &nbsp;&nbsp; {fld_userMobCode_value} &nbsp;
            <span className="caret"></span>
         </div></button>
         <ul className="dropdown-menu">
            {mobCodes.map((data) =>{
               return (<li onClick={()=>{
                           let mobCode = this.state.callBack.mobCode.default;
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
     <input id={fld_userMobile_Id} type="number" className="form-control" 
            placeholder="Enter Mobile Number"  
            value={fld_userMobile_value}
            style={{borderTopRightRadius:'5px', borderBottomRightRadius:'5px'}}
            onKeyPress={(event)=>{ 
               if(allowOnlyNumbers(event)){ return true; }
               else {
                  this.callBack('error',fld_userMobile_value, false, 
                  'Mobile Field is allowed to enter the Numbers only.', fld_userMobCode_value, true, '');
                  document.getElementById(fld_userMobile_Id).focus();
                  return false;
               }
            }}
            onChange={this.handleMobileOnChange}/>
     {(showTextCapacity!==undefined && showTextCapacity===true) && 
      (totalTextSize!==undefined) && (
       <span className="input-group-addon">
        {fld_userMobile_value.length}/{totalTextSize}</span>
      )}
     </div>
    </div>
  );
 }
}