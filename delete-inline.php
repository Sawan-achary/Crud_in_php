<?php

echo $stu_id=$_GET['id'];
echo "delete ";



include "connection.php";
$sql="delete  from student where sid= {$stu_id}";
$data= mysqli_query($con,$sql) or die("qurey unsucessfull");

header("Location: index.php");

mysqli_close($con);
?>