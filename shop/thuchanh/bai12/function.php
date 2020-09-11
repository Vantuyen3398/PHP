<?php
	function getrating($id){
		include('connect.php');
		$sl= "select * from rating_info where product_id=".$id;
		$kq= mysqli_query($connect, $sl);
		$row= mysqli_fetch_array($kq);
		echo '<p>Đánh giá:</p><table border="1"><tr><td width="50px">*</td><td>: '.$row['rate_1'].'</td></tr><tr><td>**</td><td>: '.$row['rate_2'].'</td></tr><tr><td>***</td><td>: '.$row['rate_3'].'</td></tr><tr><td>****</td><td>: '.$row['rate_4'].'</td></tr><tr><td>*****</td><td>: '.$row['rate_5'].'</td></tr></table>';
		}

	function setrating($id, $rate){
		include('connect.php');
		$sl= "select rate_".$rate." from rating_info where product_id=".$id;
		$kq= mysqli_query($connect, $sl);
		$row= mysqli_fetch_array($kq);
		$i= $row['rate_'.$rate];
		$i++;
		$sl1= "update rating_info set rate_".$rate."=".$i." where product_id=".$id;
		$kq1= mysqli_query($connect, $sl1);
	}	
	function getproduct($id){
		include('connect.php');
		$sl= "select * from products where id=".$id;
		$exc= mysqli_query($connect, $sl);
		$row= mysqli_fetch_array($exc);
		$sl1= "select * from rating_info where product_id=".$row['id'];
		$kq= mysqli_query($connect, $sl1);
		$row1= mysqli_fetch_array($kq);
		echo '<div class="product-id">
					<div class="p1">
						<div class="img">
							<img src="'.$row['img_url'].'"  alt="">
						</div>
						<div class="rate">
						'.'<p>Đánh giá:</p><table><tr><td width="50px">*</td><td>: '.$row1['rate_1'].'</td></tr><tr><td>**</td><td>: '.$row1['rate_2'].'</td></tr><tr><td>***</td><td>: '.$row1['rate_3'].'</td></tr><tr><td>****</td><td>: '.$row1['rate_4'].'</td></tr><tr><td>*****</td><td>: '.$row1['rate_5'].'</td></tr></table>'.'
						</div>
					</div>
					<div class="p2"><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a>
					</div>
					</div>
				<div class="rating">
				<p>Đánh giá của bạn:</p>
					<form action="" method="post">
						<input type="radio" name="rate" value="1">*
						<input type="radio" name="rate" value="2">**
						<input type="radio" name="rate" value="3">***
						<input type="radio" name="rate" value="4">****
						<input type="radio" name="rate" value="5">*****<br>
						<input type="submit" name="submit" value="Rate">
					</form>
				</div>';

	}
	function showlist(){
		include('connect.php');
		$sl= "select * from products";
		$exc= mysqli_query($connect, $sl);
		while($row= mysqli_fetch_array($exc)){
			$sl1= "select * from rating_info where product_id=".$row['id'];
			$kq= mysqli_query($connect, $sl1);
			$row1= mysqli_fetch_array($kq);
			echo '<div class="product">
					<div class="p1">
						<div class="img">
							<img src="'.$row['img_url'].'"  alt="">
						</div>
						<div class="rate">
						'.'<p>Đánh giá:</p><table><tr><td width="50px">*</td><td>: '.$row1['rate_1'].'</td></tr><tr><td>**</td><td>: '.$row1['rate_2'].'</td></tr><tr><td>***</td><td>: '.$row1['rate_3'].'</td></tr><tr><td>****</td><td>: '.$row1['rate_4'].'</td></tr><tr><td>*****</td><td>: '.$row1['rate_5'].'</td></tr></table>'.'
						</div>
					</div>
					<div class="p2"><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a>
					</div>
					</div>';
		}
	}
?>