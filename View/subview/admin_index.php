<!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Products</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Danh mục game</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Thêm game mới</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						<div id="info"><?php
								
								 if (isset($_SESSION['info'])) echo $_SESSION['info'];
								 unset($_SESSION['info']);
								  ?></div>
						
						<table id="tbl_book">
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>No</th>
								   <th>Name</th>
								   <th>Price</th>
								   <th>Image</th>
								   <th>Producer</th>
								   <th>Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left"></div>
										
										<div class="pagination">
											<a href="<?php echo BASE_URL ?>/admincp/#" title="First Page">&laquo; First</a><a href="<?php echo BASE_URL ?>/admincp/#" title="Previous Page">&laquo; Previous</a>
											<a href="<?php echo BASE_URL ?>/admincp/#" class="number" title="1">1</a>
											<a href="<?php echo BASE_URL ?>/admincp/#" class="number" title="2">2</a>
											<a href="<?php echo BASE_URL ?>/admincp/#" class="number current" title="3">3</a>
											<a href="<?php echo BASE_URL ?>/admincp/#" class="number" title="4">4</a>
											<a href="<?php echo BASE_URL ?>/admincp/#" title="Next Page">Next &raquo;</a><a href="<?php echo BASE_URL ?>/admincp/#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								<?php 
								foreach ($data as $key => $value) 
								{
								?>
								<tr>
									<td><input type="checkbox" /></td>
									<td><?php echo $key+1 ?></td>
									<td><?php echo $value['pro_name'] ?></td>
									<td><?php echo $value['price'] ?></td>
									<td>
										<img class=book src="<?php echo BASE_URL ?>/images/products/<?php echo $value['image'] ?>">
									</td>
									<td><?php echo $value['producer'] ?></td>
									<td>
										<!-- Icons -->
										 <a href="<?php echo BASE_URL ?>/?controller=Admin&action=edit&product_id=<?php echo $value['product_id'] ?>" title="Edit Meta"><img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete" onClick="DeleteBook('<?php echo $value['product_id'] ?>'); ">
										 	<img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/cross.png" alt="Delete" />
										 </a> 
										 <a href="<?php echo BASE_URL ?>/?controller=Admin&action=edit&book_id=<?php echo $value['product_id'] ?>" title="Edit Meta">
										 	<img src="<?php echo BASE_URL ?>/admincp/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" />
										 </a>
									</td>
								</tr>
							<?php
							}
							?>
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="index.php?controller=Game&action=insert" method="post" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<div id="info"><?php
								
								 if (isset($_SESSION['info'])) echo $_SESSION['info'];
								 unset($_SESSION['info']);
								  ?></div>
								
								<p>
									<label>Product name</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="pro_name" /> 
								</p>
								<p>
									<label>Price</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="price" /> 
								</p>
								<p>
									<label>Producer</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="producer" /> 
								</p>
								<p>
									<label>Quantity</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="quantity_available" /> 
								</p>
								
								
								<p>
									<label>Image</label>
									<input type="file" name="img" /><br />
									
								</p>
								
							
								
								<p>
									<label>Details</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="details" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
<script type="text/javascript">
	function DeleteBook(id)
	{
		if (confirm("Ban chac chan muon xoa?"))
		{
			window.location='<?php echo BASE_URL ?>/index.php?controller=admin&action=deletebook&book_id='+id;
		}
		else return false;
	}
</script>