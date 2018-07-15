<?php
    /**
     *   添加用户
     *   时间:2017年12月16日
     *   @王恒兵
     **/
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $allow = array('image/jpeg', 'image/png', 'image/gif');
    $root = $_SERVER['DOCUMENT_ROOT'];
    $host = $_SERVER['HTTP_HOST'];
    $path = $root.'/admin/public/upload';
    $path = str_replace('\\','/',$path.'/');
    $maxsize = 5242880;//0.5M
    $user = input($_POST['user']);
    $name = input($_POST['name']);
    $pwd = input($_POST['pwd']);
    $sengr = input($_POST['shengri']);
    $email = input($_POST['email']);
    $phone = input($_POST['phone']);
    $qq = input($_POST['qq']);
    $meg = input($_POST['meg']);
    $file = $_FILES['image'];
    $time = time();
    if(!($file['error'] ==4)){  //判断是否选择了头像
        $result  = upload($file,$allow,$error,$path,$maxsize);
        $url = 'http://'.$host."/admin/public/upload/".$result;
        $insert_user = "insert into user VALUES (null,'$user','$name','$pwd','$sengr','$phone',0,'$url','$meg','$qq','$time','$email')";
        $dao = DAOPDO::getSingLenton();  //实例化PDO对象
        $row = $dao->exec($insert_user);
        echo "<script>location ='./user.php'</script>";
    }else{
        echo "<script>alert('没有选择头像')</script>";
        echo "<script>location ='./user.php'</script>";
    }

?>