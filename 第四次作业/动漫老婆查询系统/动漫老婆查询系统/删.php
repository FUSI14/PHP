<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除老婆</title>
</head>
<body align="center" bgcolor="#FFF0F5">
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

echo "<br/>";
$sql="delete from wifedata
      where id=$id";
if (mysqli_query($conn, $sql)) {
    echo "删除成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "<br>";
?>
<button><a href="系统主界面.php">返回主页</a></button>
</body>
</html>
