<?php
    /**
     *   网站设置修改
     *   时间:2017年12月17日
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
    $website_name = input($_POST['website_name']);
    $icp_code = input($_POST['icp_code']);
    $mailbox = input($_POST['mailbox']);
    $address = input($_POST['address']);
    $file = $_FILES['image'];
    if(!($file['error'] ==4)){  //判断是否选择了头像
        $dao = DAOPDO::getSingLenton();  //实例化PDO对象
        $result  = upload($file,$allow,$error,$path,$maxsize);
        $url = 'http://'.$host."/admin/public/upload/".$result;
        $seletc_pic = "select inc_pic from setup";
        $pic = $dao->fetchColumn($seletc_pic);
        $pic = mb_substr($pic,-16,16);
        $pic = "../public/upload/".$pic;
        $upda_set = "UPDATE setup SET website_name = '$website_name',icp_code='$icp_code',mailbox ='$mailbox',address='$address',inc_pic='$url'";
        if($row = $dao->exec($upda_set)){
            @unlink($pic);
        }
        echo "<script>location ='./webSet.php'</script>";
    }else{
        echo "<script>alert('没有选择头像')</script>";
        echo "<script>location ='./webSet.php'</script>";
    }
?>