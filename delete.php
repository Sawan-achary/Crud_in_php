<?php include 'header.php'; 

if(isset($_POST['deletebtn']))
{
    include "connection.php";
    $stu_id= $_POST['sid'];


    $sql="delete  from student where sid= {$stu_id}";
    $data= mysqli_query($con,$sql) or die("qurey unsucessfull");
    header("Location: index.php");
    mysqli_close($con);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

</div>
</div>
</body>
</html>
