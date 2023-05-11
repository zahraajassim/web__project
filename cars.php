<?php
include("config.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carssn2.css">
</head>
<body>
    


 
    <section id="teacher" class="teacher"> 
        
        <h1 class="heading">CARS</h1> 
        <h3 class="title">chose your car</h3> 
        
        <div class="card-container"> 
            
            <div class="card"> 
                
                <img src="77.jpg" alt=""> 
              
                <table class="ta" border="0">






                <?php

$sql =  "SELECT * FROM cars";
$req = mysqli_query($conn ,$sql);
if(mysqli_num_rows($req) == 0){
    echo "not successful" ;
    
}else {
    while($row=mysqli_fetch_assoc($req)){

  ?>
        

















                    <tr>


                        <td>

                       car name :<?=$row['car_name']?>
                        
                        </td>
                        
                        <td>

                     car model   :<?=$row['car_model']?>
                        
                        </td>



                    </tr>



                    <tr>


                        <td>

                     number of seat :  <?=$row['number_of_seat']?>
                        
                        </td>
                        <td>

                     Doors :  <?=$row['Doors']?>
                        
                        </td>



                    </tr><br>
                    <tr>
                        <td><?=$row['price']?>$</td>
                    </tr>

           </table>
        
                <div class="b2"> 
                    
                            <br />
                         <div>
                             <a href="booking2n2.html">rent now</a></div>
                    
                </div> 
            
            </div> 
              
            <div class="card"> 
                
                <img src="78.jpg" alt=""> 
               
                <table class="ta" border="0">

                  


                <tr>


<td>

car name :<?=$row['car_name']?>

</td>

<td>

car model   :<?=$row['car_model']?>

</td>



</tr>



<tr>


<td>

number of seat :  <?=$row['number_of_seat']?>

</td>
<td>

Doors :  <?=$row['Doors']?>

</td>



</tr><br>
<tr>
<td><?=$row['price']?>$</td>
</tr>

                </table>
                
                <div class="b2"> 
                   
                            <div>
                                <a href="booking2n2.html">rent now</a>
                            </div>
                   
                </div> 
            
            </div>
            
            

            
            <div class="card"> 
                
                <img src="79.jpg" alt=""> 
                
                <table class="ta" border="0">

                   


                <tr>


<td>

car name :<?=$row['car_name']?>

</td>

<td>

car model   :<?=$row['car_model']?>

</td>



</tr>



<tr>


<td>

number of seat :  <?=$row['number_of_seat']?>

</td>
<td>

Doors :  <?=$row['Doors']?>

</td>



</tr><br>
<tr>
<td><?=$row['price']?>$</td>
</tr>

                </table>
                
                <div class="b2"> 
                   
                            <div>
                                <a href="booking2n2.html">rent now</a>
                            </div>
                      
                </div> 
            
            </div>
            
             
            <div class="card"> 
                
                <img src="80.jpg" alt=""> 
                
                <div>

                    <table class="ta" border="0">

                       


                    <tr>


<td>

car name :<?=$row['car_name']?>

</td>

<td>

car model   :<?=$row['car_model']?>

</td>



</tr>



<tr>


<td>

number of seat :  <?=$row['number_of_seat']?>

</td>
<td>

Doors :  <?=$row['Doors']?>

</td>



</tr><br>
<tr>
<td><?=$row['price']?>$</td>
</tr>

                    </table>


                </div>
                
                <div class="b2"> 
                   
                           
                            <div>
                                <a href="booking2n2.html">rent now</a>
                            </div>
                       
                </div> 
            
            </div>
            
        <?php
                }
            }

?>
        </div> 
        
    </section> 



</body>
</html>
