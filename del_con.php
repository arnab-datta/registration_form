<?php
include('conn.php');
if(isset($_POST['sub']))
{
    $id = $_POST['id'];
    $del = "DELETE FROM student where id='$id'";
    $con->query($del);
    header("location:view.php");
}
?>