class CodeBase extends React.Component {
  constructor(props) {
    super(props);
    this.state = { data:{
                         "form":{"name":"authRegister",
                                 "data": [{ "title":"Page#1",
                                            "elements":[{ "field":FORM_INPUT_NAME, 
                                                          "label":"Name",
                                                          "id":"name1",
                                                          isRequired:true }, 
                                                        { "field":FORM_INPUT_EMAIL, 
                                                          "label":"Enter Email Address",
                                                          "id":"email1",
                                                          isRequired:true, 
                                                          validateUrl:PROJECT_URL+'/php/test.php', 
                                                          purpose:'Register' },
                                                        { "field":FORM_INPUT_EMAIL, 
                                                          "id":"email2",
                                                          "label":"Email Address",
                                                          isRequired:true, 
                                                          validateUrl:PROJECT_URL+'/php/test.php', 
                                                          purpose:'Register' },
                                                        { "field": FORM_INPUT_MOBILE, 
                                                          "id":"mobCodeId|mobileId",
                                                          "label":"Enter Mobile Number",
                                                          isRequired:true, 
                                                          validateUrl:PROJECT_URL+'/php/test.php', 
                                                          purpose:'Register' } ]},
                                          { "title":"Page#2",
                                            "elements":[{ "id":"authRegister_validateEmail_1","field":FORM_VALIDATE_EMAIL,  isRequired:true }, 
                                                        {  "id":"authRegister_validateMobile_1","field":FORM_VALIDATE_MOBILE, isRequired:false }]},
                                          { "title":"Page#3",
                                            "elements":[{  "id":"authRegister_sQ","field":FORM_INPUT_SQ,  isRequired:true }]}
                                        ]}
                        }
                 };
  }
  render(){
    return (<Trigger form={this.state.data}/>);
  }
}