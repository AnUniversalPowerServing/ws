class ProductItems extends React.Component {
 constructor(props) {
  super(props);
  this.state = { 
    productItems: this.props.productItems,
    cartProductItems: this.props.cartProductItems,
    productItemId:-1,
    productItem: {}
  };
 }

 calculate_productOrder = (event) => {
  console.log(event.target.value);
 }

 viewProductInfo(productItemId, productItem){
  console.log(productItemId);
  console.log(productItem);
  this.setState({ productItemId, productItem });
    $("#addToCartModal").modal({backdrop: "static"});
 }
  
  ui_itemMenu(data){
    let cartProductItems = this.state.cartProductItems;
    let html = [];
      for(var index in data){
        let productItemId = index;
        let productItem = data[index];
        let imgURL = PROJECT_URL+'/'+productItem.img;
        html.push(
          <div className="col-sm-4 pad0">
              <div className="img-hover-zoom">
                <img src={imgURL}/>
                <div style={{position:'absolute',top:10,left:10}}>
                  {(cartProductItems[productItemId]!==undefined) && (
                    <span className="label label-success">
                      <i class="fa fa-check-circle"></i> Added to Cart
                    </span>
                  )}
                </div>
                <div className="overlay">
                  <div className="overlay-text pad10p">
                    <div>
                      <div className="col-sm-12"><h4>{productItem.name}</h4></div>
                    </div>
                    <div>
                      <div className="col-sm-12">
                        <button className="btn btn-primary pull-right" 
                            onClick={() => this.viewProductInfo(productItemId, productItem)}>
                              <b>View Info</b>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            );
      }
      return html;
    }

    ui_viewItemInfoModal(){
      let productItemId = this.state.productItemId;
      let productItem = this.state.productItem;
      let cartProductItems = this.state.cartProductItems;
      return (<div id="addToCartModal" className="modal fade" role="dialog">
               <div className="modal-dialog">
                <div className="modal-content">
                 <div className="modal-header modal-header-skyBlue">
                  <button type="button" className="close" data-dismiss="modal">&times;</button>
                  <h4 className="modal-title">
                    {productItem.name} Info &nbsp;
                    {(cartProductItems[productItemId]!==undefined) && (
                      <span className="label fs11 fw550 label-skyBlue">
                        <i class="fa fa-check-circle"></i> <b>Added to Cart</b>
                      </span>
                    )}
                  </h4>
                 </div>
                 <div className="modal-body">
                  <div className="container-fluid">
                  <div className="row">
                    <div className="col-sm-6">
                      
                    </div>
                   </div>
                   <div className="row mtop15p">
                    <div className="col-sm-6">
                     <div className="table-responsive">
                      <table className="table">
                        <thead>
                         <tr style={{backgroundColor:"#607d8b",color:"#fff"}}>
                          <th>Specification</th>
                          <th>Per {productItem.saleQuantity}</th>
                         </tr>
                        </thead>
                        <tbody>
                            {(productItem.specifications!==undefined) &&
                                productItem.specifications.map(item =>{
                                return (<tr><td>{item.key}</td><td>{item.value}</td></tr>);
                            })}
                        </tbody>
                       </table>
                      </div>
                    <div>
                    <h4><b>Price / {productItem.saleQuantity}:</b>&nbsp;
                        {productItem.saleCurrencySymbol}.&nbsp;{productItem.salePrice}</h4>
                   </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="form-group">
                      <label>Select your Order</label>
                      <select className="form-control" onChange={this.calculate_productOrder}>
                        <option value="">Select Bottles</option>
                        <option value="1">1 Bottle</option>
                        <option value="2">2 Bottles</option>
                        <option value="3">3 Bottles</option>
                        <option value="4">4 Bottles</option>
                        <option value="5">5 Bottles</option>
                      </select>
                    </div>
                    <div className="form-group">
                      <label>Total Price</label>
                      <input type="text" className="form-control" placeholder="Your Total Order Price" readonly/>
                    </div>
                    <div className="form-group">
                    {(cartProductItems[productItemId]===undefined) ? (
                      <button className="form-control btn btn-success"
                      onClick={() => this.props.addToCart(productItemId, productItem)}>
                        <b>Add to Cart</b>
                      </button>)
                      : (
                        <div className="btn-group">
                        <button className="btn btn-xs btn-primary"
                        onClick={() =>{} }>
                        <b>Edit Your purchase</b>
                        </button>
                        <button className="btn btn-xs btn-danger"
                        onClick={() =>{} }>
                        <b>Remove from Cart</b>
                        </button>
                      </div>
                      )}
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>);
        }

    render() {
      let productItems = this.state.productItems;
      return (
        <div>
          <div className="container-fluid">
            <div className="row">{this.ui_itemMenu(productItems)}</div>
          </div>
          <div>{this.ui_viewItemInfoModal()}</div>
        </div>
      );
    }
  }