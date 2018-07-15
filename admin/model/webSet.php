<?php
    /**
     *   网站设置文件
     *   时间:2017年12月15日
     *   @王恒兵
     **/
    include '../init.php';
    include DIR_CORE."DAOPDO.class.php";
    include DIR_CONFIG."config.php";
    login("./login.php");
    $sql_setup = "select * from setup ";
    $dao = DAOPDO::getSingLenton();  //实例化PDO对象
    $set_row = $dao->fetchRow($sql_setup);
    include DIR_VIEW."webSet.html";
?>