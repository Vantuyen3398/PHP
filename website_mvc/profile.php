<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<?php
	$login_check = Session::get('customer_login');
	if($login_check == false){
	  	header('Location:login.php');
	}
?>
<!-- <?php
	if(!isset($_GET['proId']) || $_GET['proId'] == NULL){
        echo "<script>window.location='404.php'</script>";
    }else{
        $id = $_GET['proId'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
     // The request is using the POST method
    	$quantity = $_POST['quantity'];
        $AddtoCart = $ct->add_to_cart($quantity,$id);
    }
?> -->
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="content_top">
	    		<div class="heading">
	    			<h3>Profile Customer</h3>
	    		</div>
	    		<div class="clear"></div>
    		</div>
    		<table class="tblone">
    			<?php
    				$id = Session::get('customer_id');
    				$get_customer = $cs->show_customer($id);
    				if($get_customer){
    					while($result = $get_customer->fetch_assoc()){
    			?>
    			<tr>
    				<td>Name</td>
    				<td>:</td>
    				<td><?php echo $result['name']?></td>
    			</tr>
    			<tr>
    				<td>Address</td>
    				<td>:</td>
    				<td><?php echo $result['address']?></td>
    			</tr>
    			<tr>
    				<td>City</td>
    				<td>:</td>
    				<td><?php echo $result['city']?></td>
    			</tr>
    			<tr>
    				<td>Zip_code</td>
    				<td>:</td>
    				<td><?php echo $result['zipcode']?></td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td>:</td>
    				<td><?php echo $result['email']?></td>
    			</tr>
    			<tr>
    				<td>Phone</td>
    				<td>:</td>
    				<td><?php echo $result['phone']?></td>
    			</tr>
    			<tr>
    				<td colspan="3"><a href="editprofile.php">Update Profile</a></td>
    			</tr>
    			<?php
    				}
    			}
    			?>
    		</table>
    	</div>
 	</div>
</div>
<?php
	include 'inc/footer.php';
?>
