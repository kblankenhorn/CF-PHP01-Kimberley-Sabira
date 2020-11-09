<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Exercisses</title>
    <link rel ="stylesheet" href= "style.css">
</head>
<body>
<?php 
 
 $name="Kimberley";

echo "<h1>$name</h1>";
?>


<?php

//basic 2
$d= date ("D"); //current day
if($d == "Mon") 
    echo "Happy Monday";
    else  
        echo "Have a nice Day!";
       
    
?>

<br>

<?php
$d= date ("D"); //current day
if($d == "Mon") 
    echo "Today is Monday";
    elseif ($d =="Tue")
    echo "Today is Tuesday";
    elseif ($d =="Wed")
    echo "Today is Wednesday";
    elseif ($d =="Thur")
    echo "Today is Thursday";
    elseif ($d =="Fri")
    echo "Today is Friday";
    else 
    echo "Have a good Weekend!";
       


?>
<br>
<br>


<?php 
$name="Sabira";
for ($i=0; $i<10; $i++) 
echo "My name is : $name <br>";


?>
<br>
<br>


<?php 



$name="Kimberley";
$i=0;


while ($i<10) {
    $i++;
    echo ("My name is: $name <br>");
    

    

}



?>
<br>
<br>

<?php 
$i=0;
$name="Theo";
do {
    $i++;
    echo "My name is $name <br>";

}
while ($i<10);


?>
<br>
<br>

<?php
$numbers= array (1,2,3,4,5,6,7,8,9,10);
foreach ($numbers as $value)
{
    echo "Number $value <br>";

}
?>

    
</body>
</html>