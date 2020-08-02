class DefaultPage extends React.Component {
  constructor(props) {
    super(props);
    this.state = {  
      appHeaderMenu: appMenu, // Project Header Menu
      appHeaderMenu_cartId:'pickles-myCart', // Used for Cart List Count
      allProductItems:kitchenMenu, // Products list
      cartProductItems:{},
      productItem:{} // Selected product
    };
    this.submit_addToCart = this.submit_addToCart.bind(this);
  }

  submit_addToCart(productItemId, productItem){
  /***
   *  The Product Items selected gets added to cart
   */
    let appHeaderMenu = this.state.appHeaderMenu; // Project Header Menu
    let appHeaderMenu_cartId = this.state.appHeaderMenu_cartId; // Cart Id

    let cartCount = parseInt(appHeaderMenu[appHeaderMenu_cartId].value)+1; // Increase Cart count 
    appHeaderMenu[appHeaderMenu_cartId].value = cartCount;

    let cartProductItems = this.state.cartProductItems;
        cartProductItems[productItemId] = productItem;

    this.setState({ appHeaderMenu, cartProductItems });

    set_localStorage("lastname", JSON.stringify(cartProductItems));

    $("#addToCartModal").modal('hide');
    
   }

  render(){
    return (<div>    
      <AppHeader menu={this.state.appHeaderMenu} active="pickles-home" />
      <ProductItems productItems={this.state.allProductItems}
                    cartProductItems={this.state.cartProductItems} 
                    addToCart={this.submit_addToCart} />
    </div>);
    
  }
}


ReactDOM.render(<DefaultPage />, document.getElementById('root'));
