class AuthRegister extends React.Component {
  render(){
    return (<div className="container-fluid mtop15p">
      <div className="row">
          <div className="col-sm-4">

            <div className="form-group">
              <label>Surname <span>Required</span></label>
              <input className="form-control" placeholder="Enter Surname" />
            </div>

            <div className="form-group">
              <label>Name <span>Required</span></label>
              <input className="form-control" placeholder="Enter Name" />
            </div>
            
            <div className="form-group">
              <label>Gender <span>Required</span></label>
              <select className="form-control">
                <option value="">Select Gender</option>
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
              </select>
            </div>

            <div className="form-group">
              <label>Email Address <span>Required</span></label>
              <input className="form-control" placeholder="Enter Email Address" />
            </div>

            <div className="form-group">
              <label>Mobile Number <span>Required</span></label>
              <div className="input-group">
                <div className="input-group-btn">
                    <div className="dropdown">
                        <button className="btn btn-default dropdown-toggle bordRad0" 
                         type="button" data-toggle="dropdown">+91
                        <span className="caret"></span></button>
                        <ul className="dropdown-menu">
                            <li><a href="#">+91</a></li>
                        </ul>
                    </div>
                </div>
                <input id="auth-reg-genInfo-mobile" className="form-control" 
                placeholder="Enter Mobile Number" 
                    onkeypress="javascript:return core_validate_allowOnlyNumeric(event);"/>
                <div className="input-group-btn">
                    <button id="auth-reg-genInfo-mobile-verifyBtn" className="btn btn-default hide-block" onclick="javascript:submit_auth_reg_verifyMobile();"><b>Verify</b></button>
                    <button id="auth-reg-genInfo-mobile-changeBtn" className="btn btn-default hide-block" onclick="javascript:submit_auth_reg_changeMobile();"><b>Change</b></button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <button className="btn btn-default form-control"><b>Next</b></button>
              </div>
              <div class="col-sm-6">
                <button className="btn btn-default form-control"><b>Reset</b></button>
              </div>
            </div>

          </div>
      </div>
    </div>);
  }
}