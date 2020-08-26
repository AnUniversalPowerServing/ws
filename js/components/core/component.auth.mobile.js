var mobCodes = [{"mobCode":"+91", "flag":"/img/country-flag/india.png","country":"India"},
                {"mobCode":"+1", "flag":"/img/country-flag/usa.png","country":"United States of America"},
                {"mobCode":"+61", "flag":"/img/country-flag/australia.png","country":"Australia"}
                  ];
class Mobile extends React.Component {
 constructor(props) {
  super(props);
  this.state = { fld_userMobCode: this.props.mobCodeId,
                 fld_userMobile: this.props.mobileId,
                 mobCode: { value:'+91', flag:'/img/country-flag/india.png', country:'India' } // Default
               };
 }

 validateMobile(event){
   let fld_userMobile = this.state.fld_userMobile;
   let mobile = event.target.value;
   if(mobile.length=== 10){
    fetch(this.props.validateUrl).then(response => response.json())
    .then(data => {
        if(data.isExist){
           bootstrap_formField_trigger('success', fld_userMobile);
           let callBack = { id:fld_userMobile, value:mobile, isValid: true, msg: '' }
           this.props.isMobileFormValid(callBack);
        } else {
           bootstrap_formField_trigger('error', fld_userMobile);
           let callBack = { id:fld_userMobile, 
                            value:mobile, 
                            isValid: false, 
                            msg: 'Mobile Number is already Registered.' 
                          };
           this.props.isMobileFormValid(callBack);
        }
    });
   } else {
      bootstrap_formField_trigger('error', fld_userMobile);
      let callBack = { id:fld_userMobile, 
         value:mobile, 
         isValid: false, 
         msg: 'Please Enter valid 10-digit Mobile Number.' 
       };
      this.props.isMobileFormValid(callBack);
   }
   this.props.isMobCodeFormValid({ value: this.state.mobCode.value, isValid: true });
   document.getElementById(event.target.id).focus();
 }

 render(){
  return (
    <div className="form-group">
     <label>Mobile Number</label>
     <div className="input-group">
     <div className="input-group-btn">
       <div className="dropdown">
         <button id={this.state.fld_userMobCode} 
            className="btn btn-default dropdown-toggle bordRad0 border1px-skyBlue" 
            type="button" data-toggle="dropdown">
               <img style={{width:'20px'}}  src={PROJECT_URL+this.state.mobCode.flag} />
                &nbsp;&nbsp; {this.state.mobCode.value} &nbsp;
            <span className="caret"></span></button>
         <ul className="dropdown-menu">
            {mobCodes.map((data) =>{
               return (<li onClick={()=>{
                           let mobCode = this.state.mobCode;
                               mobCode.value = data.mobCode;
                               mobCode.flag = data.flag;
                               mobCode.country = data.country;
                           this.setState({ mobCode });
                           this.props.isMobCodeFormValid({ value: mobCode.value, isValid: true });

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