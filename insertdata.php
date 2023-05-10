<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "./connector.php";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $username=$_POST["username"];
    $gender=$_POST["gender"];
    $city=$_POST["city"];
    $terms=$_POST["terms"];

    $query="INSERT INTO personal_info(`name`,`email`,`username`,`password`,`gender`,`city`,`terms`)values('$name','$email','$username','$password','$gender','$city','$terms')";
     $result = $link->query($query);

  if($result){
    ?>
  <script>
    alert('Your data have sucessfully entred to database')
    window.location.href="index.php";

  </script>
    <?php
  }
?>
</body>
</html>