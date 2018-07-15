<?php
    /**
     *   留言管理
     *   时间:2017年12月16日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $sql_me = "select * from message ";
    $me_row = $dao->fetchAll($sql_me);
    include DIR_VIEW."message.html";
?>