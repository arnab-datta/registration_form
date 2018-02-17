<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <p></p>
        <a href="index.htm" type="button" class="btn btn-success">Add New</a><p></p>
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $sel="SELECT * FROM student ORDER BY id DESC";
                  $rs=$con->query($sel);
                  while($row=$rs->fetch_assoc())
                      {
                ?>
                  <tr>
                    <td><?php  echo $row['name'];?></td>
                    <td><?php  echo $row['mail'];?></td>
                    <td><?php  echo $row['gender'];?></td>
                    <td><img src="upload/<?php echo $row['image'];  ?>" style="width: 75px;"></td>

                    <td>
                      <form action="del_con.php" method="post">
                        <input type="hidden" name="id" value="<?php  echo $row['id'];  ?>">

                        <input type="submit" class="btn btn-danger" name="sub" value="Delete" onclick="return confirm('Are you sure? want to delete');" >

                      </form>
                    </td>
                  </tr>

                    <?php
                      }
                  ?>
                </tbody>
              </table>

     </div>
</body>
</html>