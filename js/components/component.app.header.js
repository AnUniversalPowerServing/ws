class AppHeader extends React.Component {

  constructor(props) {
   super(props);
   this.state = { 
    menu : this.props.menu
        
   };
  }

  subHeaderMenu(subMenu){
    let html = [];  
    for(var subMenuIndex in subMenu){
      let label = subMenu[subMenuIndex].label;
      let url = subMenu[subMenuIndex].url;
      html.push(<li><a href={url}>{label}</a></li>);
    }
    return html;
  }

  headerMenu(){
    let html =[];
    let productItem = this.props.menu;
    for(var index in productItem){
        let id = index;
        let label = productItem[index].label;
        let url = PROJECT_URL+'/'+productItem[index].url;
        let value = productItem[index].value;
        let valueType = productItem[index].valueType;
        let subMenu =  productItem[index].menu;
        let info = []; 
        info.push (<a href={url}><b>{label}&nbsp;
        
        {(value !== undefined) && 
         (valueType !== undefined && valueType==='bracket') && (`(${value})`)}

         {(value !== undefined) && 
         (valueType !== undefined && valueType==='badge') && 
         (<span className="badge">{value}</span>)}

        {(value !== undefined) && 
         (valueType !== undefined && valueType==='label') && 
         (<span className="label label-danger">{value}</span>)}

        </b></a>);

if((typeof subMenu === 'object')){
  if(id===this.props.active){
    html.push(<li className="dropdown active">
              <a className="dropdown-toggle" data-toggle="dropdown" href="#">{info}
              &nbsp;<span className="caret"></span></a>
              <ul className="dropdown-menu">{this.subHeaderMenu(subMenu)}</ul>
            </li>);
  } else {
    html.push(<li className="dropdown">
              <a className="dropdown-toggle" data-toggle="dropdown" href="#">{info}
              <span className="caret"></span></a>
              <ul className="dropdown-menu">{this.subHeaderMenu(subMenu)}</ul>
            </li>);
  }
} else {
  if(id===this.props.active){
    html.push(<li id={id} className="active">{info}</li>);
  } else {
      html.push(<li id={id}>{info}</li>);
  }
}

       
        }
        return html;
    }

    appHeader(){
      return (
        <nav className="navbar navbar-default">
        <div className="container-fluid">
         <div className="navbar-header">
          <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span className="icon-bar"></span>
            <span className="icon-bar"></span>
            <span className="icon-bar"></span>
          </button>
          <a className="navbar-brand" href="#" style={{fontFamily:"thirdDegree",fontSize:"32px",letterSpacing:"1px"}}>
      <span className="font-red"><b>{this.props.title}</b></span>
          </a>
         </div>
         <div className="collapse navbar-collapse" id="myNavbar">
          <ul className="nav navbar-nav">
            {this.headerMenu()}
          </ul>
          </div>
         </div>
        </nav>);
    }

    render (){
       return (<div>{this.appHeader()}</div>); 
    }
}