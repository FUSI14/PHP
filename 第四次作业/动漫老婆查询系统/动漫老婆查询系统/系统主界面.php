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
    <title>进入♥系统</title>
    <style>
        ul {
            list-style-type: none;
            width: 60%;
            height: 50px;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #FFACA3;
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
<body bgcolor="#FFE4E1">
<center>
    <img src="image/老婆们.jpg" height="200px">
    <ul>
        <li><a class="active" href="系统主界面.php">主界面</a></li>
        <li><a href="增.html">增加</a></li>
        <li><a href="删.html">删除</a></li>
        <li><a href="主页.php">返回入口</a></li>
    </ul>

<table width="60%" border="1" cellpadding="1" cellspacing="1" bgcolor="#fae3d9">
    <tr>
        <td width="10%" height="25" align="center">id</td>
        <td width="10%" align="center">姓名</td>
        <td width="5%" align="center">性别</td>
        <td width="30%" align="center">出自</td>
        <td width="15%" align="center">操作</td>
        <td width="25%" align="center">详情</td>
    </tr>
    <?PHP
    $pagesize=8;
    $sqlstr="select * from wifedata order by id";
    $total = mysqli_query($conn,$sqlstr);
    $totalNum = mysqli_num_rows($total);
    $pagecount = ceil($totalNum/$pagesize);
    (!isset($_GET['page']))?($page = 1):$page = $_GET['page'];
    ($page <= $pagecount)?$page:($page = $pagecount);
    $f_pageNum = $pagesize * ($page - 1);
    $sqlstr1 = $sqlstr." limit ".$f_pageNum.",".$pagesize;
    $result = mysqli_query($conn,$sqlstr1);
    while($rows=mysqli_fetch_array($result)){
    ?>
        <tr>
            <td width="5%" height="25" align="center" bgcolor="#FFFFFF"><?php echo $rows[0];?></td>
            <td width="30%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[1];?></td>
            <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[2];?></td>
            <td width="20%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[3];?></td>
            <td width="10%" align="center" bgcolor="#FFFFFF" >
            <?php echo "<a href=系统主界面点击删除.php?action=del&id=".$rows[0].">删除</a>";
                  echo "/";
                  echo "<a href=修改.php?action=update&id=".$rows[0].">修改</a>";
                  ?>
            </td>
            <td width="10%" align="center" bgcolor="#FFFFFF" >详情</td>
        </tr>
    <?PHP
    }
    ?>
</table>
    <table width="60%" border="1" cellpadding="1" cellspacing="1" bgcolor="#fae3d9">
        <tr>
            <td align="center">
    <?php
    echo "共".$totalNum."位老婆&nbsp;&nbsp;";
    echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
    if($page!=1){
        echo "<a href='?page=1'>首页</a>&nbsp;";
        echo "<a href='?page=".($page-1)." '>上一页</a>&nbsp;&nbsp;";
    }else{
        echo "首页&nbsp;上一页&nbsp;&nbsp;";
    }
    if($page!=$pagecount){
        echo "<a href='?page=".($page+1)." '>下一页</a>&nbsp;";
        echo "<a href='?page=".$pagecount." '>尾页</a>&nbsp;&nbsp;";
    }else{
        echo "下一页&nbsp;尾页&nbsp;&nbsp;";
    }
    ?>
            </td>
        </tr>
    </table>
</center>
</body>
</html>
<?php
mysqli_close($conn);
?>