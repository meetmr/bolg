<?php
    /**
     *   用户管理
     *   时间:2017年12月16日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    //查询所有用户
    $sql_user = "select * from user;";
    $user_row = $dao->fetchAll($sql_user);
    $sql_me = "select * from message ";
    $me_row = $dao->fetchAll($sql_me);
    include DIR_VIEW."user.html";
?>