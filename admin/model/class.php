<?php
    /**
     *   分类管理
     *   时间:2017年12月17日
     *   @王恒兵
     **/
    include '../init.php'; //加载项目配置文件
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'pages.class.php';
    login('./login.php');
    //***********获取分类****************
    $sql_class = "select * from class";
    $dao = DAOPDO::getSingLenton();
    $class_row = $dao->fetchAll($sql_class);
    include DIR_VIEW."class.html";
?>