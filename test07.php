<button type = button><a href="index.php">回首頁</a></button>
<button type = button><a href="test07.php?height=1.65&weight=45">小明的BMI</a></button>
<button type = button><a href="test07.php?height=1.77&weight=75">曉華的BMI</a></button>
<button type = button><a href="test07.php?height=1.88&weight=85">小城的BMI</a></button>
<hr>
<?php
    $height = $_GET["height"];
	$weight = $_GET["weight"];
    if ($height!=NULL and $weight!=NULL){
        echo "身高：".$height. "公尺<br>";
	    echo "體重：". $weight. "公斤<br>"; 
	    $bmi = $weight / $height ** 2;
	    echo "BMI：" . $bmi . "<br>";
	    if ($bmi>24) {
		echo "體重有些太重囉！";
	    } else if ($bmi>=18.5) {
		echo "體重很標準耶！";
	    } else {
		echo "體重有些太輕了！";
	    }
	} else {

		echo "你要在網址列填寫正確資料!<br>";
		echo "例如http://localhost/mysite/nkust-0827/test07.php?height=你的身高&weight=你的體重";
	}
?>






