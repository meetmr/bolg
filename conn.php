
<?php
    header('Content-Type:text/html;charset=utf-8');  //设置字符编码 
    $link =mysqli_connect("localhost","root","123456","blog");
    
    if (!$link){
        echo "连接数据库失败.".mysqli_connect_error();
        exit();

    }
    mysqli_query($link,"set name utf8");
?>
