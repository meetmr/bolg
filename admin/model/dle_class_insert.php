<?php
    /**
     *   添加分类
     *   时间:2017年12月17日
     *   @王恒兵
     **/
    include '../init.php';
    include DIR_CORE.'DAOPDO.class.php';
    include DIR_CONFIG."config.php";
    include DIR_CORE.'uploadfun.php';
    $class_name = input($_POST['class_name']);
    $class_me = input($_POST['class_me']);
    $insert_class = "insert into class VALUES (null,'$class_name','$class_me')";
    $dao = DAOPDO::getSingLenton();
    if($dao->exec($insert_class)){
        echo "<script>location ='./class.php'</script>";
    }
?>