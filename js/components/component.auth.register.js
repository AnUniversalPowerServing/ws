function genRandomNumber(min,max){
  return Math.floor(Math.random() * (max - min + 1) + min);
}
class AuthRegister extends React.Component {
  constructor(props) {
    super(props);
    this.state = { style: { form:{ color:'#444242' },
                            badge: { active: { backgroundColor:'#444242', color:'#fff' },
                                     nonActive: { backgroundColor:'#fff', color:'#444242' } },
                            formElement:{ height:'40px' }
                          },
				   badges:[{menu:'badge-auth-reg-emailMobile', 
                    content:'content-auth-reg-emailMobile', isActive:true },
                   {menu:'badge-auth-reg-genInfo', 
                    content:'content-auth-reg-genInfo', isActive:false },
                   {menu:'badge-auth-reg-setPassword', 
                    content:'content-auth-reg-setPassword', isActive:false},
                   {menu:'badge-auth-reg-securityQ',
                    content:'content-auth-reg-securityQ', isActive:false}],
           authRegForm: { comDet_alertFld_view:false, // true - Viewable, false - NonViewable
                          comDet_alertFld_val:'',
                          comDet_emailFld_edit:true, // true - Editable, false - NonEditable
                          comDet_emailFld_val:'',
                          comDet_emailFld_verifyChangeBtn:true, // true - Verify , false - Change
                          comDet_emailFld_otpForm: false, // true - Viewable, false - NonViewable
                          comDet_emailFld_otpForm_alertView:false,
                          comDet_emailFld_otpForm_alertType:'',
                          comDet_emailFld_otpForm_alertMsg:'',
                          comDet_emailFld_sysOtpCode:genRandomNumber(10000,99999), 
                          comDet_emailFld_userOtpCode: '',
                          comDet_mobCodeFld_edit:true, // true - Editable, false - NonEditable
                          comDet_mobCodeFld_val:'',
                          comDet_mobileFld_edit:false, // true - Editable, false - NonEditable
                          comDet_mobileFld_val:'', 
                          comDet_mobileFld_sysOtpCode:genRandomNumber(10000,99999),
                          comDet_mobileFld_userOtpCode:'',
                          comDet_mobileFld_verifyChangeBtn: true, // true - Verify , false - Change
                          comDet_mobileFld_otpForm: false, // true - Viewable, false - NonViewable
                          comDet_mobileFld_otpForm_alertType:'',
                          comDet_mobileFld_otpForm_alertMsg:'',
                        } 
                   
                };
    this.sel_BadgeMenu = this.sel_BadgeMenu.bind(this);
  }

  ui_viewBadgeMenu(menu){
    let html = [];
    let badges = this.state.badges;
    for(var i = 0; i<badges.length; i++){
      if(badges[i].isActive){
        html.push(<div align="center" className="col-xs-3">
                <span id={badges[i].menu} className="badge" 
                onClick={(event)=>this.sel_BadgeMenu(event.target.id)}
                style={this.state.style.badge.active}>{i+1}
                </span>
              </div>);
      } else {
        html.push(<div align="center" className="col-xs-3">
                <span id={badges[i].menu} className="badge" 
                style={this.state.style.badge.nonActive}
                onClick={(event)=>this.sel_BadgeMenu(event.target.id)}>{i+1}
                </span>
              </div>);
      }
    }
    return html;
  }

  sel_BadgeMenu(menu){
    let badges = this.state.badges;
    for(var i = 0; i<badges.length; i++){
      if(menu!==-1){
        if(menu === badges[i].menu){ 
          badges[i].isActive = true; 
          document.getElementById(badges[i].content).style.display='block';
        }
        else { 
          badges[i].isActive = false;
          document.getElementById(badges[i].content).style.display='none';
        }
      }
    }
    this.setState({ badges });
  }

  authRegEmailMobile_verifyChange_emailAddress(){
    let authRegForm = this.state.authRegForm;
    console.log(authRegForm.comDet_emailFld_sysOtpCode);
    let emailStatus = 'error';
    let preStyle = undefined;
    if(authRegForm.comDet_emailFld_verifyChangeBtn){ // Verify click Logic
      if(authRegForm.comDet_emailFld_val.length>0){ // If Email is Entered
        authRegForm.comDet_emailFld_edit = false; 
        authRegForm.comDet_emailFld_verifyChangeBtn = false;
        authRegForm.comDet_emailFld_otpForm = true;
        emailStatus = 'success';
        // alert
        authRegForm.comDet_emailFld_otpForm_alertView = true;
        authRegForm.comDet_emailFld_otpForm_alertType='info';
        authRegForm.comDet_emailFld_otpForm_alertMsg='An Email with OTP Code is sent to your Email Address. Please check it and Enter that OTP Code in the given below field:';
      
      }    
    } else { // Change click Logic
      authRegForm.comDet_emailFld_verifyChangeBtn = true;
      authRegForm.comDet_emailFld_edit = true;
      authRegForm.comDet_emailFld_otpForm = false;
      emailStatus = 'remove';
      preStyle = 'bg-skyBlue';
    }
    bootstrap_formField_trigger(emailStatus,'comDet_emailFld',preStyle);
    console.log(authRegForm);
    this.setState({ authRegForm });
  }

  authRegEmailMobile_validate_emailAddress(){
    let authRegForm = this.state.authRegForm;
    let emailStatus = 'error';
    let preStyle = undefined;
    console.log("comDet_emailFld_sysOtpCode: "+authRegForm.comDet_emailFld_sysOtpCode);
    console.log("comDet_emailFld_userOtpCode: "+authRegForm.comDet_emailFld_userOtpCode);
    if(authRegForm.comDet_emailFld_sysOtpCode.toString() === authRegForm.comDet_emailFld_userOtpCode){
      console.log('valid');
      // alert
      authRegForm.comDet_emailFld_otpForm_alertView=true;
      authRegForm.comDet_emailFld_otpForm_alertType='success';
      authRegForm.comDet_emailFld_otpForm_alertMsg='Your Email Address got validated Successfully.';
      emailStatus = 'success';
      setTimeout(()=>{ 
        console.log('triggered');
        authRegForm.comDet_emailFld_otpForm = false;
        this.setState({ authRegForm });},2000);
    }else {
      console.log('inValid');
      // alert
      authRegForm.comDet_emailFld_otpForm_alertView=true;
      authRegForm.comDet_emailFld_otpForm_alertType='danger';
      authRegForm.comDet_emailFld_otpForm_alertMsg='You have entered Invalid OTPCode. An Email with OTP Code is sent to your Email Address. Please check it and Enter that OTP Code in the given below field:';
    }
    bootstrap_formField_trigger(emailStatus,'comDet_emailFld_userOtpCode',preStyle);
    console.log(authRegForm);
    this.setState({ authRegForm });
  }


  authRegEmailMobile_verifyChange_mobileNumber(){
  let authRegForm = this.state.authRegForm;
  let mobileStatus = 'error';
  let preStyle = undefined;
  if(authRegForm.comDet_mobileFld_verifyChangeBtn){ // Verify click Logic
    if(authRegForm.comDet_mobileFld_val.length>0){
      authRegForm.comDet_mobCodeFld_edit = false;
      authRegForm.comDet_mobileFld_edit = false;
      authRegForm.comDet_mobileFld_verifyChangeBtn = false;
      authRegForm.comDet_mobileFld_otpForm = true;
      mobileStatus = 'success';
    }
  } else { // Change click Logic
    authRegForm.comDet_mobileFld_verifyChangeBtn = true;
    authRegForm.comDet_mobCodeFld_edit = true;
    authRegForm.comDet_mobileFld_edit = true;
    authRegForm.comDet_mobileFld_otpForm = false;
    mobileStatus = 'remove';
    preStyle = 'bg-skyBlue';
  }
  console.log(authRegForm);
	this.setState({ authRegForm });
	bootstrap_formField_trigger(mobileStatus,['comDet_mobileFld']);
  }

  authRegEmailMobile_nextForm(){
    // Email Address
    // Email OTP
    // Mobile
    // Mobile OTP
  }

  authRegEmailMobile_viewField_emailAddress(){
    return (<div className="form-group">
    <label className="label-skyBlue">Email Address <span>Required</span></label>
    <div className="input-group">
      <input id="comDet_emailFld" className="form-control border1px-skyBlue" 
      placeholder="Enter Email Address" 
            onChange={(event)=>{
             // bootstrap_formField_trigger('remove',event.target.id,'bg-skyBlue'); // Add Condition
              this.state.authRegForm.comDet_emailFld_val = event.target.value;
            }}
            disabled={!this.state.authRegForm.comDet_emailFld_edit} />
      <div className="input-group-btn">
        
        <button className="btn bg-skyBlue"
          onClick={()=>this.authRegEmailMobile_verifyChange_emailAddress()}>
          <b>{this.state.authRegForm.comDet_emailFld_verifyChangeBtn ? 'Verify' : 'Change'}</b></button>
      </div>
    </div>
  </div>);
  }

  authRegEmailMobile_viewField_emailOTPForm(){
    return (<div>
      {this.state.authRegForm.comDet_emailFld_otpForm && (
      <div className="list-group">
      <div className="list-group-item pad0 boxShadow borderRadTopRight5p 
                      borderRadBotRight5p borderRadBotLeft5p">
      <div>
        <span className="label label-primary pad10p fs12 borderRadTopLeft0 borderRadBotLeft0">
        Validate your Email Address !!!</span>
      </div>
        
      <div className="container-fluid mtop15p">
      <div className="row">
      <div className="col-sm-12">

      {console.log('comDet_emailFld_otpForm_alertView: '+this.state.authRegForm.comDet_emailFld_otpForm_alertView)} 
      {this.state.authRegForm.comDet_emailFld_otpForm_alertView && (
        <Alert alertType={this.state.authRegForm.comDet_emailFld_otpForm_alertType} 
               alertMsg={this.state.authRegForm.comDet_emailFld_otpForm_alertMsg} />
      )}
      

      <div className="form-group">
        <label className="label-skyBlue">OTP Code<span>Required</span></label>
        <div className="input-group">
          <input id="comDet_emailFld_userOtpCode" className="form-control border1px-skyBlue" 
             placeholder="Enter OTP Code" 
             onChange={(event)=>{
              // bootstrap_formField_trigger('remove',event.target.id,'bg-skyBlue'); // Add Condition
               this.state.authRegForm.comDet_emailFld_userOtpCode = event.target.value;
             }}
             />
          <div className="input-group-btn">
            <button className="btn bg-skyBlue" 
            onClick={()=>this.authRegEmailMobile_validate_emailAddress()} >
              <b>Validate</b></button>
          </div>
        </div>
      </div>

      </div> 
      </div> 
      </div>

      </div>
      </div>
      )}
      </div>);
  }

  authRegEmailMobile_viewField_mobile(){
   return (<div className="form-group">
   <label className="label-skyBlue">Mobile Number <span>Required</span></label>
   <div className="input-group">
     <div className="input-group-btn">
       <div className="dropdown">
         <button id="comDet_mobCodeFld" className="btn btn-default dropdown-toggle bordRad0 border1px-skyBlue" 
                   disabled={this.state.authRegForm.comDet_mobCodeFld_edit}
                    type="button" data-toggle="dropdown">+91 &nbsp;
                   <span className="caret"></span></button>
                   <ul className="dropdown-menu">
                       <li><a href="#">+91</a></li>
                   </ul>
               </div>
           </div>
           <input id="comDet_mobileFld" className="form-control border1px-skyBlue" 
           placeholder="Enter Mobile Number"
              disabled={this.state.authRegForm.comDet_mobileFld_edit}
              onChange={(event)=>{
                // bootstrap_formField_trigger('remove',event.target.id,'bg-skyBlue'); // Add Condition
                 this.state.authRegForm.comDet_mobileFld_val = event.target.value;
               }}
              />
           <div className="input-group-btn">
             <button className="btn bg-skyBlue"
               onClick={()=>this.authRegEmailMobile_verifyChange_mobileNumber()}>
               <b>{this.state.authRegForm.comDet_mobileFld_verifyChangeBtn ? 'Verify':'Change'}</b>
             </button>
           </div>
      </div>
    </div>);
  }
  
  authRegEmailMobile_viewField_mobileOTPForm(){
    return (<div>
      {this.state.authRegForm.comDet_mobileFld_otpForm && (
      <div className="list-group">
      <div className="list-group-item pad0 boxShadow borderRadTopRight5p 
                      borderRadBotRight5p borderRadBotLeft5p">
      <div>
        <span className="label label-primary pad10p fs12 borderRadTopLeft0 borderRadBotLeft0">
        Validate your Mobile Number !!!</span>
      </div>
        
      <div className="container-fluid mtop15p">
      <div className="row">
      <div className="col-sm-12">
        
      <div className="alert alert-info alert-dismissible">
        <a href="#" className="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Alert Message !</strong><br/>
         An OTP Code is sent to your Mobile. Please check it and 
         Enter that OTP Code in the given below field:
      </div>

      <div className="form-group">
        <label className="label-skyBlue">OTP Code<span>Required</span></label>
        <div className="input-group">
          <input className="form-control" placeholder="Enter OTP Code" 
                style={this.state.style.formElement} />
          <div className="input-group-btn">
            <button className="btn btn-primary" style={this.state.style.formElement}><b>Validate</b></button>
          </div>
        </div>
      </div>

      </div> 
      </div> 
      </div>

      </div>
      </div>
      )}
    </div>);
  }

  ui_viewEmailMob(){
    return (<div>
      <div className="row">
      <div className="col-sm-12">
      <div align="center" className="form-group mtop15p mbot15p">
	      <h5><b>Provide Your Communication Details</b></h5>
      </div>

      {this.state.authRegForm.comDet_alertFld_view && (
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Alert Message !</strong><br/> 
        {this.state.authRegForm.comDet_alertFld_val}
      </div>
      )}
    
      {this.authRegEmailMobile_viewField_emailAddress()}
      {this.authRegEmailMobile_viewField_emailOTPForm()}
      {this.authRegEmailMobile_viewField_mobile()}
      {this.authRegEmailMobile_viewField_mobileOTPForm()}

      </div>
      </div>
      <div className="row">
        <div className="col-sm-1"></div>
        <div className="col-sm-5">
          <div className="form-group">
            <button className="btn btn-primary form-control" 
             onClick={()=>{
               this.sel_BadgeMenu('badge-auth-reg-genInfo');
               this.authRegEmailMobile_nextForm();
             }}><b>Next</b></button>
          </div>
        </div>
        <div className="col-sm-5">
          <div className="form-group">
            <button className="btn btn-primary-o form-control"><b>Reset</b></button>
          </div>
        </div>
        <div className="col-sm-1"></div>
      </div>
    </div>);
  }

  ui_viewGenInfo(){
    return (<div>
      <div align="center" className="form-group mtop15p mbot15p">
	      <h5><b>Provide Basic Information to Create Account</b></h5>
      </div>

      <div className="form-group">
              <label>Surname <span>Required</span></label>
              <input className="form-control" placeholder="Enter Surname" 
              style={this.state.style.formElement} />
            </div>

            <div className="form-group">
              <label>Name <span>Required</span></label>
              <input className="form-control" placeholder="Enter Name" 
              style={this.state.style.formElement} />
            </div>
            
            <div className="form-group">
              <label>Gender <span>Required</span></label>
              <select className="form-control" style={this.state.style.formElement}>
                <option value="">Select Gender</option>
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
              </select>
            </div>

            <div className="form-group">
              <label>Date of Birth <span>Required</span></label>
              <input type="date" className="form-control" placeholder="Enter Name" 
              style={this.state.style.formElement} />
            </div>
 
           

            <div className="row">
              <div className="col-sm-6">
                <button className="btn btn-default form-control"><b>Next</b></button>
              </div>
              <div className="col-sm-6">
                <button className="btn btn-default form-control"><b>Reset</b></button>
              </div>
            </div>
      </div>);
  }

  render(){
    return (<div className="container-fluid mtop15p">
      <div className="row">
          <div className="col-sm-4">

            <div align="center">
              <h4><b>Create an Account</b></h4>
            </div>
            <div className="step-badges mtop15p mbot15p">
            {this.ui_viewBadgeMenu(-1)}
            </div>

            <div id="content-auth-reg-emailMobile">{this.ui_viewEmailMob()}</div>
            <div id="content-auth-reg-genInfo" style={{display:'none'}}>{this.ui_viewGenInfo()}</div>
            <div id="content-auth-reg-setPassword" style={{display:'none'}}>223334</div>
            <div id="content-auth-reg-securityQ" style={{display:'none'}}>76444</div>
               
            

          </div>
      </div>
    </div>);
  }
}