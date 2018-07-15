<!--//注册写入数据库(blog)页面-->
<?php
		header('Content-Type:text/html;charset=utf-8');  //设置字符编码
		include_once "../conn.php";   //包含链接数据库的文件		
        echo "<title> 信息写入blogzc表 </title>";	
			$blogyh = $_POST['blogyh'];
			$blogQQ = $_POST['blogQQ'];
			$blognc = $_POST['blognc'];
			$blogyx = $_POST['blogyx'];
			$blogsr = $_POST['blogsr'];
			$blogmm = $_POST['blogmm'];
			$blogqrmm = $_POST['blogqrmm'];
			$blogxb = $_POST['blogxb'];
			$blogtx =  $_POST['blogtx'];
			$bloggxqm = $_POST['bloggxqm'];
			
		$strsql = "insert into blogzc(blogyh,blogQQ,blognc,blogyx,blogsr,blogmm,blogqrmm,blogxb,blogtx,bloggxqm)values
		('$blogyh','$blogQQ','$blognc','$blogyx','$blogsr','$blogmm','$blogqrmm','$blogxb','$blogtx','$bloggxqm')";
		echo $strsql;
		$result = mysqli_query($link,$strsql)or die('执行语句有误').mysqli_error();
		
		if($result){
		    header("location:../gogo.php");
		    
		}
		else {
		    echo "注册失败".mysqli_error($link);
		   }
		mysqli_close($link);  //关闭连接
?>
