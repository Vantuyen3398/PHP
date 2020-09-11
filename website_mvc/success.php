<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<style type="text/css">
	h2.success_order{
		text-align: center;
		color: red;
	}
	p.success_note{
		text-align: center;
		padding: 8px;
		font-size: 17px;
	}
</style>
<form action="" method="POST">
<div class="main">
    <div class="content">
    	<div class="section group">
    		<h2 class="success_order">Success Order</h2>
    		<?php
    			$customerId = Session::get('customerId');
    			$get_amount = $ct->getAmountPrice($customerId);
    			if($get_amount){
    				$amount = 0;
    				while($result = $get_amount->fetch_assoc()){
    					$price = $result['price'];
    					$amount += $price;
    				}
    			}
    		?>
    		<p class="success_note">Total Price You Have Bought From My Website: 
    			<?php 
    				$vat = $amount * 0.1; 
    				$total = $vat + $amount ;
    				echo $total.' '.'VNĐ';
    				?>
    		</p>
    		<p class="success_note">We will contact as soon as possiable. Please see your order details here<a href="orderdetails.php">Click here</a></p>
 		</div>
 	</div>
</form>
<?php
	include 'inc/footer.php';
?>
