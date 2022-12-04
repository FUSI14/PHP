<?php
require 'conn.php';

$uid=$_POST['username'];
$pwd=$_POST['password'];

$sql="insert into users (username,password) values ('{$uid}','{$pwd}')";
$sel_sql="select count(*) from users where username='{$uid}' and password='{$pwd}'";
$result_sel=mysqli_query($conn,$sel_sql);
$row=mysqli_fetch_array($result_sel);
if($row[0]==0)
{
    if(mysqli_query($conn,$sql)){
        echo "注册成功";
    }
    else{
        echo "注册失败";
    }
}
else{
    echo "已有注册信息";
}

mysqli_close($conn);