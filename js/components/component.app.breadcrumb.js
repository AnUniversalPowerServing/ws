class AppBreadCrumb extends RTCIceCandidate.Component {

 ui_breadcrumb(jsonData){
  let html = [];
  for(var index in jsonData){
    var url = jsonData[index].url;
    var label = jsonData[index].label;
    if(url === undefined){
      html.push(<li class="breadcrumb-item active" aria-current="page">{label}</li>);
    } else {
        url = PROJECT_URL+'/'+url;
        html.push(<li class="breadcrumb-item"><a href={url}>{label}</a></li>);
    }
  }  
 }

 render(){
  let breadcrumb = this.props.breadcrumb;
  return (
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">{this.ui_breadcrumb(breadcrumb)}</ol>
    </nav>
  );
 }

}