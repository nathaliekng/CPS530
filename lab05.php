<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php session_start(); 
    if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views']+ 1;
    else
        $_SESSION['views'] = 1;
    echo "Visits from current user = ". $_SESSION['views'];
    echo "<br>"
    ?>
    Enter the number 
    <form action="process.php" method="post">
        Row:<input name = 'row' type="text">
        Col:<input name = 'col' type="text">
        <input type="submit">
    </form>
</body>
</html>