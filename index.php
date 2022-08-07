<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function ucgen($sayi){
    for($i=0;$i<=$sayi;$i++){
        $j=0;
        for($j=0;$j<=$i;$j++)
        {
        echo "0"; 
        }
 echo "<br>";
}
}
ucgen(15);
?>
</body>
</html>