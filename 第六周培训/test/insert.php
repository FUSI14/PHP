<?php
require 'conn.php';
$uid=$_POST['username'];
$sex=$_POST['sex'];
$phone_number=$_POST['phone_number'];
$qq=$_POST['qq'];
$college=$_POST['college'];
$profession=$_POST['profession'];

$sql="insert into userdata (username,sex,phone_number,qq,college,profession) values ('{$uid}','{$sex}',{$phone_number},{$qq},'{$college}','{$profession}')";
if(mysqli_query($conn,$sql)){
    echo "插入成功";
}
else{
    echo "插入失败";
}
mysqli_close($conn);