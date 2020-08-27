<h2>超神準大樂透預測王</h2>
<hr>
<?php
$count = 0;
while ($count < 6) {	
		$t= rand(1, 49);
        if (in_array($t, $lottl)) continue; 		
        $lotto[]=$t;
        $count++;
	}
	sort($lotto);
	foreach ($lotto as $no) {
		echo $no . ",";
	}
    
    echo "<br>特別號：";
    $spec = rand(1, 49);
    while (in_array($spec,$lotto))     
        $spec = rand(1, 49);
    echo  $spec;	
?>
<hr>
不準免錢，有中歡迎斗內...<br>

<iframe width="320" height="180" src="https://www.youtube.com/embed/Ir--OcRp4RE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>