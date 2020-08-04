class ContentMenu extends React.Component {
 ui_subContentMenu(subContentMenu){
  let html = [];
  let selectSubMenuId = this.props.selectSubMenuId;
  for(var subContentIndex in subContentMenu){
     let subContent = subContentMenu[subContentIndex];
     let subMenuId = subContent.id;
     let subLabel = subContent.label;
     let subUrl = PROJECT_URL+'/'+subContent.url;
     console.log("subMenuId: "+subMenuId);
     console.log("selectSubMenuId: "+selectSubMenuId);
     if(selectSubMenuId === subMenuId){
        html.push(<li id={subMenuId} class="font-red fw550">
                     <h5><a class="font-red fw550" href={subUrl}>{subLabel}</a></h5>
                  </li>);
     } else {
        html.push(<li id={subMenuId} class="font-navyBlue fw550">
                     <h5><a class="font-navyBlue fw550" href={subUrl}>{subLabel}</a></h5>
                  </li>);
     }
     
  }
  return html;
 }
 ui_contentMenu(){
    let html = [];
    let contentMenu = this.props.data.contentMenu;
    let selectMenuId = this.props.selectMenuId;
    let index = 1;
    for(var contentIndex in contentMenu){
      let content = contentMenu[contentIndex];
      let menuId = content.id;
      let label = content.label;
      let url = PROJECT_URL+'/'+content.url;
      let subContentMenu = content.subContentMenu;
        html.push(
            <div>
            <div className="list-group-item padtopbot0 bg-hlgtGrey borderBot2p-primary" 
                   data-toggle="collapse" data-target={('#'+menuId)}>
                <h5>
                  <a class="font-purple" href={url}><b>{index+'. '+label}</b></a>
                  <i className="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
                </h5>
              </div>
              
              <div id={menuId} class={(selectMenuId !== menuId) ? 'collapse':''}>
              <div className="list-group-item padtopbot0 collapse">
                <ol className="padInlineStart20p">
                {this.ui_subContentMenu(subContentMenu)}
                </ol>
              </div>
              </div>
              </div>
          );
        index++;
    }
    return html;
 }

 render(){
  return (<div className="list-group">
  {this.ui_contentMenu()}
  </div>);
 }
}