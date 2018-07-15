<!--文章修改-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
	include_once "conn.php"; 	
	$id = $_GET['id'];
	$sql_user = "select * from blogwz where blid = $id";
	$sql_rew = mysqli_query($link,$sql_user);
	$sql_row = mysqli_fetch_assoc($sql_rew);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>文章修改</title>
		<style>
			#dk{
				width:1600px;
				height:900px;
				position:absolute;top:50%;left:50%;
				margin:-450px 0 0 -800px;	
				background: #FFFAF0;
				color: #6676FF;
				font-size:19px;
			}
		</style>
	</head>
	<body>
		
		<form action="ku/wzxg.php" method="post" enctype="multipart/form-data">
			<div id="dk">
				
				<span style="font-size: 20px;position: absolute;left: 50%;">文章修改</span>
				
				<span style="position: absolute;top:30px;left: 100px;">编号:</span>
				<input type="text" id="blid" name="blid" value="<?php echo $sql_row['blid']; ?>" style="position: absolute;top:30px;left: 200px;"/>
				<span style="position: absolute;top:30px;left: 400px;">! 编号请勿修改  !</span>
				<span style="position: absolute;top:80px;left: 100px;">标题:</span>
				<input type="text" id="blbt" name="blbt" value="<?php echo $sql_row['blbt']?>" style="position: absolute;top:80px;left: 200px;"/>
				<span style="position: absolute;top:120px;left: 100px;">类别:</span>
				<input type="text" id="blnb" name="blnb" value="<?php echo $sql_row['blnb']?>" style="position: absolute;top:120px;left: 200px;"/>
				
				<span style="position: absolute;top:160px;left: 100px;">内容:</span>
				<textarea cols="170" name="blnr" id="blnr" rows="40" style="position: absolute;top:160px;left: 200px;font-size: 15px;" ><?php echo $sql_row['blnr']?></textarea>
				<input type="submit" value="修改" width="20" style="position: absolute;top:95%;left: 35%;color: #6676FF;font-size: 16px;" />
			</div>	
		</form>
	</body>
</html>