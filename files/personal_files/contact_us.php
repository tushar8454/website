<?php

$con = mysqli_connect('localhost','phpmyadmin','Tushar@8454','contactu_us');
$msg="";


    
   


if(!$con){
    die("sorry we failed".mysqli_connect_error());
}



else{

    if(isset($_POST['submit'])){
        

      

        $name=$_POST['name'];
        $name=htmlentities($name);

    $email=$_POST['email'];
    $email=htmlentities($email);

    $phone=$_POST['phone'];
    $phone=htmlentities($phone);

    $message=$_POST['message'];
    $message=htmlentities($message);
    
    

    $sql="INSERT INTO `contact_us` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";

    // $sql="INSERT INTO `contactus` ( `name`, `text`, `dt`) VALUES ( '$name', '$desc', current_timestamp())";

    $result=mysqli_query($con,$sql);

    
        }
}

$rows="SELECT *FROM contact_us";
$rowcount=mysqli_query($con,$rows);

$count=mysqli_num_rows($rowcount);
// echo $count;

if($count>=400){
  
    $deletequery="DELETE FROM `contact_us` WHERE 500";
    $delete=mysqli_query($con,$deletequery);

}


?>






<!DOCTYPE html>
<html lang="en-IN">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Contact us - Shayarify.com</title>
    <meta name="description" content="You can reach to us by submitting this Contact us form." />
    <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    function shownav(x) {
        var a = document.getElementById("mainnav");
        "menu" === a.className ? a.className += " resp" : a.className = "menu";
        x.classList.toggle("change");
    }
    </script>

    <style>
    .option {
        text-align: center;
    }

    .new-button {
        padding: 15px 25px;
        font-size: 18px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #333;
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px #999;

    }

    .new-button:hover {
        background: #f90;
        color: #fff;
    }

    .new-button:active {
        background-color: #f90;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    </style>
    <style>
    html {
        font-family: Hind, sans-serif;
        font-size: 16px
    }

    a,
    body,
    div,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    html,
    ol,
    p,
    ul {
        margin: 0;
        padding: 0
    }

    body {
        background: #efefef
    }

    li {
        list-style: none
    }

    a {
        text-decoration: none
    }

    .clearfix {
        overflow: auto
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table
    }

    .page {
        margin: 0 auto;
        max-width: 1120px;
        background: #fff
    }

    .error {
        background: #ffe5e5;
        margin: 12px 0;
        padding: 6px 12px;
        border: 1px solid #ffb2b2;
        border-radius: 2px
    }

    .ads {
        margin-top: 12px;
        margin-bottom: 16px;
        min-height: 90px;
        min-width: 125px;
        text-align: center
    }

    .ad-topbanner {
        margin: 6px 0;
        width: 728px;
        height: 90px;
        float: right
    }

    .ad-post {
        margin-left: 3%;
        margin-right: 3%
    }

    .ad-sb {
        margin: 6px auto;
        width: 100%;
        height: 250px
    }

    .ad-label {
        font-size: .8rem;
        color: #999;
        display: block;
        border-bottom: 1px solid #eee
    }

    .site-topbar {
        background: #333;
        overflow: hidden
    }

    .st-top-nav {
        float: right
    }

    .st-top-nav li {
        display: inline-block
    }

    .st-top-nav li a {
        padding: 6px 12px;
        color: #ccc;
        font-size: .8rem;
        display: block
    }

    .st-top-nav li a:hover {
        color: #fff
    }

    .logo {
        max-width: 200px;
        margin: 22px 12px 22px 22px;
        float: left
    }

    .site-nav {
        background: #333;
        position: relative;
        box-shadow: 0 8px 6px -6px #666
    }

    .menu {
        overflow: hidden
    }

    .menu li {
        float: left
    }

    .menu a {
        color: #eee;
        display: inline-block;
        padding: 8px 16px
    }

    .menu a:hover {
        background: #f90;
        color: #fff
    }

    .sform {
        position: absolute;
        right: 0;
        top: 0;
        background: red
    }

    .sbox,
    .sbut {
        height: 42px;
        margin: 0;
        padding: 0 10px;
        border: 0;
        outline: 0;
        position: absolute;
        top: 0
    }

    .sbox {
        width: 180px;
        right: 35px;
        background: #ccc;
        background-image: linear-gradient(#333, #eee, #fff, #eee, #333)
    }

    .sbut {
        width: 40px;
        right: 0;
        background: #333;
        color: #fff;
        cursor: pointer;
        font-size: 1rem;
        font-style: italic
    }

    .sbut:hover {
        background: #f90
    }

    .show-nav {
        display: none
    }

    .site-content {
        margin: 24px auto 6px auto
    }

    .sc-main {
        padding-bottom: 24px;
        width: 69%;
        float: left
    }

    .sc-sidebar {
        width: 30%;
        float: right
    }

    .bradcrum {
        padding: 0 3%;
        font-size: .8rem;
        color: #999
    }

    .bradcrum li {
        display: inline
    }

    .bradcrum a {
        color: #1b66a2
    }

    .bradcrum a:hover {
        color: #333
    }

    .bradcrum li+li:before {
        content: '\0000a0\203A\0000a0'
    }

    .posts {
        padding: 12px 3%;
        overflow: hidden;
        clear: both
    }

    .posts h2 {
        margin: 16px 0
    }

    .posts h2 a {
        color: #000;
        text-decoration: underline
    }

    .posts h2 a:hover {
        color: #e00
    }

    .post-meta {
        font-size: .8rem;
        color: #999
    }

    .post-meta a {
        color: #666;
        font-weight: 700
    }

    .post-meta:before {
        content: "Category : "
    }

    .posts p {
        margin-bottom: 12px
    }

    .posts img {
        display: block;
        margin: 12px auto;
        max-width: 100%;
        height: auto
    }

    .posts .rm {
        color: #be4a47;
        display: block
    }

    .posts .rm a {
        color: red
    }

    .article {
        padding: 0 3%;
        overflow: hidden
    }

    .article h1 {
        margin-top: 12px
    }

    .article-meta {
        margin-bottom: 24px;
        font-size: .9rem;
        color: #999
    }

    .article-meta a {
        color: #666;
        font-weight: 700
    }

    .article-meta a:hover {
        color: #333
    }

    .article h2,
    .article h3,
    .article h4,
    .article h5,
    .article h6 {
        margin: 12px 0 0 0;
        clear: both
    }

    .article p {
        margin-bottom: 12px;
        text-align: justify
    }

    .article p a {
        color: #2384d0
    }

    .article img {
        display: block;
        max-width: 100%;
        height: auto
    }

    .img-center {
        margin: 0 auto 12px auto
    }

    .img-left {
        float: left;
        margin: 6px 12px 12px 0
    }

    .img-right {
        float: right;
        margin: 6px 0 12px 12px
    }

    figure.image {
        background: #fefefe
    }

    figure.image img {
        margin: 0 auto
    }

    figure.align-left {
        float: left;
        margin: 6px 12px 12px 0
    }

    figure.align-right {
        float: right;
        margin: 6px 0 12px 12px
    }

    figure.image figcaption {
        margin: 2px 8px;
        color: #999;
        font-size: .8rem;
        text-align: center;
        font-style: italic
    }

    .article blockquote {
        background: #ffc;
        color: #666;
        margin: 12px 0;
        padding: 12px;
        border: 1px solid #590;
        border-left: 8px solid #590;
        border-radius: 0 5% 5% 0
    }

    .article ol,
    .article ul {
        padding-left: 2rem;
        margin-bottom: 12px;
        clear: both
    }

    .article ol li,
    .article ul li {
        margin-bottom: 6px
    }

    .article ul li {
        list-style: square outside
    }

    .article table {
        margin: 12px auto;
        border-collapse: collapse;
        display: block;
        overflow: auto
    }

    .article th {
        padding: 6px 8px;
        border: 1px solid #ccc;
        background: #eee
    }

    .article td {
        border: 1px solid #ccc;
        padding: 4px 6px
    }

    .article-footer {
        padding: 6px 3%
    }

    .article-footer h4 {
        font-size: 1.5rem
    }

    .fb-comment {
        padding: 0 3%
    }

    .sb-title {
        background: #fff4e5;
        color: #333;
        overflow: hidden;
        border-bottom: 3px solid #f90
    }

    .sb-title h3 {
        padding: 6px 5%;
        background-color: #f90;
        display: inline-block
    }

    .sb-box {
        margin-bottom: 24px;
        border-bottom: 2px solid #f90
    }

    .sb-cate li {
        border-bottom: 1px solid #eee
    }

    .sb-cate li:last-child {
        border-bottom: 0
    }

    .sb-cate li a {
        display: block;
        padding: 4px 0;
        color: teal;
        font-weight: 700
    }

    .sb-cate li a:hover {
        color: #111
    }

    .sb-title button {
        background: 0 0;
        width: 50%;
        float: left;
        border: none;
        outline: 0;
        cursor: pointer;
        padding: 8px 16px;
        transition: .3s;
        font-size: 1rem;
        font-weight: 700;
        font-family: Hind, sans-serif
    }

    .sb-title button:hover:not(.active) {
        background-color: #ffcc7f
    }

    .sb-title button.active {
        background-color: #f90
    }

    .tab-content {
        display: none
    }

    .sb-feed {
        padding: 6px 0;
        animation: fadeEffect .5s
    }

    .sb-feed li {
        padding: 8px 0;
        overflow: hidden
    }

    .feed-img {
        height: 100px;
        width: 40%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        float: left
    }

    .feed-img:hover {
        opacity: .8
    }

    .feed-txt {
        width: 56%;
        padding: 0 2%;
        float: right
    }

    .feed-txt a {
        font-size: 1.4rem;
        font-weight: 700;
        color: #444
    }

    .feed-txt a:hover {
        color: #222;
        text-shadow: 0 0 2px #ccc
    }

    .feed-info {
        display: block;
        color: #666;
        font-size: .8rem
    }

    @keyframes fadeEffect {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    .pagination {
        padding: 12px 3%
    }

    .current,
    .disabled,
    .pagination a {
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px
    }

    .current,
    .disabled,
    .pagination a {
        color: #000
    }

    .disabled {
        color: #ccc
    }

    .gap {
        float: left;
        margin: 0 4px
    }

    .pagination .current {
        background-color: #f90;
        color: #fff;
        border: 1px solid #f90
    }

    .pagination a:hover:not(.current) {
        background-color: #ddd
    }

    .pagination .next {
        float: right
    }

    .pagination .prev {
        float: left
    }

    .site-footer {
        background: #333;
        color: #ccc
    }

    .foot-row-1 {
        padding: 8px 2%;
        border-bottom: 2px groove #666
    }

    .foot-row-1 li {
        float: left;
        display: inline-block;
        width: 20%
    }

    .foot-row-1 a {
        color: #999;
        line-height: 36px
    }

    .foot-row-1 a:hover {
        color: #ccc
    }

    .foot-row-2 {
        padding: 8px 2%;
        border-bottom: 2px groove #666
    }

    .foot-row-2 a {
        color: #eee;
        margin: 0 8px
    }

    .foot-row-2 a:hover {
        color: #fff
    }

    .foot-col-1 {
        float: left;
        text-align: left
    }

    .foot-col-2 {
        float: right;
        text-align: right
    }

    .foot-col-2 a {
        font-size: 1.2rem
    }

    .foot-row-3 {
        padding: 8px 2%;
        background: #555;
        text-align: center;
        color: #ccc;
        font-size: .8rem
    }

    .foot-row-3 a {
        color: #ccc;
        margin: 0 2px
    }

    .foot-row-3 a:hover {
        color: #fff
    }

    .foot-row-4 {
        padding: 8px 2% 48px 2%;
        background: #eee;
        text-align: center;
        color: #666;
        font-size: .8rem
    }

    .form1 input[type=text],
    .form1 textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical
    }

    .form1 input[type=submit] {
        background-color: #333;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer
    }

    .form1 input[type=submit]:hover {
        background-color: #111
    }

    .bar1,
    .bar2,
    .bar3,
    .menu a {
        transition: .5s
    }

    @media screen and (max-width:768px) {
        .ad-topbanner {
            margin: 6px 0;
            width: auto;
            height: auto;
            float: none
        }

        .ad-sb {
            width: auto;
            height: auto;
            max-width: 100%
        }

        .logo {
            float: none;
            margin: 12px auto;
            padding: 0
        }

        .show-nav {
            display: block;
            width: 40px;
            height: 42px;
            background: #000;
            cursor: pointer;
            overflow: hidden
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 30px;
            height: 5px;
            background-color: #fff;
            margin: 6px 5px
        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 8px);
            transform: rotate(-45deg) translate(-9px, 8px)
        }

        .change .bar2 {
            opacity: 0
        }

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-7px, -7px);
            transform: rotate(45deg) translate(-7px, -7px)
        }

        .menu {
            display: none;
            background: #666;
            border-top: 6px #fff solid
        }

        .menu li {
            width: 33.3%
        }

        .menu a {
            width: 80%
        }

        .menu a:hover {
            background: #999;
            color: #fff
        }

        .resp {
            display: block
        }

        .sc-main {
            width: 100%;
            float: none
        }

        .sc-sidebar {
            width: 100%;
            float: none
        }

        .sb-title h3 {
            padding: 8px 3%
        }

        .sb-cate {
            border-bottom: 0;
            padding: 8px 3%
        }

        .sb-cate li {
            width: 33.33%;
            float: left
        }

        .sb-cate li a {
            padding: 8px 0
        }

        .sb-cate li:last-child {
            border-bottom: 1px solid #eee
        }

        .sb-feed {
            border-bottom: 0;
            padding: 6px 3%
        }

        .sb-feed li {
            width: 50%;
            float: left
        }
    }

    @media screen and (max-width:600px) {
        html {
            font-size: 15px
        }

        .menu li {
            width: 50%
        }

        .foot-row-1 li {
            width: 50%
        }
    }

    @media screen and (max-width:480px) {
        html {
            font-size: 14px
        }

        .resp li {
            width: 50%
        }

        .sb-cate li {
            width: 50%
        }

        .sb-feed li {
            width: 100%
        }

        .posts img {
            float: none;
            margin: 0 auto 12px auto
        }

        .img-left,
        .img-right,
        figure.align-left,
        figure.align-right {
            float: none;
            margin: 12px auto
        }

        .current,
        .disabled,
        .pagination a {
            padding: 6px 10px;
            margin: 0 2px
        }

        .gap {
            margin: 0 2px
        }
    }

    @media screen and (max-width:320px) {
        html {
            font-size: 13px
        }

        .foot-row-1 li,
        .resp li,
        .sb-cate li {
            width: 100%;
            float: none
        }

        .foot-row-1 li {
            border-bottom: 1px dotted #666
        }

        .foot-row-1 li:last-child {
            border-bottom: 0
        }
    }

    .fb_iframe_widget_fluid_desktop,
    .fb_iframe_widget_fluid_desktop span,
    .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100% !important;
        width: 100% !important;
    }

    .g-recaptcha {
        margin: 10px 10px;
    }
    </style>

</head>

<body>


    <?php include "personal_files/navbar.php" ?>

    <div class="site-content clearfix">
        <div class="sc-main">
            <div class="bradcrum">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="personal_files/contact_us">Contact us</a></li>
                </ol>
            </div>



            <div class="article">




                <h1>Contact us</h1>
                <p>Submit your feedback.</p>


                <form action="<?=$_SERVER['PHP_SELF']?>" method="post" autocomplete="off" class="form1">

                    <label for="visi_name">Your Name*</label><br>
                    <input type="text" id="visi_name" name="name" placeholder="Your name..." value="" required><br>

                    <label for="visi_email">Your Email*</label><br>
                    <input type="text" id="visi_email" name="email" placeholder="Your email..." value="" required><br>

                    <label for="visi_email">Your Phone No.*</label><br>
                    <input type="text" id="visi_phone" name="phone" placeholder="Your phone no...." value="" required><br>



                    <label for="visi_msg">Message*</label><br>
                    <textarea id="visi_msg" name="message" placeholder="Write something..."
                        style="height:300px"></textarea>

                    





                    <input type="submit" name="submit" value="Submit">
                    <div class="form-group">
                        <h4>
                        <?php if($result){
        $msg="submitted successfully";
        echo $msg;
   }

   else{
       echo "not submitted ".mysqli_error($con);
   } ?></h4>
                    </div>
                </form>
            </div>
        </div>



        <?php include 'personal_files/homefooter.php' ?>

    </div>








</body>

</html>