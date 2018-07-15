<!--上传相册-->
<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');  //设置字符编码
		include_once "../conn.php";   //包含链接数据库的文件		
		include'../scfuntion.php';
	 	$image = $_FILES['file'];
   		$allow = array('image/jpeg', 'image/png', 'image/gif');
	 	var_dump($image);
		$path = '../images/tp/';
    	$maxsize = 5242880;//0.5M
     	if(!($image['error'] ==4)){  //判断是否选择了头像
           $result  = upload($image,$allow,$error,$path,$maxsize);
		   $xcmc = $_POST['xcmc'];
		   $xcnb = $_POST['xcnb'];
			
		$strsql = "insert into blogxc(xcmc,xcnb,xctp)values('$xcmc','$xmnc','$result')";
		echo $strsql;
		$result = mysqli_query($link,$strsql)or die('执行语句有误').mysqli_error();
		if($result){
		    header("location:../ge/ge4.php");
		}
		else {
		    echo "注册失败".mysqli_error($link);
		   }
		mysqli_close($link);  //关闭连接
?>

