<?php  include "./connector.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
      .button_edit{
        position: absolute;
         left: 89%;
      }
      #select_form{
        width:500px;
        display:none;
        position: absolute;
        top:200px;
        left:400px;
      }
      .space{
        position: absolute;
        top:5px;
        left:420px;
      }
      .spa{
        position: absolute;
    top: 28px;
    left: 1130px;
      }
      .s{
         position: absolute;
           top: 5px;
          left: 340px;
      }
      .d{
        position: absolute;
       top: 5px;
          left: 420px;
      }
    </style>
</head>
<body>
<button type="reset" class="btn btn-primary spa" onclick="window.location.href='Table.php'" >Refresh</button>
<!-- <button onclick="mouse(event)">click</button> -->
  
<form action="Update_!.php" method="POST" id="select_form">
<div class="edit_form">  
<select class="form-control form-control-lg" id="name">
<option selcted>Select the Name to edit data</option>

<?php 
 
 $query="SELECT * FROM personal_info";
 $result = $link->query($query);
while ($data=mysqli_fetch_assoc($result))
{
 ?>
          <option value="<?php echo $data["name"]?>"><?php echo $data["name"]?></option>
     
        <?php
}

    ?>
       </select>
       
</div>
<button type="button" class="btn btn-primary s" onclick="edit()">Submit</button>
<button type="button" class="btn btn-danger d" onclick="document.getElementById('select_form').style.display='none'">Close</button>

</form>

  <br>

<button type="button" class="btn btn-secondary btn-lg button_edit" onclick="mouse(event)" >Edit</button>
<br><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">City</th>
      <th scope="col">Terms</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <?php 
 
  $query="SELECT * FROM personal_info";
  $result = $link->query($query);
  while ($data=mysqli_fetch_assoc($result))
{
  ?>
  <tbody>
    <tr>
      <th><?php echo $data["name"]?></th>
      <td><?php echo $data["username"]?></td>
      <td><?php echo $data["email"]?></td>
      <td><?php echo $data["password"]?></td>
      <th><?php echo $data["gender"]?></th>
      <td><?php echo $data["city"]?></td>
      <td><?php echo $data["terms"]?></td>
      <td><a onclick='delet(<?php echo $data["id"];?>)' href="">Delete</a></td>
    </tr>
    <?php
}
?>
<tr>
 <td><a href="index.php">Add New</a></td>
</tr>
  </tbody>
</table>


<script>
 
  function edit(){
  var name= document.getElementById('name').value;
    window.location.href="Update_!.php?name="+name;
}

function delet(id){
  var s=confirm('Are you want to delete the data');

  if(s){
    window.location.href="delete.php/?id="+id;
  }
}



document.onkeyup = function(e) {
  if( e.which == 69 ){
    document.getElementById('select_form').style.display="block";
  }
    
  
}

var a=document.onmousedown = mouse     
      function mouse(event) {
      
          if (event.button == 0) {
            document.getElementById('select_form').style.display="block";
          }else{
            window.location.href="index.php"
          }
          
    };


</script>
</body>
</html>