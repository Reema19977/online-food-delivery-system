<?php 
session_start();
include("inc/config.inc.php");
setlocale(LC_MONETARY,"en_US");
include("inc/header.php"); 
?>
<title>phpzag.com : Demo Build Shopping Cart with Ajax, PHP and MySQL</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/cart.js"></script>
<?php include('inc/container.php');?>
<div class="container">	
<h3 style="text-align:left">Review Your Cart Before Buying</h3>
<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total = 0;
	$list_tax = '';
	?>	
	<table class="table" id="shopping-cart-results">
	<thead>
	<tr>
	<th>Product</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>total</th>		
	<th>&nbsp;</th>				
	</tr>
	</thead>
	<tbody>				
	<?php			
	$cart_box = '';
	foreach($_SESSION["tbl_product"] as $item){
		$item_name = $product["item_name"];
		$item_quantity = $product["item_qty"];
		$item_price = $product["item_price"];
					
		$item_price = sprintf("%01.2f",($item_price* $item_quantity)); 		
		?>
		<tr>
		
		<td><?php echo $item_price; ?></td>
		<td><?php echo $item_quantity; ?></td>
		<td><?php echo $currency; echo sprintf("%01.2f", ($product_price * $product_qty)); ?></td>
		<td>&nbsp;</td>
		</tr>				
		<?php		
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}	
	$grand_total = $total + $shipping_cost;
	foreach($taxes as $key => $value){
			$tax_amount = round($total * ($value / 100));
			$tax_item[$key] = $tax_amount;
			$grand_total = $grand_total + $tax_amount; 
	}	
	foreach($tax_item as $key => $value){
		$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
	}	
	$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
	$cart_box .= "<span>$shipping_cost  $list_tax <hr>Payable Amount : $currency ".sprintf("%01.2f", $grand_total)."</span>";	
	?>
	<tfoot>
	<tr>
	<td><br><br><br><br><br><br><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td class="text-center view-cart-total"><strong><?php echo $cart_box; ?></strong></td>	
	<td><br><br><br><br><br><br><a href="success.php" class="btn btn-success btn-block">Place Order <i class="glyphicon glyphicon-menu-right"></i></a></td>
	</tr>
	</tfoot>	
	<?php	
} else {
	echo "Your order Placed  successfully ..:)";
}
?>
</tbody>
</table>
</div>
<?php include('inc/footer.php');?>