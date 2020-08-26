class ValidateMobile extends React.Component {
 constructor(props) {
  super(props);
  this.state = { alert:{ view:false, type:'', msg:''},
                 fld_userOTPCode:'fld_mobile_userOTPCode', 
                 sysOTPCode:0, 
                 userOTPCode:'' 
               };
 }

 showAlert(type, msg){
    let alert = this.state.alert;
        alert.view = true;
        alert.type = type;
        alert.msg = msg;
    this.setState({ alert });
 }

 sendOTPCode(){
   /* let msg = 'An OTP Code is sent to your Mobile ';
        msg+='<b>'+this.props.mobCode+'-'+this.props.mobile+'</b>';
        msg+='. Please check it and Enter that OTP Code in the given below field:'
    this.showAlert('info', msg);
    if(this.state.sysOTPCode === 0){
      this.setState({ sysOTPCode:genRandomNumber(10000,99999) });
    }
  console.log("sysOTPCode: "+this.state.sysOTPCode); */
 }

 ComponentDidUpdate(prevProps, currentProps){
  console.log("send OTP Code");
 }

 validateOTPCode(){
  let formStatus = 'error';
  let alertType= 'danger';
  let msg = 'It\'s an invalid OTPCode. ';
      msg+= 'An OTP Code is sent to your Mobile ';
      msg+='<b>'+this.props.mobCode+'-'+this.props.mobile+'</b>';
      msg+='. Please check it and Enter that OTP Code in the given below field:'
  if(this.state.sysOTPCode.toString() === this.state.userOTPCode){
    formStatus = 'success';
    alertType = 'success';
    msg = 'Your Mobile <b>'+this.props.mobCode+'-'+this.props.mobile+'</b> got validated Successfully.';
  }  
  this.showAlert(alertType, msg);
  bootstrap_formField_trigger(formStatus, this.state.fld_userOTPCode);
 }

 render(){
  if(this.props.sendOTPCode && this.props.mobCode.length>0 && this.props.mobile.length>0){
    this.sendOTPCode();
  }
  return (<div className="list-group">
            <div className="list-group-item pad0 boxShadow borderRadTopRight5p borderRadBotRight5p borderRadBotLeft5p">
              <div>
                  <span className="label label-primary pad10p fs12 borderRadTopLeft0 borderRadBotLeft0">
                      Validate your Mobile !!!
                  </span>
              </div>
              <div className="container-fluid mtop15p">
                  <div className="row">
                    <div className="col-sm-12">
                    {this.state.alert.view &&  (
                     <Alert alertType={this.state.alert.type} 
                            alertMsg={this.state.alert.msg} />
                    )}
                        <div className="form-group">
                          <label className="label-skyBlue">OTP Code<span>Required</span></label>
                          <div className="input-group">
                              <input id={this.state.fld_userOTPCode} 
                                     className="form-control border1px-skyBlue" 
                                     placeholder="Enter OTP Code" 
                                     onChange={(event)=>{
                                       this.setState({ userOTPCode: event.target.value });
                                     }}/>
                              <div className="input-group-btn">
                                  <button className="btn bg-skyBlue" 
                                  onClick={()=>{
                                    this.validateOTPCode();
                                  }}><b>Validate</b></button>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>);
 }
}