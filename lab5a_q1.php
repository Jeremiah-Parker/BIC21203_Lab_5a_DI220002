<!DOCTYPE html> 
    <html lang="en"> 
      <head> 
        <title>Lab 5a Q1</title> 
     </head> 
   <body> 
     <?php  
       $name = "Jeremiah De Howard Chai"; 
       $matricnumber="DI220002";
       $course="Bachelor of Computer Science(Web Technology) with Honours";
       $yearstudy=3;
       $address="Ampang,Selangor";
      ?> 
     <table> 
       <tr> 
        <td>Name:</td> 
        <td><?php echo "$name"; ?></td>  
      </tr> 
      <tr> 
        <td>Matric number:</td> 
        <td><?php echo "$matricnumber"; ?></td>  
      </tr> 
      <tr> 
        <td>Course:</td> 
        <td><?php echo "$course"; ?></td>  
      </tr> 
      <tr> 
        <td>Year of study:</td> 
        <td><?php echo "$yearstudy"; ?></td>  
      </tr> 
      <tr> 
        <td>Address:</td> 
        <td><?php echo "$address"; ?></td>  
      </tr> 
     </table> 
    </body> 
</html>