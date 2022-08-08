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
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth","Mars","Jupiter","Saturn","Uranus","Neptune","",",NULL"];
function myFunction($array,$value){

        $filterArray = array_filter($array);
        $randomArray = array_rand($filterArray, $value);
        $sonuc = array_map(function ($item) use ($filterArray) {
            return $filterArray[$item];
        },
        $randomArray);
        return $sonuc;
}



print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));

?>
</body>
</html>