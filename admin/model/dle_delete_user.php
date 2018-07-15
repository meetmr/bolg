<?php
    /**
     * 删除用户
     * 时间:2017年12月16日
     * @王恒兵
     * */
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $user_id = $_GET['user_id'];
    $sele_user = "select user_pic from user where user_id = '$user_id'";
    $dao =  DAOPDO::getSingLenton();
    $user_pic = $dao->fetchColumn($sele_user);  //查询用户头像
    $user_pic = mb_substr($user_pic,-16,16);
    $user_pic = "../public/upload/".$user_pic;
    $delete_user = "delete from user WHERE user_id = '$user_id'";
    if($dao->exec($delete_user)){
        unlink($user_pic);
        echo "<script>location ='./user.php'</script>";
    }else{
        echo "<script>alert('失败')</script>";
        echo "<script>location ='./user.php'</script>";
    }


?>