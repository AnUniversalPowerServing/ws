<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pickles - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<style>
.modal-header { background-color:#2196f3;color:#fff; }
</style>
<script type="text/javascript">
$(document).ready(function(){
 $('#pickles-home').addClass('active');
});
function submit_addToCart(id){
  $("#addToCartModal").modal({backdrop: "static"});
}
</script>
</head>
<body>

<!-- Add To Cart Modal ::: START -->
<div id="addToCartModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add LEMON PICKLE to Cart</h4>
      </div>
      <div class="modal-body">
        <!-- -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
             <!-- -->
              <div class="form-group">
                <label>Select your Order</label>
                <select class="form-control">
                  <option value="">Select Bottles</option>
                  <option value="1">1 Bottle</option>
                  <option value="2">2 Bottles</option>
                  <option value="3">3 Bottles</option>
                  <option value="4">4 Bottles</option>
                  <option value="5">5 Bottles</option>
                </select>
              </div>
              <div class="form-group">
                <label>Total Price</label>
                <input type="text" class="form-control" placeholder="Your Total Order Price" readonly/>
              </div>
              <div class="form-group">
                <button class="form-control btn btn-success">Add to Cart</button>
              </div>
             <!-- -->
            </div><!--/.col-sm-6 -->
            <div class="col-sm-6">
              <!-- Item Info ::: START  -->
              <div class="table-responsive">
               <table class="table">
                <thead>
                  <tr style="background-color:#607d8b;color:#fff;"><th>Specification</th><th>Information</th></tr>
                </thead>
                <tbody>
                 <tr><td>Quantity</th><th>100 gms / bottle</th></tr>
                 <tr><td>Pieces</th><th>8</th></tr>
                 <tr><td>Price</th><th>Rs. 40</th></tr>
                </tbody>
               </table>
              </div><!--/.table-responsive -->
              <!-- Item Info ::: END  -->
            </div><!--/.col-sm-6 -->
          </div><!--/.row -->
        </div><!--/.container-fluid -->
        <!-- -->
      </div><!--/.modal-body -->
    </div><!--/.modal-content -->
  </div><!--/.modal-dialog -->
</div><!--/#addToCartModal -->
<!-- Add To Cart Modal ::: END -->

<?php include_once 'templates/header.php'; ?>

<div class="container-fluid">
 <div class="row">

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/01-lemon-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>LEMON PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(1);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div><!--/.img-hover-zoom -->
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/02-raw-mango-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>RAW MANGO PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(2);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div><!--/.img-hover-zoom -->
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/03-carrot-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>CARROT PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(3);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div><!--/.img-hover-zoom -->
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/04-onion-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>ONION PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(4);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/05-tomato-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>TOMATO PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(5);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/06-indian-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>INDIAN PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(6);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/07-cucumber-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>CUCUMBER PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(7);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/08-garlic-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>GARLIC PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(8);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/09-green-chilli-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>GREEN CHILLI PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(9);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/10-radish-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>RADISH PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(10);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/11-bitter-gourd-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>BITTER GOURD PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(11);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/12-red-chilli-sweet-potato.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>RED CHILLI SWEET POTATO PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(12);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/13-beetroot-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>BEETROOT PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(13);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/14-capsicum-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>CAPSICUM PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(14);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/15-amla-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>AMLA PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(15);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/16-cabbage-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>CABBAGE PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(16);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/17-okra-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>OKRA PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(17);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/18-cauliflower-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>CAULIFLOWER PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(18);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/19-meat-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>MEAT PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(19);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

  <div class="col-sm-4 pad0">
   <div class="img-hover-zoom">
    <img src="<?php echo $PROJECT_URL; ?>/img/pickles/20-fish-pickle.png"/>
    <div class="overlay">
      <div class="overlay-text pad10p">
        <div class="row">
          <div class="col-sm-8"><h4>FISH PICKLE</h4></div>
          <div class="col-sm-4"><div class="btn btn-success pull-right" onclick="javascript:submit_addToCart(20);"><b>Add to Cart</b></div></div>
        </div>
      </div><!--/.overlay-text -->
    </div><!--/.overlay -->
   </div>
  </div><!--/.col-sm-4 -->

 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>