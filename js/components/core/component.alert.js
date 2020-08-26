class Alert extends React.Component {
 constructor(props) {
    super(props);
    this.state = { };
 }

 render(){
  let alertType = 'alert alert-'+this.props.alertType+' alert-dismissible';
  return (<div class={alertType}>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Alert Message !</strong><br/>
            <div dangerouslySetInnerHTML={{__html: this.props.alertMsg}} />
          </div>);
 }
}