class AuthRegister extends React.Component {
  constructor(props) {
    super(props);
    this.state = { style: { form:{ color:'#444242' },
                            badge: { active: { backgroundColor:'#444242', color:'#fff' },
                                     nonActive: { backgroundColor:'#fff', color:'#444242' } },
                            formElement:{ height:'40px' }
                          },
                   authRegform: { auth_reg_emailMobile_emailFldEdit:false,
                                  auth_reg_emailMobile_emailVerifyBtn:true,
                                  auth_reg_emailMobile_emailChangeBtn:false,
                                  auth_reg_emailMobile_emailOTPForm: false,
                                  auth_reg_emailMobile_mobCodeFldEdit:false,
                                  auth_reg_emailMobile_mobileFldEdit:false,
                                  auth_reg_emailMobile_mobileVerifyBtn: true,
                                  auth_reg_emailMobile_mobileChangeBtn: false,
                                  auth_reg_emailMobile_mobileOTPForm: false
                                 }, 
                   badges:[{menu:'badge-auth-reg-emailMobile', 
                            content:'content-auth-reg-emailMobile', isActive:true },
                           {menu:'badge-auth-reg-genInfo', 
                            content:'content-auth-reg-genInfo', isActive:false },
                           {menu:'badge-auth-reg-setPassword', 
                            content:'content-auth-reg-setPassword', isActive:false},
                           {menu:'badge-auth-reg-securityQ',
                            content:'content-auth-reg-securityQ', isActive:false}]
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

  authRegEmailMobile_verify_emailAddress(){
    let authRegform = this.state.authRegform;
        authRegform.auth_reg_emailMobile_emailFldEdit = true;
        authRegform.auth_reg_emailMobile_emailVerifyBtn = false;
        authRegform.auth_reg_emailMobile_emailChangeBtn = true;
        authRegform.auth_reg_emailMobile_emailOTPForm = true;
    this.setState({ authRegform });
    bootstrap_formField_trigger('success','auth-reg-emailMobile-emailAddress');
  }

  authRegEmailMobile_verify_mobileNumber(){
    let authRegform = this.state.authRegform;
        authRegform.auth_reg_emailMobile_mobCodeFldEdit = true;
        authRegform.auth_reg_emailMobile_mobileFldEdit = true;
        authRegform.auth_reg_emailMobile_mobileVerifyBtn = false;
        authRegform.auth_reg_emailMobile_mobileChangeBtn = true;
        authRegform.auth_reg_emailMobile_mobileOTPForm = true;
    this.setState({ authRegform });
  }

  authRegEmailMobile_viewField_emailAddress(){
    return (<div className="form-group">
    <label>Email Address <span>Required</span></label>
    <div className="input-group">
      <input id="auth-reg-emailMobile-emailAddress" className="form-control" placeholder="Enter Email Address" 
            style={this.state.style.formElement} 
            disabled={this.state.authRegform.auth_reg_emailMobile_emailFldEdit} />
      <div className="input-group-btn">
        {this.state.authRegform.auth_reg_emailMobile_emailVerifyBtn && (
        <button className="btn btn-primary-o" 
          onClick={()=>this.authRegEmailMobile_verify_emailAddress()}>
          <b>Verify</b></button>
        )}
        {this.state.authRegform.auth_reg_emailMobile_emailChangeBtn && (
        <button className="btn btn-primary-o">
          <b>Change</b></button>
        )}
      </div>
    </div>
  </div>);
  }

  authRegEmailMobile_viewField_emailOTPForm(){
    return (<div>
      {this.state.authRegform.auth_reg_emailMobile_emailOTPForm && (
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
        
      <div className="alert alert-info alert-dismissible">
        <a href="#" className="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Alert Message !</strong><br/>
         An Email with OTP Code is sent to your Email Address. Please check it and 
         Enter that OTP Code in the given below field:
      </div>

      <div className="form-group">
        <label>OTP Code<span>Required</span></label>
        <div className="input-group">
          <input className="form-control" placeholder="Enter OTP Code" 
                style={this.state.style.formElement} />
          <div className="input-group-btn">
            <button className="btn btn-primary" style={this.state.style.formElement}>
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
   <label>Mobile Number <span>Required</span></label>
   <div className="input-group">
     <div className="input-group-btn">
       <div className="dropdown">
         <button className="btn btn-default dropdown-toggle bordRad0" 
                   style={this.state.style.formElement} 
                   disabled={this.state.authRegform.auth_reg_emailMobile_mobCodeFldEdit}
                    type="button" data-toggle="dropdown">+91 &nbsp;
                   <span className="caret"></span></button>
                   <ul className="dropdown-menu">
                       <li><a href="#">+91</a></li>
                   </ul>
               </div>
           </div>
           <input id="auth-reg-genInfo-mobile" className="form-control" 
           placeholder="Enter Mobile Number" style={this.state.style.formElement}
              disabled={this.state.authRegform.auth_reg_emailMobile_mobileFldEdit}
               onkeypress="javascript:return core_validate_allowOnlyNumeric(event);"/>
           <div className="input-group-btn">
             {this.state.authRegform.auth_reg_emailMobile_mobileVerifyBtn && (
               <button className="btn btn-primary-o" style={this.state.style.formElement}
               onClick={()=>this.authRegEmailMobile_verify_mobileNumber()}>
                 <b>Verify</b></button>
             )}
             {this.state.authRegform.auth_reg_emailMobile_mobileChangeBtn && (
               <button className="btn btn-primary-o" style={this.state.style.formElement}>
                 <b>Change</b></button>
             )}
           </div>
      </div>
    </div>);
  }
  
  authRegEmailMobile_viewField_mobileOTPForm(){
    return (<div>
      {this.state.authRegform.auth_reg_emailMobile_mobileOTPForm && (
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
        <label>OTP Code<span>Required</span></label>
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
             onClick={()=>this.sel_BadgeMenu('badge-auth-reg-genInfo')}><b>Next</b></button>
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
    return (<div className="container-fluid mtop15p" style={this.state.style.form}>
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