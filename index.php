<?php
include "header.php";
?>
<div id="main-content">
    <h2>All record</h2>
    <?php
     include "connection.php";
    $sql="select * from student as s JOIN student_class as sc where s.sclass=sc.cid";
    $data= mysqli_query($con,$sql) or die("qurey unsucessfull");
    // echo $data;  -> Fatal error: Uncaught Error: Object of class mysqli_result could not be converted to string in D:\mylocalhost\crud\index.php:15 Stack trace: #0 {main} thrown in D:\mylocalhost\crud\index.php on line 15

    if(mysqli_num_rows($data) > 0){
   
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($data)){
            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname']  ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'>Delete</a>
                </td>
            </tr>
           <?php
           }
           ?>
        </tbody>
    </table>
    <?php
    }
    mysqli_close($con);
    ?>
</div>