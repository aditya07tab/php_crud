<?php
include'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
  if ($result) {
   // echo "Updated successfully";
   header('location:display.php');
  }else {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

     
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control"
     placeholder="enter your name" name="name" autocomplete="off" value=<?php
     echo $name;?> >
     </div>
    
     <div class="form-group">
    <label >email</label>
    <input type="text" class="form-control"
     placeholder="enter your email" name="email" autocomplete="off" value=<?php
     echo $email;?> ></div>

     <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"
     placeholder="enter your mobile number" name="mobile" autocomplete="off" value=<?php
     echo $mobile;?> ></div>

     <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control"
     placeholder="enter your password" name="password" autocomplete="off" value=<?php
     echo $password;?> ></div>

  <button type="submit" class="btn btn-primary"name="submit">
    Update</button>
</form>
   </div>
    
  </body>
</html>