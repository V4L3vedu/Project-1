<?php
    include "./connector.php";
    $name=$_GET["id"];
    // echo $name;
    $query="DELETE FROM personal_info WHERE id='$name' ";

     $result = $link->query($query);

     if($result){
  
      ?>   
         <script>
           window.location.href="Table.php";
         </script>
     <?php    
     }else{     
         echo"decline";
     }
     
  ?>
