<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="refresh" content="300" > 
    <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <style>
        img{
            width: 40%;
            height: 50%;
            position: absolute;
            left: 15%;
        }
        body{
            text-align: center;
            background-color: pink;
        }
        h2{
            position: absolute;
            right: 15%;

        }
    </style>
</head>
<body>
    <h1>Nathalie Ng ID: 500921963</h1><br><br>

    <?php 
        $xml=simplexml_load_file("lab081.xml") or die("Error: Cannot create object");
        $url = $xml -> data -> item -> track -> imageurl;
        echo "<img src=" . $url . ">";   
        echo "<h2> Artist(s): " . $xml -> data -> item -> track -> artist . "</h2><br><br>";
        echo "<h2> Song Name: " . $xml -> data -> item -> track -> title . "</h2>";
    ?>
</body>
</html>