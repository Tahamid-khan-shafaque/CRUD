
<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];



    $sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
  
    }
}
?>











<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
 
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name">
</div>

<div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email">
</div>

<div class="mb-3">
    <label  class="form-label">Mobile number</label>
    <input type="text" class="form-control" placeholder="Enter your number" name="mobile">
</div>

<div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password">
</div>



  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>

  </body>
</html>