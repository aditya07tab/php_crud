<?php
include'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="insert into `crud`(name,email,mobile,password)
  values('$name','$email','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if ($result) {
   // echo "Data inserted successfully";
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
     placeholder="enter your name" name="name" autocomplete="off"></div>
    
     <div class="form-group">
    <label >email</label>
    <input type="text" class="form-control"
     placeholder="enter your email" name="email" autocomplete="off"></div>

     <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"
     placeholder="enter your mobile number" name="mobile" autocomplete="off"></div>

     <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control"
     placeholder="enter your password" name="password" autocomplete="off"></div>

  <button type="submit" class="btn btn-primary"name="submit">
    Submit</button>
</form>
   </div>
    
  </body>
</html>