class CodeBase extends React.Component {
  constructor(props) {
    super(props);
    this.state = { data:{
                         "form":{"name":"authRegister",
                                 "data": [{ "title":"Page#1",
                                            "elements":[{ "field":FORM_INPUT_NAME, isRequired:true }, 
                                                        { "field":FORM_INPUT_EMAIL, isRequired:true, validateUrl:'http://localhost/ws/php/test.php' },
                                                        { "field": FORM_INPUT_MOBILE, isRequired:true, validateUrl:'http://localhost/ws/php/test.php' } ]},
                                          { "title":"Page#2",
                                            "elements":[{ "field":FORM_VALIDATE_EMAIL,  isRequired:true }, 
                                                        {  "field":FORM_VALIDATE_MOBILE, isRequired:false }]},
                                          { "title":"Page#3",
                                            "elements":[{  "field":FORM_INPUT_SQ,  isRequired:true }]}
                                        ]}
                        }
                 };
  }
  render(){
    return (<Trigger form={this.state.data}/>);
  }
}