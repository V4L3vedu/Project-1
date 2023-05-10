<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="common.css">
    <script src="bootstrap.js"></script>
    <style>
    #ans{
    visibility: hidden;
   }
   #tems{
    visibility: hidden;

   }
   #none{
   display:none;
   transition: 4s;
  }
  .c{
    position: absolute;
    left: 328px;
    top: 210px;
    height: 28px;
    width: 4%;

  }
    </style>
</head>
<body>
<script>
  function male(){
    var male="Male"
  document.getElementById('ans').value = male;
  }
  function female(){
    var male="Female"
  document.getElementById('ans').value = male;
  }
  function accept(){
        if(document.getElementById("Check").checked==true)
      document.getElementById("btn").disabled = false;
   

  }
  function deline(){
        if(document.getElementById("Check").checked==false)
      document.getElementById("btn").disabled = true;
      var tru="True"
      document.getElementById('tems').value = tru;
  }
  function viem(){
    const i = document.querySelector(".f");
if (i.getAttribute("type") === "password") {
  i.setAttribute("type", "text");
  document.getElementById("none").style.display="block";
  document.getElementById("none1").style.display="none";
} else {
  i.setAttribute("type", "password");
  document.getElementById("none1").style.display="block";
  document.getElementById("none").style.display="none";
}
  }

</script>

<form action="insertdata.php" id="form1" method="POST">
  <input type="text" id="ans" name="gender">
  <input type="text" id="tems" name="terms">
  <div class="main_box">
    <div class="photo">
        <img src="school.jpeg" alt="" height="500px" width="100%">
    </div>  
    <div class="con">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required name="email">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
   
      <div class="c">
      <img src="stack-overflow.svg" onclick="viem()" height="25px" width="100%" id="none1">
        <img src="stack.svg" onclick="viem()" height="25px" width="100%" id="none">
        
        
        
    </div>

      <input type="password" class="form-control f" id="inputPassword4" placeholder="Password" required name="password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" id="inputAddress" required name="name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Username</label>
    <input type="text" class="form-control" id="inputAddress2"required name="username">
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required name="city">
    </div>
   <div class="male"> 
    <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" onclick="male()">
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" onclick="female()">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>

    </div>
    </div>
</div>
    <br>
  <div class="form-group" onclick="accept()" onchange="deline()">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="Check" >
      <label class="form-check-label" for="gridCheck">
        Aceept Terms
     </label>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary"  id="btn" disabled>Submit</button>
  <button type="reset" class="btn btn-primary" >Reload</button>
  
</div> 
</div>      
</form>
<center>
<button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='table.php'">Veiw Table</button>
</center>   






</body>
</html>