<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center">
    <h1>Nathalie Ng ID: 500921963</h1>
<?php
    $servername = "localhost"; $username = "nmng"; $password = "cidLatob"; $database="nmng";
    
    $conn = mysqli_connect($servername, $username, $password, $database); // Check connection
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); 
    }

    
    mysqli_query($conn, $sql1);
           
    $sql = "SELECT subjectp, locationp, datep, urlp FROM pictures ORDER BY datep"; 

    $result = mysqli_query($conn,$sql);
    echo "<table align='center' style='border: 1px solid black;';>
    <tr>
      <th>Subject</th>
      <th>Location</th>
      <th>Date</th>
    </tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            echo "<tr>
              <td>".$row['subjectp']."</td>".
              "<td>".$row['locationp']."</td>".
              "<td>".$row['datep']."</td>".
            "</tr>";
            
            if ($row["locationp"] == "Ontario"){
                echo "<img style=\"width: 20%; height: 20%\" src=\"". $row['urlp']."\"/><br>";                 
                echo "<p>Subject: ".$row['subjectp']." <br>Location: ".$row['locationp']."</p><br><br>";    
            }
        }
        echo "</table>";
    }
    else {
        echo "0 results";
    }


?>
</body>
</html>
