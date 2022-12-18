<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include "personal_files/header.html" ?> 
<meta name="google-site-verification" content="K_9h4nIm1HVM2IMFM3KihWeLEym_D0RuGEL0OSAQoC0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="personal_files/website.css">
<title>Latest Two Line Shayari | Short Hindi Shayari-दो लाइन शायरी</title>

<meta name="description" content="Two Line Shayari, Hello friends ! Read HereTwo lines shayari is the best collection in hindi poetry who attract you."/>

<meta name="keywords" content="2 line love shayari in hindi, two line shayari attitude, 1 line shayari in hindi, ishq two line shayari, two line shayari english, 2 line shayari feel the word"/>

<link rel="canonical" href="https://www.shayariindustry.com/twoline_shayari.php/" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.shayariindustry.com/twoline_shayari.php/" />
<meta property="og:site_name" content="Shayariindustry"/>

<meta property="og:description" content="Two Line Shayari, Hello friends ! Read HereTwo lines shayari is the best collection in hindi poetry who attract you." />

<meta property="og:title" content="Latest Two Line Shayari | Short Hindi Shayari-दो लाइन शायरी"/>
<meta property="og:image" content="https://www.shayariindustry.com/shayariindustry.jpg" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<script> function shownav(x){ var a=document.getElementById("mainnav"); "menu"===a.className?a.className+=" resp":a.className="menu"; x.classList.toggle("change"); } </script>





</head>

<body>

   <!-- upper navbar -->

   
   <?php include 'personal_files/navbar.php'; ?>


        <div class="site-content clearfix">
            <div class="sc-main">
                <div class="bradcrum">
                    <ol>
                        <li><a href="https://shayariindustry.com/index.php">Home</a></li>
                        
                    </ol>
                </div>
                <div class="posts">
                    <h1>Two Linw shayari</h1>
                    <div class="">
                       
                    </div>
                   
                </div>


                <!-- post -->
<?php

require_once "personal_files/dbhome.php";

if(isset($_GET['page'])){
    $page_no=$_GET['page'];
    $page_no=htmlentities($page_no);
}
else{
    $page_no=1;
}

$sql="SELECT discription,category  FROM shayari
WHERE category = 'two line shayari'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
// echo $count;
$per_page=7;
$pages=ceil($count/$per_page);
$offset=($page_no-1)*$per_page;
$sql="SELECT *  FROM shayari
WHERE category = 'two line shayari' LIMIT $offset,$count";
$result=mysqli_query($con,$sql);
mysqli_set_charset($con,'utf8');
mysqli_query($con,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

if(mysqli_num_rows($result)){


}

else{
    header("location:twoline_shayari.php");
}


include "personal_files/shayari_row.php";



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

    echo '<a href="https://shayariindustry.com/twoline_shayari.php?page='.($page_no-1).'" class="prev">Prev</a>';
    

  }


  
  for($i=$start;$i<=$end;$i++){
      if($i==$page_no){
          $current="current";
      }
      else{
          $current="";
      }

       echo'
       <a href="ttps://shayariindustry.com/twoline_shayari.php?page='.$i.'"<li class=" '.$current.' ">'.$i.'</li></a>

       ';}


       if($page_no < $pages){

        


        echo '<a href="ttps://shayariindustry.com/twoline_shayari.php?page='.($page_no+1).'" class="next">Next</a>';


        
    }

   if($pages>1){
    

       echo '<span class="gap">&nbsp;&nbsp;</span>';
   }
  









?>
                </div>
            </div>



              <!-- footer link -->
              <?php include 'personal_files/homefooter.php'; ?>

</div>








</body>

</html>