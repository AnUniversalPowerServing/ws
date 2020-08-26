class SecurityCaptcha extends React.Component {
 constructor(props) {
  super(props);
  this.state = { fld_userSecurityCaptcha: this.props.id,
                 isUserCaptchaValid: false,
                 captcha1: undefined, 
                 captcha2: undefined, 
                 sysCaptchaCode:'',
                 userCaptchaCode:'',
                 style:{ width:'100px',height:'30px', pointerEvents:'none'}   };
 }

 isFormValid(event){
   let fld_userSecurityCaptcha = this.state.fld_userSecurityCaptcha;
   let isUserCaptchaValid = this.state.isUserCaptchaValid;
   let userCaptchaCode = event.target.value;
   let formStatus = 'error';
   let msg = "Please Enter Valid Security Captcha.";
   if(this.state.sysCaptchaCode === userCaptchaCode) {
      isUserCaptchaValid = true;
      formStatus = 'success';
      msg = '';
   }
   bootstrap_formField_trigger(formStatus,fld_userSecurityCaptcha);
   let callBack = { id:fld_userSecurityCaptcha, 
                    value: userCaptchaCode, 
                    isValid: isUserCaptchaValid, 
                    msg: msg };
   this.props.isFormValid(callBack);
 }

 refreshCaptcha(){
   this.state.captcha1.refresh();
   let captcha1Code =   this.state.captcha1.getCode();
   this.state.captcha2.refresh();
   let captcha2Code =   this.state.captcha2.getCode();
   this.setState({ sysCaptchaCode: captcha1Code+' '+captcha2Code });
 }

 componentDidMount() {
    let captcha1 = new Captcha($('#securityCaptcha1'),{ length: 4 });
    let captcha1Code =  captcha1.getCode();
    let captcha2 = new Captcha($('#securityCaptcha2'),{ length: 4 });
    let captcha2Code =  captcha2.getCode();
    this.setState({ captcha1, captcha2, sysCaptchaCode: captcha1Code+' '+captcha2Code });
 }

 render(){
   return (<div>
            <div  className="form-group mtop15p">
            <label>Security Captcha</label>
            <div>
            <canvas id="securityCaptcha1" style={this.state.style}></canvas>
            <canvas id="securityCaptcha2" style={this.state.style}></canvas>
            &nbsp;&nbsp;
            <button className="btn btn-default" onClick={()=>{
               this.refreshCaptcha();
            }}><i class="fa fa-refresh" aria-hidden="true"></i></button>
            </div>
            </div>
            <div  className="form-group mtop15p">
             <input id={this.state.fld_userSecurityCaptcha} className="form-control" 
             placeholder="Type the text displayed above" 
             onChange={(event)=>{ this.isFormValid(event); }}/>
            </div>
           </div>);
 }

}
