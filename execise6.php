<?php 


$marks = array(
"john" => array
(
"physics" => 35,
"maths" => 30,
"chemistry"  => 39
),
"anthony" =>  array
(
"physics" => 30,
"maths" => 32,
"chemistry"  => 29
),
"eric" =>  array
(
"physics" => 31 ,
"maths" => 22,
"chemistry" => 39
)
);

/* $rows=count($marks);
echo $rows; */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>exercise6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   

</head>
<body>
  


 <!--    <p>Mark</p>
 <p>
     <?php
    //echo "<h1>".$marks["mark"]["physics"]."</h1>" ;
     
     ?>
 </p>
 <p>
     <?php 
     //foreach ($marks as $key => $value) {
        // echo $key. "<br>";
         //foreach ($value as $subject => $mark) {
            // echo "Subject = $subject - $mark <br> ";
        // }
     //}
     ?> 
 </p> --> 
 <div class="container">
     <div class="row">
     
  

   
     
        <?php
        
        
        foreach ($marks as $student => $subjects) {
            echo"<div class='card border border-danger' style='width: 18rem;'>";
           echo "<div class='card-body'>";
           echo "<h5 class='card-title'> $student </h5>";
           
            foreach ($subjects as $subject => $grade) {
                echo "<p class='card-text'> Subject = $subject - $grade </p> ";
            }
            echo " </div> </div>";
        }
        
        
         
         ?>
   
    
    
    
  </div>
</div>

     </div>
 </div>
 
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
</body>
</html>