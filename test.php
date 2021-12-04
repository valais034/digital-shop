<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>untitled</title>
</head>
<body>
<?php
require_once 'connection.php';
$sql = "SELECT * FROM 'vitrin_tbl'";
$pre = $connect->prepare($sql);
$pre->execute();
while ($result = $pre->fetch(PDO::FETCH_ASSOC)) {
    $img = $result['img'];
    echo $img;
}
?>
</body>
</html>
