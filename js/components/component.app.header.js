class AppHeader extends React.Component {

  constructor(props) {
   super(props);
   this.state = { 
    menu : this.props.menu
        
   };
  }

  headerMenu(){
    let html =[];
    let productItem = this.props.menu;
    for(var index in productItem){
        let id = index;
        let label = productItem[index].label;
        let url = PROJECT_URL+'/'+productItem[index].url;
        let value = productItem[index].value;
        let info = []; 
        info.push (<a href={url}><b>{label}&nbsp;{(value !== undefined) && `(${value})`}</b></a>);
        if(id===this.props.active){
            html.push(<li id={id} className="active">{info}</li>);
        } else {
            html.push(<li id={id}>{info}</li>);
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
            <span className="font-red"><b>Native pickles</b></span>
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