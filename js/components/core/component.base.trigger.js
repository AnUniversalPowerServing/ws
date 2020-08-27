

class Trigger extends React.Component {
 constructor(props) {
  super(props);
  this.state = { info: this.props.form };
 }

 sel_BadgeMenu(index, size){
  for(let i=0;i<size;i++){
    if(i === index) {
        if($('#content'+i).hasClass('hide-block')){
            $('#content'+i).removeClass('hide-block');
        }
    } else {
        if(!$('#content'+i).hasClass('hide-block')){
            $('#content'+i).addClass('hide-block');
        }
    }
  }
 }

 ui_viewBadgeMenu(){
  let badgeMenu = []; // Build Form
  let badgeContent = [];
  let info = this.state.info;
  let formData = info.form.data;
  let size = formData.length;
  if(size>0){
    formData.map((arry, index)=>{
        badgeMenu.push((size > 1)?(<div align="center" className="col-xs-3">
                                     <span id={'menu'+index} 
                                           className="badge"
                                           onClick={(event)=>this.sel_BadgeMenu(index, size)}>
                                        {index+1}
                                     </span>
                                   </div>):'');
        let elements = arry.elements; 
        console.log(elements);
        badgeContent.push((index > 0)?
        <div id={'content'+index} className="hide-block">{this.ui_elements(elements)}</div>:
        <div id={'content'+index}>{this.ui_elements(elements)}</div>);  
    });
  }
  return { menu: badgeMenu, content:badgeContent };
 }

 ui_emailAddress(element){
    let formName = this.state.info.form.name;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    return (<EmailAddress id={formName+'_emailAddress'} 
                    isRequired={isRequired}
                    validateUrl={validateUrl} 
                    isFormValid={this.isValid_emailAddress} />);
 }

 ui_mobile(element){
    let formName = this.state.info.form.name;
    let isRequired = element.isRequired;
    let validateUrl= element.validateUrl;
    return (<Mobile mobCodeId={formName+'_mobCode'}
                    mobileId={formName+'_mobile'} 
                    isRequired={isRequired}
                    validateUrl={validateUrl}
                    isMobileFormValid={this.isValid_mobile}
                    isMobCodeFormValid={this.isValid_mobCode} />);
 }

 ui_elements(elements){
  let html = [];
  elements.map((element)=>{
      console.log(element);
    let field = element.field;
    let isRequired = element.isRequired;
    switch(field){
    case FORM_INPUT_NAME: { html.push(<div>Name {(isRequired) && '(Required)'}</div>);break; }
      case FORM_INPUT_EMAIL: { html.push(this.ui_emailAddress(element));break; }
      case FORM_INPUT_MOBILE: { html.push(this.ui_mobile(element));break; }
      case FORM_VALIDATE_EMAIL: { html.push(<div>Validate Email {(isRequired) && '(Required)'}</div>);break; }
      case FORM_VALIDATE_MOBILE: { html.push(<div>Validate Mobile {(isRequired) && '(Required)'}</div>);break; }
      case FORM_INPUT_SQ: { html.push(<div>SQ {(isRequired) && '(Required)'}</div>);break; }
    }
  });
  console.log();
  return html;
 }

 render(){
    let badge = this.ui_viewBadgeMenu();
    return (<div>
              <div className="container-fluid">{badge.menu}</div>
              <div>{badge.content}</div>
            </div>);
 }
 
}