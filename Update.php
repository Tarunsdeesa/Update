<?php
include('connection.php');
if(isset($_GET['id']));
$id=$_GET['id'];

 $sql= "SELECT * FROM `form2` WHERE id = $id";
//$sql="UPDATE `form2` SET `name`='name',`email`='$email',`password`='password' WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
// print_r($row);
if(isset($_POST['submit'])){
  
  $name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

  $sql="UPDATE `form2` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = $id";
  $result = mysqli_query($conn,$sql);
  if($result){
    header('Location:display.php');
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $row['name']; ?>">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']; ?>">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $row['password']; ?>">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
</body>
</html>
