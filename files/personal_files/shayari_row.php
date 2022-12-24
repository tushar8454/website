<?php
while($row=mysqli_fetch_assoc($result)){

    $sno=$row['sno'];
    $title=$row['discription'];
    $discription=$row['discription'];
    $str = mb_substr($title, 0, 25,'utf-8');
    $category=$row['category'];
    $images=$row['images'];
    
          echo'  <div class="posts ">
                <h2>'.$str.' ...</h2>
                <p>'.$discription.'</p>
    
                 
    
                ';
    
            if($images!=null){
    echo '<p><img src="'.$images.'" alt="Abhi Aaye Abhi Baithe - True Love Shayari" width="640" height="480" /></p>';
            }
    
            echo '<p class="post-meta" ><h>'. $category .'</h</p>
    
            <br />
            <p class="post-meta" ><h>'. $sno .'</h</p>
             <hr>
         
    
         </div>';
    
            
            
        
    }
?>