<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            text-align: center;
            border: 1px solid red;
            border-collapse: collapse; 
        }
        th {
            border-right: 1px solid red;
            border-bottom:1px solid red; 
        }
        td {
            border-right: 1px solid red;
            border-bottom:1px solid red; 
        }
    </style>
<?php



// $number = 8;

// echo "<table border='1'>";
// for($i = 1; $i < 10; $i++){
//     echo "<tr>";
//     echo "<td>$i </td>";
//     echo "<td> * </td>";
//     echo "<td> $number </td>";
//     echo "<td> = <td>";
//     echo "<td> . ($i . $number)";
//     echo "</tr>" ;
// };
// // echo "</table>";









// $Miles = 1;
// $kilometer = $Miles * 1.609;

// echo "<table>";
// echo "<tr>";
// echo "<th>" . "Miles" ."</th>";
// echo "<th>" . "Kilometer" ."</th>";
// echo "<tr>";
// for ( $i = 1 ; $i <= 10 ; $i++) {
//     echo "<tr>";
//     echo "<td>" . $Miles * $i . "</td>";
//     echo "<td>" . $kilometer * $i . "</td>";
//     echo "</tr>";
// }
// echo "</table>";



// $getal = 7;
// echo "<table border='1'>";
// for($m = 0; $ <= 10; $m++){

//     echo "<thead>";
//     echo
//     echo "<tr>";
//     echo "<td> $m <td>";
//     echo "<td> * <td>";
//     echo "<td> $getal </td>";
//     echo "<td> = </td>";
//     echo "<td> . ($m . $getal) .";
//     echo "</
//     +
//     +>";
// } 
// echo "</table>l";



$km = 1.609;
// $mile = 1;

// echo "<table>";
// echo "<tr>";
// echo "<th>" . "Miles" . "</th>";
// echo "<th>" . "kilometers" . "</th>";
// for($i = 1; $i < 11; $i++){
//     $totalKm = $i * $km;


//     echo "<tr>";
//     echo "<td>" . $i ."</td>";
//     echo "<td>" . $totalKm . "</td>";
//     echo "</tr>";

// }
//  echo "</table>";



for($i = 1; $i < 6; $i++) {
    for($y = 6; $y > $i; $y--){
        echo $y . "<br>";
    }
    echo $y . "<br>";
}


?>
</body>
</html>