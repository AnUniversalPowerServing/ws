
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
  {select.map((option)=>{
    return (<li onClick={()=>{this.setDropdownValue(option)}}><a href="#">{option}</a></li>);
  })}
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