<?php
$link = mysqli_connect("127.0.0.1","root","","chencong");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// 查询语句

$sql1 = <<<SQL1
select * from study_list;
SQL1;
$result=$link->query($sql1);
$group_arr=[];
if($result){
    while ($row = $result->fetch_object()){
        $group_arr[] = $row;
    }
    $result->close();
}

echo json_encode($group_arr);

mysqli_close($link);
?>