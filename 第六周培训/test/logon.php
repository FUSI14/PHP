<?php
require 'conn.php';
$uid=$_POST['username'];
$pwd=$_POST['password'];
$sql="select count(*) from users where username='{$uid}' and password='{$pwd}'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row[0]!=0)
{
    echo "code:0","<br>";
    echo "message:成功";
}
else
{
    echo "code:1","<br>";
    echo "message:失败";
}
mysqli_close($conn);
?>