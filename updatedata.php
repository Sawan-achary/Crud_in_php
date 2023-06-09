<?php
echo $stu_id= $_POST['sid'];
echo $stu_name= $_POST['sname'];
echo $stu_address= $_POST['saddress'];
echo $stu_class= $_POST['sclass'];
echo $stu_phone= $_POST['sphone'];


include "connection.php";
$sql = "UPDATE  student SET sname = '{$stu_name}', saddress = '{$stu_address}',sclass = '{$stu_class}' , sphone = '{$stu_phone}' where sid={$stu_id} ";
$data = mysqli_query($con,$sql) or die("query unsucessful");

header("Location: index.php");

mysqli_close($con);
?>