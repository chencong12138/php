<?php
$link = mysqli_connect("127.0.0.1", "root", "", "chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql1 = <<< SQL1
delete from study_list where id=?
SQL1;
$stmt=$link->prepare($sql1);
$stmt->bind_param("i",$_GET["id"]);

$stmt->execute();


mysqli_close($link);
?>