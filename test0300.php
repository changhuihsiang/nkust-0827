<h2>超神準大樂透預測王</h2>
<hr>
<?php
$count = 0;
$counts = 0;
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

    while ( $counts < 1) {    
    $spea = rand(1, 49);
    if (in_array($spea,$lottl))continue;
	
	$counts++;

	}
	echo "<br>特別號：". $spea;
?>
<hr>
不準免錢，有中歡迎斗內...
<hr>