<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');
	include_once "../conn.php";   //包含链接数据库的文件	
			
            $blbt = $_POST['blbt'];
            $blnb = $_POST['blnb'];
			$blnr = $_POST['blnr'];
			$blid = $_POST['blid'];
			
			
			
		$strsql = "update blogwz set blbt = '$blbt' ,blnb = '$blnb', blnr = '$blnr' where blid = $blid ";
		echo $strsql;
		$result = mysqli_query($link,$strsql)or die('执行语句有误').mysqli_error();
		
		
		if($result){
		    header("location:../ge/ge1.php");
		    
		}
		else {
		    echo "修改失败".mysqli_error($link);
		   }
		mysqli_close($link);  //关闭连接
?>