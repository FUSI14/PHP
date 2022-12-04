<?php
require 'conn.php';
$id=$_POST['id'];
$new_uid=$_POST['new_username'];

$sql_1="update userdata set username='{$new_uid}' where id={$id}";
if(mysqli_query($conn,$sql_1)){
    echo "修改成功";
}
else{
    echo "修改失败";
}
mysqli_close($conn);
