<!DOCTYPE html>
<html lang="en-IN">
<head>
 
<meta name="google-site-verification" content="K_9h4nIm1HVM2IMFM3KihWeLEym_D0RuGEL0OSAQoC0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<title>[50+] Desh Bhakti Shayari in Hindi (MAY 2022) | देशभक्ति शायरी | Latest Deshbhakti Shayari</title>

<meta name="description" content="esh bhakti shayari हमारे देश की Indian army ने बहुत से सफलतायो के द्वारा हमारे देश में लोगो में deshbhakti के प्रति एकजूट किया है इसलिए आज desh bhakti shayari."/>

<meta name="keywords" content="शहीद देश भक्ति शायरी, देशभक्ति शायरी कविता ,जोश भर देने वाली,देशभक्ति शायरी ,देश भक्ति शायरी पाकिस्तान के खिलाफ, देश भक्ति शायरी हिंदी में लिखी हुई,new desh bhakti shayari"/>

<link rel="canonical" href="https://www.shayariidustry.com/deshbhakti_shayari.php/" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.shayariindustry.com/deshbhakti_shayari.php/" />
<meta property="og:site_name" content="Shayariindustry"/>
<meta property="og:description" content="Best Love Shayari in Hindi, True Love Status with image, Top Love Sms For Girlfriend, Boyfriend, Wife, Husband, Hindi Love Shayari For Lovers." />
<meta property="og:title" content="Latest Love Shayari in Hindi, True Love Status, Best Love Sms"/>
<meta property="og:image" content="https://www.shayariindustry.com/uploads/shayariindustry.jpg" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind" >
<?php include "personal_files/website_css.html"; ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<script> function shownav(x){ var a=document.getElementById("mainnav"); "menu"===a.className?a.className+=" resp":a.className="menu"; x.classList.toggle("change"); } </script>





</head>

<body>

   <!-- upper navbar -->

   <?php include "personal_files/navbar.php"; ?>


        <div class="site-content clearfix">
            <div class="sc-main">
                <div class="bradcrum">
                    <ol>
                        <li><a href="https://shayariindustry.com/index.php">Home</a></li>
                        
                    </ol>
                </div>
                <div class="posts">
                    <h1>Deshbhakti shayari</h1>
                    <div class="">
                       
                    </div>
                   
                </div>


                <!-- post -->
<?php
require_once "personal_files/dbhome.php";

if (isset($_GET["page"])) {
    $page_no = $_GET["page"];
    $page_no = htmlentities($page_no);
} else {
    $page_no = 1;
}

$sql = "SELECT discription,category  FROM shayari
WHERE category = 'deshbhakti shayari'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
// echo $count;
$per_page = 8;
$pages = ceil($count / $per_page);
$offset = ($page_no - 1) * $per_page;
$sql = "SELECT * FROM shayari
WHERE category = 'deshbhakti shayari' LIMIT $offset,$per_page";
$result = mysqli_query($con, $sql);
mysqli_set_charset($con, "utf8");
mysqli_query(
    $con,
    "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"
);

if (mysqli_num_rows($result)) {
} else {
    header("location:deshbhakti_shayari.php");
}

include "personal_files/shayari_row.php";
?>  




                <div class="pagination clearfix">

           <?php
           $start = $page_no - 4;
           switch ($start) {
               case 0:
                   $start = 1;
               case -1:
                   $start = 1;
               case -2:
                   $start = 1;
               case -3:
                   $start = 1;
           }

           $end = $page_no + 4;
           if ($end > $pages) {
               $end = $pages;
           }

           if ($page_no >= 2) {
               echo '<a href="https://shayariindustry.com/deshbhakti_shayari.php?page=' .
                   ($page_no - 1) .
                   '" class="prev">Prev</a>';
           }

           for ($i = $start; $i <= $end; $i++) {
               if ($i == $page_no) {
                   $current = "current";
               } else {
                   $current = "";
               }

               echo '
       <a href="https://shayariindustry.com/deshbhakti_shayari.php?page=' .
                   $i .
                   '"<li class=" ' .
                   $current .
                   ' ">' .
                   $i .
                   '</li></a>

       ';
           }

           if ($page_no < $pages) {
               echo '<a href="https://shayariindustry.com/deshbhakti_shayari.php?page=' .
                   ($page_no + 1) .
                   '" class="next">Next</a>';
           }

           if ($pages > 1) {
               echo '<span class="gap">&nbsp;&nbsp;</span>';
           }
           ?>
                </div>
            </div>



              <!-- footer link -->
              <?php include "personal_files/homefooter.php"; ?>

</div>








</body>
<?php include "personal_files/header.html"; ?> 
</html>

