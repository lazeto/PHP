<html>
<head>
<style>
p.red{color:red;}
p.blue{color:blue;}
</style>
</head>
<body>

<?php

function isPrime($num){
    for ($i=2; $i<=sqrt($num); $i++) {
        if($num % $i == 0) {
        return FALSE;
        }
    }
    return TRUE;
}

if(!is_numeric($_GET['number'])){
echo '<p class="red">The parameter is not a number</p>';
} elseif(19999<$_GET['number'] or $_GET['number']<0){
echo '<p class="red">The parameter is not within the range [0,19999]</p>';
} elseif(isPrime($_GET['number'])==true){
printf("The number %s is prime!", $_GET['number']);
} else{
echo '<p class="blue">';
printf("The number %s is NOT prime!", $_GET['number']);
echo '</p>';
}
?>

</body>
</html>