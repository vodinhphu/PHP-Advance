<?php foreach ($data as $key => $value) {
  # code...
 ?>
<form method="POST" action="index.php?controller=Game&action=cart&id=<?php echo $value["product_id"]; ?>">
<div class="col-sm-3">
  <div class="panel panel-default text-center">
    <div class="panel-heading">
      <a href="index.php?Controller=Game&action=detail&id=<?php echo $value['product_id']?>"><img class="imgindex" src="images/products/<?php echo $value['image']?>"></a>
    </div>
    <div class="panel-body">
      <p><strong>Name: <?php echo $value['pro_name']?></strong></p>
      <p><strong>Producer: <?php echo $value['producer']?></strong></p>
    </div>
    <div class="panel-footer">
      <h3>$<?php echo $value['price']?></h3>
      <input type="number" name="quantity" min="1" max="<?php echo $value["quantity_available"] ?>" class="form-control" value="1" required>
      <input type="hidden" name="hidden_name" value="<?php echo $value["pro_name"]; ?>">
      <input type="hidden" name="hidden_price" value="<?php echo $value["price"]; ?>">
      <input class="btn btn-lg" type="submit" name="add" value="Add to Cart"></input>
    </div>
  </div>
</div>
</form>
<?php  
  }
?>