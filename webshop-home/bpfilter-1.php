<?php
    include "db_connect.php";        

    $sql_querie = "SELECT name, image, price FROM beerpack ORDER BY price DESC";
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="cards debug">' .
       
            
             
             '<img src="' . $row['image'] . '" alt="' . '" style="width: 50%">' .         
             '<h4>' . $row['name']  .'</h4>' .
             '<h4>'. '€'  . $row['price']  .'</h4>' .
             
            '</div>';
    }   
           
 
    $conn = null;
    
?>       
        