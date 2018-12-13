<?php
$link = mysqli_connect("127.0.0.1", "root", "", "chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// 创建表单



$sql1 = <<<SQL1
create table study_list(
    id INT NOT NULL AUTO_INCREMENT,
    dosomething VARCHAR(32),
    PRIMARY KEY ( id )
 );
SQL1;
 $link->query($sql1);



mysqli_close($link);
?>