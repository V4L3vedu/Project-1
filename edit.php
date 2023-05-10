<?php
include "./connector.php";

$name=$_POST['name'];
$id=$_POST['id'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];

// echo"$city"



$query="UPDATE personal_info SET name='$name',city='$city',password='$password',username='$username',email='$email',gender='$gender' WHERE `id`=$id";
$restlt=mysqli_query($link,$query); 
if($restlt){
  
 ?>   
    <script>
      window.location.href="Table.php";

    </script>
<?php    
}else{     
    echo"decline";
}





?>