<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delicious</title>
</head>
<body>
<?php
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        $r = mt_rand(100,200);
        $g = mt_rand(80,100);
        $b = mt_rand(30,60);
        echo "<td style='background: rgb($r,$g,$b); color: aliceblue'>","$i*$j=",$i*$j,"</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
