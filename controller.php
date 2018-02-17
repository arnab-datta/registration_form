<?php

include('conn.php');

if(isset($_POST['sub']))
{
  $tm=time();
  $img=$tm.$_FILES['image']['name'];
  $tmp=$_FILES['image']['tmp_name'];
  move_uploaded_file($tmp,"upload/".$img);

  $name = $_POST['name'] ;
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $pass = md5($_POST['pwd']);


   $ins = "INSERT INTO student SET name='$name', mail='$email', gender='$gender', password='$pass', image='$img' ";
   $con->query($ins);
  header("location:view.php");
}

else
{
 header("location:index.htm");
}

?> 