
let select = ["telugu","height in cms","hindin abc. cmj","telugu","height in cms","hindin abc. cmj","telugu","height in cms","hindin abc. cmj"];

class Dropdown extends React.Component {

 constructor(props) {
  super(props);
  this.state = { callBack:{ dropDown :{ id: this.props.id, 
                                        value: 'Dropdown Example', 
                                        isValid: false, 
                                        msg: '' }
                     }
              };
 }

 setDropdownValue(option){
  let optionValue = option.toUpperCase().split(' ').join('_');
  let callBack = this.state.callBack;
      callBack.dropDown.value = option;
  this.setState({ callBack });
 }

 ui_buildOptions(){
  let options = [];
  for(let index=0;index<select.length;index++){
    let option = select[index];
    if(index<5){
      options.push(<li onClick={()=>{this.setDropdownValue(option)}}><a href="#">{option}</a></li>);
    } else {
      options.push(<li onClick={()=>{}}><a href="#">View All Options</a></li>);
      break;
    }
  }
  return (<ul className="dropdown-menu">
    <li><div className="form-group mleft5p">
         <div className="input-group">
          <input type="text" className="form-control" placeholder="Enter your Search here..." />
          <div className="input-group-btn">
            <button className="btn btn-primary"><i className="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </li>
    <li class="divider"></li>
    {options}
  </ul>);
 }

 render(){
  return (<div className="dropdown">
            <button align="left" className="btn btn-default form-control dropdown-toggle" 
            type="button" data-toggle="dropdown">{this.state.callBack.dropDown.value}
                        &nbsp;&nbsp;<span className="caret"></span>
            </button>
            {this.ui_buildOptions()}
          </div>);
 }
}