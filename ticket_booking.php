<?php

include ("db_connect.php") ;



     $input_148 = $_POST['input_148'];
     $input_149 = $_POST['input_149'];
      $input_150 = $_POST['input_150'];
      $input_160 = $_POST['input_160'];
      $input_161 = $_POST['input_161'];
      $input_172 = $_POST['input_172'];
      $input_37 = $_POST['input_37'];
      $input_124 = $_POST['input_124'];
      $input_38 = $_POST['input_38'];
     
    
 
      $insert = mysqli_query($connect, "INSERT INTO details (input_148, input_149, input_150, input_160, input_161, input_172, input_37, input_124, input_38) VALUES ('$input_148', '$input_149', '$input_150', '$input_160', '$input_161', '$input_172', '$input_37', '$input_124',' $input_38')");

     

      if($insert) {
        header('location: Rail_Ticket_Booking_Form.php');
      }
      else{
        echo ' 
     <script>
        alert("Password and Confirm Password does not match");
        window.location = "ruts.html";
     </script>  '
     ;      

      }
    
    



?>