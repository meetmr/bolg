<!--删除文章-->
<?php
include "conn.php";
$id = $_GET['id'];
$sql_sql = "delete from blogwz where blid={$id}";
  echo $sql_sql;
mysqli_query($link,$sql_sql);
header("location:./ge/ge1.php");
//delete from 表名 where 条件