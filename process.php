<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $row = $_POST["row"];
    $col = $_POST["col"];
    $mult=array(array());
    if($row<3 or $row>12 or $col<3 or $col>12){
        echo "Please enter values between 3 and 12"; }
    else {
        echo "<table align=\"center\">";
        for ($i = 1; $i <=$row; $i++) {
            echo "<tr><td>";
            for ($j = 1; $j <=$col; $j++) {
                $mult[$i][$j]=$i*$j;
                echo $mult[$i][$j];
                echo "</td><td>";
            }
        }
        echo "</table>";
    }

    
?>
</body>
</html>

<!---for ($counter1=1; $counter1<=$row;$counter1+=1){
         #   echo '<br>';
          #  for($counter2=1; $counter2<=$col;$counter2+=1){
           #     echo " ".$counter1*$counter2."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            #}
        #}--->