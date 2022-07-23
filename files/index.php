<?php

require_once "dbhome.php";
?>
<!DOCTYPE html>
<html lang="en-IN">

<head>
<link rel="stylesheet" href="website.css">

<meta name="google-site-verification" content="K_9h4nIm1HVM2IMFM3KihWeLEym_D0RuGEL0OSAQoC0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel ="icon" href="shayariindustry.jpg" type="image/x-icon">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Latest Hindi Shayari & Ghazal, True Love Shayari, Best Shayari in Hindi</title>
    <meta name="description"
        content="Best Love Shayari in Hindi, best Ghazal in Hindi, Attitude Shayari,Sad Shayari,Bewafa Shayari, girlfriend, Wife, boyfriend, Hindi Love Shayari For Lovers." />

    <meta name="keywords" content="Best Love Shayari, Best Ghazal, New Hindi Shayari, Sad shayari" />

    <link rel="canonical" href="https://shayariindustry.com/love_shayari.php" />

    <meta property="og:type" content="website" />

    <meta property="og:url" content="https://www.shayariindustry.com/love_shayari/" />

    <meta property="og:site_name" content="Shayariindustry" />

    <meta property="og:description"
        content="Best Love Shayari in Hindi, best Ghazal in Hindi, Attitude Shayari, girlfriend, Wife, boyfriend, Hindi Love Shayari For Lovers." />

    <meta property="og:title" content="Best Love Shayari, Best Ghazal, New Hindi Shayari, Sad shayari" />

    <meta property="og:image" content="https://www.shayariindustry.com/shayariindustry.jpg" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <script>
    function shownav(x) {
        var a = document.getElementById("mainnav");
        "menu" === a.className ? a.className += " resp" : a.className = "menu";
        x.classList.toggle("change");
    }
    </script>
   
    
   
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
                    <h1>Best  Shayari</h1>
                    <div class="">
                       
                    </div>
                    <p>Welcome to Shayari Industry(shayariindustry.com) . Sometimes poetry(shayari)is the best companion and it can heal every wound .This is the perfect place for every emotion a human can have . Here, you'll get every type of shayari  sad,happy ,alone ,long shayari and short shayari ,etc . So ,why wait go and click on the category on the basis of your feeling and emotion .We hope you like our content . Suggestions are always open ,you can mail us .Thank you ❤️❤️
                    </p>
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

$sql="SELECT *FROM shayari";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$per_page=5;
$pages=ceil($count/$per_page);
$offset=($page_no-1)*$per_page;
$sql="SELECT *FROM shayari LIMIT $offset,$per_page";
$result=mysqli_query($con,$sql);
mysqli_set_charset($con,'utf8');
mysqli_query($con,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

if(mysqli_num_rows($result)){


}

else{
    header("location:pagen.php");
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

    echo '<a href="index.php?page='.($page_no-1).'" class="prev">Prev</a>';
    

  }

  
  for($i=$start;$i<=$end;$i++){
      if($i==$page_no){
          $current="current";
      }
      else{
          $current="";
      }

       echo'
       <a href="index.php?page='.$i.'"<li class=" '.$current.' ">'.$i.'</li></a>

       ';}


       if($page_no < $pages){

       

        echo '<a href="index.php?page='.($page_no+1).'" class="next">Next</a>';


        
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

