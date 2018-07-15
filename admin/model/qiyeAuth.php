<?php
    /**
     *   添加文章
     *   时间:2017年12月16日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $sql_class = "select * from class ";
    $class_rew = $dao->fetchAll($sql_class);
    include DIR_VIEW."qiyeAuth.html";
?>