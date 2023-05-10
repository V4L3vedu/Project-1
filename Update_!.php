<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="common.css">
    <script src="edit.js"></script>
    <style>
      #vis{
    visibility: hidden;

   }
   #vis1{
    visibility: hidden;

   }
    </style>

</head>
<body>



     
  <?php
    include "./connector.php";
    
     
     $name= $_GET["name"];
    //  $name1=$name;
   



      
  $query="SELECT * FROM personal_info WHERE `name` = '$name'";
  $result = $link->query($query);
  $data=mysqli_fetch_assoc($result);

  $email=$data['email'];
  $password=$data['password'];
  $username=$data['username'];
  $city=$data['city'];
  $gender=$data['gender'];
  $id=$data['id'];
?>
<form action="edit.php" method="POST">
  <div class="main_box">
    <div class="photo">
        <img src="school.jpeg" height="500px" width="100%">
    </div>  
    <div class="con">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" value="<?php echo $id ?>" name="id" id="vis"><br>
      <label for="inputEmail4">Email</label>

      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required name="email" value=<?php  echo $email;  ?>>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Password" required name="password" value=<?php  echo $password;  ?>>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" id="inputAddress" required name="name" value="<?php echo $name ?>" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Username</label>
    <input type="text" class="form-control" id="inputAddress2"required name="username" value=<?php  echo $username;  ?>>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required name="city" value=<?php  echo $city;  ?>>
    </div>

    <input type="text" value="<?php  echo $gender;?>" name="gender"  id="vis1">
    <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>

    </div>
    </div>
    <br>
  
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</div> 
</div>      
</form>


<script>
   var a= document.getElementById('vis1').value;
    // alert(a);
  if(a=='Male'){
    document.getElementById('exampleRadios1').checked=true;
  }else{
    document.getElementById('exampleRadios2').checked=true;

  }
  
</script>

</body>
</html>