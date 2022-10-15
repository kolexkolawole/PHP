
!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content"IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>learning php</title>

</head>
<body>
<form action="form.php" method="GET">

<?php

//get the data from the submitted form

$num1 = $_POST['num1'];

$num2 = $_POST['num2'];

$sum = $num1 + $num2;

$difference = $num1 - $num2;

$product = $num1 * $num2;

 

echo "SUM: " . $sum . "<br>";
echo "DIFFERENCE: " . $difference . "<br>";
echo "PRODUCT: " . $product . "<br>";

?>


</body>
</html>


