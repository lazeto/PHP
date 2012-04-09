<html>
<head>
</head>
<body>

<?php 
$arr = range(20, 1000, 37);

function find_3_prime($ar){
$count = 0;
	foreach($ar as $value){
		if(isPrime($value) == TRUE){
		$count++;
			if($count == 3){
			echo $value;
			}
		}
	}
}
find_3_prime($arr);
echo "<br/>";

function check_exists($ar){
$array = array(146,284,871);

	foreach($array as $value){
		if(in_array($value, $ar)){
		printf("The number %d exist in the array", $value);
		echo "<br/>";
		} else{
			printf("The number %d does not exist in the array", $value);
			echo "<br/>";
		}
	}
}

check_exists($arr);

function isPrime($num){
    for ($i=2; $i<=sqrt($num); $i++) {
        if($num % $i == 0) {
        return FALSE;
        }
    }
    return TRUE;
}

?>

</body>
</html>