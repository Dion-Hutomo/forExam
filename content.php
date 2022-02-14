<?php
    global $conn;
    $conn = new mysqli("172.19.0.2","root","trucorp10","Trucorp");
    if($conn->connect_error){
        die('connect error' . $conn->error);
    }
    $rows = array();
    $res = $conn->query("SELECT * FROM users");
    while($row = mysqli_fetch_assoc($res)){
        $rows [] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <table border="2">
            <tr>
                <th>ID(PK)</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
            <?php foreach ($rows as $row): ?>
            <tr id="results">
                <td><?= $row['id']?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['jabatan']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
