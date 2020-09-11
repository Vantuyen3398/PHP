<?php
	include('connect.php');
	if(isset($_POST['submit'])){
		if(isset($_POST['votee'])){
			$id=$_POST['votee'];
			$sl= "update answer set votes= votes+1 where id=".$id;
			$exc= mysqli_query($connect,$sl);
		}
	}
	$sl= "select * from answer where id_question=1";
	$exc= mysqli_query($connect, $sl);
	echo '<table width="580px" border="1" height="300px">
				<tr>
					<td colspan="3">Bài tập của em có ô kê không ạ?</td>
				</tr>';
	$sll= "select sum(votes) as totalvote from answer where id_question=1";
	$excc= mysqli_query($connect, $sll);
	$row1= mysqli_fetch_array($excc);
	while($row= mysqli_fetch_array($exc)){
		$id= $row['id'];
		$sl1= "select * from answer where id=".$id;
		$exc1= mysqli_query($connect, $sl1);
		$row2= mysqli_fetch_array($exc1);
		$per= ($row2['votes']/$row1['totalvote'])*100;
		$kq= round($per,2);
		$kq1= $kq*1.5;
		echo '<tr>
					<td width="100px" align="center">'.$row['content'].'</td>
					<td width="320px"><div style="width: 69%; height: 40px; float: left;">
					<div style="width:'.$kq1.'%; height:40px; background-color: blue; "></div></div><div style="width:31%; height:40px; float: left; line-height: 40px;">'.$kq.' %</div></td>
					<td align="center">Số lần chọn: '.$row['votes'].'</td>
				</tr>';
	}
	echo '<tr align="center">
				<td colspan="2">Tổng lượt bình chọn</td>
				<td>'.$row1['totalvote'].'</td>
			</tr>
		</table>';
	
	
?>