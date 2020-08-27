
<h2 align="center">1~9的平方和三次方列表</h2>
<?php
    echo "<table width=300  align=center>";
    echo "<td bgcolor=#ffffaa align=center>i</td>
           <td bgcolor=#ffffaa align=center>i**2</td>
           <td bgcolor=#ffffaa align=center>i**3</td>";

	for($i=1; $i<=9; $i++) {
		if ($i%2)
            echo "<tr bgcolor=#ccffcc align=center>";
		else 
		    echo "<tr bgcolor=#aaffcc align=center>";
		
        echo "<td>",$i,"</td>","<td>",$i**2,"</td>","<td>",$i**3,"</td>";
        echo "</tr>";

	}
	echo "</table>";
?>