<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="wife";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改老婆捏♥</title>
    <style>
        ul {
            list-style-type: none;
            width: 60%;
            height: 50px;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #c3bef0;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #A3F6FF;
        }
    </style>
</head>
<body bgcolor="#defcf9">
<center>
    <img src="image/老婆们.jpg" height="200px">
    <ul>
        <li><a class="active" href="系统主界面.php">主界面</a></li>
        <li><a href="增.html">增加</a></li>
        <li><a href="删.html">删除</a></li>
        <li><a href="主页.php">返回入口</a></li>
    </ul>
    <?php
    $id=$_GET["id"];
    $sql="select id,姓名,性别,出自 from wifedata where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <table width="60%" border="1" cellpadding="1" cellspacing="1" bgcolor="#f0f8ff">
        <tr>
            <td width="15%" height="25" align="center">id</td>
            <td width="10%" align="center">姓名</td>
            <td width="5%" align="center">性别</td>
            <td width="30%" align="center">出自</td>
            <td width="25%" align="center">详情</td>
        </tr>
        <tr>
            <td height="25" align="center" bgcolor="#FFFFFF"><?php echo $row["id"];?></td>
            <td align="center" bgcolor="#FFFFFF" ><?php echo $row["姓名"];?></td>
            <td align="center" bgcolor="#FFFFFF" ><?php echo $row["性别"];?></td>
            <td align="center" bgcolor="#FFFFFF" ><?php echo $row["出自"];?></td>
            <td align="center" bgcolor="#FFFFFF" >详情</td>
        </tr>
       <tr> <?php echo "<form action=修改php.php?action=del&id=".$id." method='post'>";  ?>
            <td height="25" align="center" bgcolor="#FFFFFF">编号不可修改</td>
            <td align="center" bgcolor="#FFFFFF" ><input name="name" type="text"></td>
            <td align="center" bgcolor="#FFFFFF" ><input name="sex" type="text"></td>
            <td align="center" bgcolor="#FFFFFF" ><input name="from" type="text"></td>
            <td align="center" bgcolor="#FFFFFF" >请前往详情页修改</td>
        </tr>
    </table>
    <table>
        <tr><font color="#483d8b">
            *请不要输入空值哦~
        <tr>
    </table>
    <p><input type="submit" value="提交" ></p>
    </form>
</center>
</body>
</html>
<?php
mysqli_close($conn);
?>