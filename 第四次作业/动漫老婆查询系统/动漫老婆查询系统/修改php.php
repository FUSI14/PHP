<?php
echo "<body bgcolor='#ffb6c1'>";
echo "<center>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="wife";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}
$id=$_GET["id"];

$name=$_POST["name"];
$sex=$_POST["sex"];
$from=$_POST["from"];

$sql="update wifedata set 姓名='$name',性别='$sex',出自='$from' 
        where id=$id";
if (mysqli_query($conn, $sql)) {
    echo "修改成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "<p><button><a href=系统主界面.php>返回主页</a></button>"
?>