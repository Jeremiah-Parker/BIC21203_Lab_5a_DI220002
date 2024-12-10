<?php
     function areaRectangle($number1, $number2){
        return $number1*$number2;
     }
      
     $number1=4;
     $number2=2;
     $area=areaRectangle($number1, $number2);
     ?>


<!DOCTYPE html> 
    <html lang="en"> 
      <head> 
        <title>Lab 5a Q3</title> 
     </head> 
   <body> 

       <strong>
         <p>The area of rectangle with a width <?= $number1; ?> and height <?= $number2; ?> is <?= $area; ?></p>
        </strong>
    </body>

</html>