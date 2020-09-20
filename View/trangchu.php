<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMARTOSC GAME STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
a{
  text-decoration: none; 
  color : #fff;
}
.jumbotron {
  /*background-color: #f4511e;*/ /* Orange */
  background-image: url('images/banner-3.jpg');
  color: #ffffff;
  height: 400px;
  padding: 100px 25px;
}
.bg-grey {
  background-color: #f6f6f6;
}
.container-fluid {
  padding: 60px 50px;
}
.logo {
  font-size: 200px;
}
@media screen and (max-width: 768px) {
  .col-sm-4 {
    text-align: center;
    margin: 25px 0;
  }
}
.panel {
  border: 1px solid #f4511e;
  border-radius:0;
  transition: box-shadow 0.5s;
}

.panel:hover {
  box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}

.panel-footer .btn:hover {
  border: 1px solid #f4511e;
  background-color: #fff !important;
  color: #f4511e;
}

.panel-heading {
  color: #fff !important;
 /* background-color: #f4511e !important;*/
  padding: 25px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
  overflow: hidden;
}

.panel-footer {
  background-color: #fff !important;
}

.panel-footer h3 {
  font-size: 32px;
}

.panel-footer h4 {
  color: #aaa;
  font-size: 14px;
}

.panel-footer .btn {
  margin: 15px 0;
  background-color: #f4511e;
  color: #fff;
}
.imgindex {
  width: 100%;
  height: 300px;
}
.panel-default>.panel-heading{
  padding: 0px;
}
.panel-footer h3{
  margin:0;
}
.navbar {
  margin-bottom: 0;
  background-color: #f4511e;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #f4511e !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}
@import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
</style>
<body>

<!-- MENU -->
<?php include ROOT . "/View/subview/menu.php" ;?>

<div class="jumbotron text-center ">
  <h1>SMARTOSC GAME STORE</h1>
  <p>The biggest online Game store</p>
</div>
<div class="container-fluid">
  <div class="text-center">
    <h2>GAME</h2>
    <h4>Choose a game for you</h4>
  </div>
  <div class="row">
   <?php include ROOT . "/View/subview/$subview" ;?>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <h3 class="title2">Shopping Cart Details</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>

                <?php
                    if(!empty($_SESSION["cart"])){
                        $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value["item_name"]; ?></td>
                                <td><?php echo $value["item_quantity"]; ?></td>
                                <td>$ <?php echo $value["product_price"]; ?></td>
                                <td>
                                    $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                                <td><a href="index.php?controller=Game&action=cart&action2=delete&id=<?php echo $value["product_id"]; ?>"><span
                                            class="text-danger">Remove Item</span></a></td>

                            </tr>
                            <?php
                            $total = $total + ($value["item_quantity"] * $value["product_price"]);
                        }
                            ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <th align="right">$ <?php echo number_format($total, 2); ?></th>
                                <td></td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>