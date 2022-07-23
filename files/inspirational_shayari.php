<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta name="google-site-verification" content="K_9h4nIm1HVM2IMFM3KihWeLEym_D0RuGEL0OSAQoC0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="website.css">
<title>Motivational Shayari in hindi | Inspirational Shayari & Status</title>

<meta name="description" content="Inspirational Shayari. Motivation is always needed for successful life. Through motivational poetry,Best Motivational Shayari (For Students, Attitude, Success, Mehnat, Life, Waqt, Famous) 2 aur 4 Line ."/>

<meta name="keywords" content="motivational shayari english, success motivational shayari, motivational shayari for students, motivational shayari copy paste, love motivational shayari, motivational shayari"/>

<link rel="canonical" href="https://www.shayariindustry.com/inspirational_shayari.php/" />

<meta property="og:type" content="website" />

<meta property="og:url" content="https://www.shayariindustry.com/inspirational_shayari.php/" />

<meta property="og:site_name" content="Shayariindustry"/>

<meta property="og:description" content="Inspirational Shayari. Motivation is always needed for successful life. Through motivational poetry,Best Motivational Shayari (For Students, Attitude, Success, Mehnat, Life, Waqt, Famous) 2 aur 4 Line." />

<meta property="og:title" content="Motivational Shayari in hindi | Inspirational Shayari & Status"/>
<meta property="og:image" content="https://www.shayariindustry.com/shayariindustry.jpg" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<script> function shownav(x){ var a=document.getElementById("mainnav"); "menu"===a.className?a.className+=" resp":a.className="menu"; x.classList.toggle("change"); } </script>





</head>

<body>

   <!-- upper navbar -->

   <?php include 'navbar.php'; ?>


        <div class="site-content clearfix">
            <div class="sc-main">
                <div class="bradcrum">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        
                    </ol>
                </div>
                <div class="posts">
                    <h1>Inspirational shayari</h1>
                    <div class="">
                       
                    </div>
                   
                </div>


                <!-- post -->
<?php

require_once "dbhome.php";

if(isset($_GET['page'])){
    $page_no=$_GET['page'];
    $page_no=htmlentities($page_no);
}
else{
    $page_no=1;
}

$sql="SELECT discription,category  FROM shayari
WHERE category = 'inspiratonal shayari'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
// echo $count;
$per_page=4;
$pages=ceil($count/$per_page);
$offset=($page_no-1)*$per_page;
$sql="SELECT discription,category  FROM shayari
WHERE category = 'inspirational shayari' LIMIT $offset,$per_page";
$result=mysqli_query($con,$sql);
mysqli_set_charset($con,'utf8');
mysqli_query($con,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

if(mysqli_num_rows($result)){


}

else{
    header("location:inspirational_shayari.php");
}


while($row=mysqli_fetch_assoc($result)){

    $title=$row['discription'];
    $discription=$row['discription'];
    $str = mb_substr($title, 0, 26,'utf-8');
    $category=$row['category'];

    

    echo'  <div class="posts ">
                    <h2>'.$str.' ...</h2>
                    <p>'.$discription.'</p> 

                    <p class="post-meta" ><h>'. $category.'</h</p>
	
                   <br />
                    <hr>
                

                </div>';

            
}







?>  




                <div class="pagination clearfix">

           <?php



  


$start=($page_no-4);
switch($start){
    case 0:
        $start=1;
    case -1:
        $start=1;
    case -2:
        $start=1;
    case -3:
        $start=1;
};


$end=($page_no + 4);
  if($end>$pages){
      $end=$pages;
  }

  if($page_no>=2){

    echo '<a href="inspirational_shayari.php?page='.($page_no-1).'" class="prev">Prev</a>';
    

  }


  
  for($i=$start;$i<=$end;$i++){
      if($i==$page_no){
          $current="current";
      }
      else{
          $current="";
      }

       echo'
       <a href="inspirational_shayari.php?page='.$i.'"<li class=" '.$current.' ">'.$i.'</li></a>

       ';}


       if($page_no < $pages){

        


        echo '<a href="inspirational_shayari.php?page='.($page_no+1).'" class="next">Next</a>';


        
    }

   if($pages>1){
    

       echo '<span class="gap">&nbsp;&nbsp;</span>';
   }
  









?>
                </div>
            </div>



              <!-- footer link -->
              <?php include 'homefooter.php'; ?>

</div>








</body>

</html>
