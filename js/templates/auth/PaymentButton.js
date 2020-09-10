/***
 * ==========
 * STEP#1:
 * ==========
 * <!-- Payment Gateway Plugin ::: START -->
 * <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 * <script src="<?php echo $PROJECT_URL; ?>/js/templates/auth/paymentButton.js"></script>
 * <!-- Payment Gateway Plugin ::: END -->
 * ==========
 * STEP#2:
 * ==========
 * a) Set Global Variable :
 *      payTransaction = { customerId:0, purchaseId:0, purchaseDesc:'', amount:5000, orderId:0 };
 * b) and Initiate :
 *      paymentButton.display();
 */
class PaymentButton {

 customerPaymentResponse= function(response) { 
    let paymentId = response.razorpay_payment_id;
    console.log("paymentId: "+paymentId);
    console.log("customerId: "+payTransaction.customerId);
    console.log("purchaseId: "+payTransaction.purchaseId);
    console.log("purchaseDesc: "+payTransaction.purchaseDesc);
    console.log("amount_in_rupee: "+payTransaction.amount/100); 
    console.log("orderId: "+payTransaction.orderId);
    // call service that saves in Database
    // OrderRefId - which Db product is related
   };

 init_payForm(event){
  let options = {"key": "rzp_test_OlD7lWzFJSXHSd",
                 "amount": payTransaction.amount, // in paisa (Rs.5 mention as 500)
                 "name": PROJECT_NAME,
                 "description": payTransaction.purchaseDesc,
                 "image": PROJECT_PAYLOGO,
                 "handler": this.customerPaymentResponse,
                 "prefill": { "name": "",
                              "email": ""
                            },
                 "notes": { "address": "" },
                 "theme": { "color": "#F37254" } };
  let razorPayForm = new Razorpay(options);
      razorPayForm.open();
        event.preventDefault();
       }

 display(){
   let content='<div>';
       content+='<button id="rzp-button1" className="btn btn-default" ';
       content+='onClick="javascript:paymentButton.init_payForm(event);">Make a Payment</button>';
       content+='</div>';
   return content;
 }
}

var payTransaction; // This contains Transaction Details
var paymentButton= new PaymentButton(); // This is used to trigger on Button Click