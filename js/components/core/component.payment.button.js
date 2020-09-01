var rzrpy_customerId = 0;
var rzrpy_purchaseId = 0;
var rzrpy_purchaseDesc = "";
var rzrpy_amount_in_paisa = 0;
var rzrpy_amount_in_rupee = 0;
var rzrpy_orderId = 0;

class PaymentButton extends React.Component {
 constructor(props) {
  super(props);
  rzrpy_customerId = this.props.customerId;
  rzrpy_purchaseId = this.props.purchaseId;
  rzrpy_purchaseDesc = this.props.purchaseDesc;
  rzrpy_amount_in_paisa = this.props.amount;
  rzrpy_amount_in_rupee = amount_in_paisa/100;
  rzrpy_orderId = this.props.orderId;
  this.state = {  paymentTrackService: "", // it will store complete Project Payment info
                  options:{"key": "rzp_test_smHMQSdt5KOYRk",
                          "amount": this.props.amount, // in paisa (Rs.5 mention as 500)
                          "name": PROJECT_NAME,
                          "description": purchaseDesc,
                          "image": PROJECT_PAYLOGO,
                          "handler": this.customerPaymentResponse,
                          "prefill": {
                            "name": "",
                            "email": ""
                           },
                          "notes": {
                            "address": ""
                          },
                          "theme": {
                            "color": "#F37254"
                            }
                        } 
                };
 }

 init_payForm(event){
  let razorPayForm = new Razorpay(this.state.options);
  razorPayForm.open();
  event.preventDefault();
 }

 customerPaymentResponse= function(response) { 
  let paymentId = response.razorpay_payment_id;
  console.log("paymentId: "+paymentId);
  console.log("customerId: "+rzrpy_customerId);
  console.log("purchaseId: "+rzrpy_purchaseId);
  console.log("purchaseDesc: "+rzrpy_purchaseDesc);
  console.log("amount_in_rupee: "+rzrpy_amount_in_rupee); 
  console.log("orderId": "+rzrpy_orderId);
  // call service that saves in Database
  // OrderRefId - which Db product is related
 };

 render(){
  return (<div>
            <button id="rzp-button1" className="btn btn-skyBlue-o" 
            onClick={(event)=>{ this.init_payForm(event); }}>Make a Payment</button>
            
          </div>);
 }
}