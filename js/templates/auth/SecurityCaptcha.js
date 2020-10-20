class SecurityCaptcha {
    
 init(){
  let captcha1 = new Captcha($('#securityCaptcha1'),{ length: 4 });
  this.captcha1Code = captcha1.getCode();
  let captcha2 = new Captcha($('#securityCaptcha2'),{ length: 4 });
  this.captcha2Code = captcha2.getCode();
 }

 display(){
    return ('<div class="form-group mtop15p">'+
            '<label>Security Captcha</label>'+
            '<div>'+
            '<canvas id="securityCaptcha1"></canvas>'+
            '<canvas id="securityCaptcha2"></canvas>&nbsp;&nbsp;'+
            '<button class="btn btn-default" >'+
            '<i class="fa fa-refresh" aria-hidden="true"></i>'+
            '</button>'+
            '</div>'+
            '</div>'+
            '<div class="form-group mtop15p">'+
            '<input class="form-control" placeholder="Type the text displayed above" />'+
            '</div>');
 }
}