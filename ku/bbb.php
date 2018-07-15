<!--文章录入-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
		include_once "../conn.php";   //包含链接数据库的文件		
        echo "<title> 文章写入blogwz表 </title>";	
			$blbt = $_POST['blbt'];
			$blnb = $_POST['blnb'];
			$time = time();
			$blnr = $_POST['blnr'];
			$blogid = $_SESSION['id'];
			
		$strsql = "insert into blogwz(blbt,blnb,time,blnr,blogid)values('$blbt','$blnb','$time','$blnr','$blogid')";
//		echo $strsql;
		$result = mysqli_query($link,$strsql)or die('执行语句有误').mysqli_error();
		if($result){
		    header("location:../ge/ge1.php");
		}
		else {
		    echo "注册失败".mysqli_error($link);
		   }
		mysqli_close($link);  //关闭连接
?>