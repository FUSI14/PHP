<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>增加老婆</title>
</head>
<body align="center" bgcolor="#ffb6c1">
<?PHP
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="wife";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}

$id = $_POST["id"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$from = $_POST["from"];
echo "id:".$id." 姓名:".$name." 性别:".$sex." 出自:".$from;
$sql="insert into wifedata
(id,姓名,性别,出自)
values
($id,\"$name\",\"$sex\",\"$from\")";
echo "<br/>";
if (mysqli_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "<br>";
?>
<button><a href="系统主界面.php">返回主页</a></button>
</body>
</html>
