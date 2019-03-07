<?php
    include "db_connect.php";        

    $sql_querie = "SELECT beer_id, name, image, price, procent, type, country FROM beer ORDER BY price ASC";
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="cards debug">' .
       
            
             
             '<img src="' . $row['image'] . '" alt="' . '" style="width: 50%">' .         
             '<h4>' . $row['name']  .'</h4>' .
             '<h4>'. '€'  . $row['price']  .'</h4>' .
             '<h4>' . $row['procent'] . '%' .'</h4>' .
             '<h4>' . $row['country']  .'</h4>' .
             '<h4>' . $row['type']  .'</h4>' .
           
            '</div>';
    }   
           
 
    $conn = null;
    
?>       
        