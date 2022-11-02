<?php
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        $r = mt_rand(0,200);
        $g = mt_rand(40,100);
        $b = mt_rand(30,200);
        echo "<td style='background: rgb($r,$g,$b); color: aliceblue'>","$i*$j=",$i*$j,"</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

