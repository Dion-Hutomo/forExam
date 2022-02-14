<?php
    global $conn;
    $conn = new mysqli("172.19.0.2","root","trucorp10","Trucorp");
    if($conn->connect_error){
        die('connect error' . $conn->error);
    }
    $rows = array();
    $count = 0;
    $res = $conn->query("SELECT * FROM users");
    while($row = mysqli_fetch_assoc($res)){
        $rows [] = $row;
        $count++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <?php echo "Total Users: ".$count?>
    </div>
</body>
</html>
