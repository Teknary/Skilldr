<!DOCTYPE html>
<html>
<head>

<link
      rel="shortcut icon"
      href="../imgs/favicon (3).png"
      type="image/x-icon"
    />
    <title>Video Playing - Skilldr</title>


    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
      @font-face {
    font-family: 'Font';
    src: url('../fonts/font.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}

.container {
    max-width: 990px;
    margin: 0 auto;
    justify-content: center;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}
.content {
      max-width: 1400px; /* Max width for large screens */
      width: 100%; /* Full width up to the max width */
      margin: 0 auto; /* Center the container horizontally */
      padding: 20px;
      background-color: #000c15; 
      border-radius: 10px;

    }
    .logo{
      font-family: 'Font';
      font-size: 30px;
      color: white;
      letter-spacing: 2px
    }

.video-container {
    display: flex;
    flex-wrap: wrap;
}

.video-item {
    width: 100%;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

.video-item a {
    display: block;
    text-decoration: none;
    color: #333;
}

.thumbnail {
    position: relative;
    height: 0;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
}

.thumbnail img {
    position: absolute;
}
.thumbnail img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.video-info {
    padding: 10px;
}

.video-info h2 {
    font-size: 16px;
    margin: 0;
    
}

.video-info p {
    font-size: 14px;
    color: #888;
    margin: 5px 0;
}

.video-player {
    margin-bottom: 20px;
}

.video-player video {
    width: 100%;
    max-width: 480px;
    height: auto;
}

    body{
        color: white;
        font-family: system-ui;
        background-color: #001220;
        
    }
    .desc{
        background-color: #000c15;
    box-shadow:  5px 5px 10px #000000,
    -5px -5px 10px #000000;
        width: 100%;
        border-radius: 10px;
        padding: 18px;
             font-weight: 700;
             font-size:18px;


    }
    
header{
    display: flex;
    justify-content: space-between;
    padding: 8px 20px;
    width: 100%;
    align-items: center;
}
input{
  border: none;
  background-color: white;
  color: white;
  padding: 10px;
  border-radius: 10px;
  outline: none;
  width: 100%;

}
.logo{
    text-decoration: none;
    color: white;
    font-size: 1.8em;
    font-weight: 900;
}
nav a{
    text-decoration: none;
    color: white;
}
*{
    box-sizing: border-box;
    scroll-behavior: smooth;
    margin: 0;
    padding: 0;
}
@media screen and (max-width: 1023px) {
    .video-item {
        width: 100%;
    }

    .video-player iframe {
        max-width: 100%;
    }
    .desc{
        width: 100%;
    }
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
@media screen and (max-width: 1023px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.buttons {
            margin-top: 20px;
            
        }

        .buttons button {
            margin-right: 20px;
            background-color: transparent;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 1.1em;
        }

        .buttons button i {
            margin-right: 5px;
        }

        .buttons button:focus {
            outline: none;
        }

        

        .like-button i.fa-thumbs-up {
            color: blue;
        }

        .dislike-button i.fa-thumbs-down {
            color: red;
        }


        .no_ex{
            justify-content: center;
            text-align: center;
}

nav a{
    margin: 6px;
}
nav a svg:hover{
    text-decoration: underline;
    fill: #de5b00;
}
iframe{
    border-radius: 10px;
}
@media screen and (max-width: 1023px) {
   .chrme{
    display: none;
   }
}
header{
box-shadow:  5px 5px 10px #000000,
             -5px -5px 10px #000000;
}

.comment-section-wrapper {
    display: flex;
    justify-content: center;
}

.comment-section {
    background-color: #0f0f0f;
    border-radius: 10px;
    padding: 15px;
    margin-top: 20px;
    width: 100%;
}
.comment-section h3 {
    font-weight: bold;
    margin-bottom: 10px;
}
.comment-section form {
    margin-bottom: 20px;
}
.comment-section input, .comment-section textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #1a1a1a;
    color: white;
}
.comment-section button {
    background-color: #de5b00;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.comment {
    background-color: #1a1a1a;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}
.comment p {
    margin: 5px 0;
}
@media screen and (max-width: 1023px) {
    .comment-section {
    width: 100%;
}}
@media screen and (max-width: 1023px) {
    .formobilelabel{
        font-size:27.2px;
    }
}

.buttondown {
  display: inline-block;
  padding: 7px;
  font-size: 15px;
  font-weight: bold;
  color: white;
  background-color: #de5b00;
  border: solid #de5b00 1px;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin:5px;
}

.buttondown:hover {
  background-color: #de5b00;
}

.buttondown:active {
  background-color: #de5b00;
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
    padding:7px;
    display:none;
}
#commentSec{
    display: block;
    background-color: #000c15;
    box-shadow:  5px 5px 10px #000000,
    -5px -5px 10px #000000;
}
#showComments{
    width:100%;
}
@media screen and (max-width:1023px) {
    #showComments{
        width:100%;
    }
}

#jj{
}
#downloadpage{
    width: 20%;
}
@media screen and (max-width:1023px) {
    #downloadpage{
        width: 40%;
    }
}
textarea{
    resize:none;
}
.itslogo{
    width: 90%;height: 7vh;
}
@media screen and (max-width:1023px) {
    .itslogo{
        width: 90%;height: 5vh;
    }
}
#commentsContainer{
    font-weight:bold;
}
.topCreators{
    overflow-y:hidden;
    overflow-x:auto;
    display:flex;
    width:100%;
}
.cardcrt{
    padding:20px;
    margin:10px;
    text-align:center;
    border-radius:20px;
    width: 30%;
    background-color: #000c15;
    box-shadow:  5px 5px 10px #000000,
    -5px -5px 10px #000000;}
.cardcrt img{
    border-radius:50px;
}
.cardcrt h4{
    color:gray;
}
@media screen and (max-width: 1023px) {
    .cardcrt{
        width: 100%;
        max-width:100%;
    }
    .cardcrt h3{
        font-size:15px;
    }
}
a{
    text-decoration:none;
}
#search__form{
    display:none;
}
@media screen and (max-width:1023px) {
    #search__form{
        display:block;
    }
}
#savedVid{
    color: #ffffff;
    background-color: green;
    border-color: #ffeeba;
    padding:7px;
    display: none;
}


#favurl{
    color: #ffffff;
    background-color: green;
    border-color: #ffeeba;
    padding:7px;
    display: none;
}


@media screen and (max-width:1023px){
.content{
  padding: 0px;
}
}
</style>

</head>
<body style="background-color: #000c15;">
    <div class="content">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<br><br><br>
  
        <br><br>
        <a href="../html/code/intro.html">Return</a>
        <a href="../index.html">Home</a>
        <a href="../index.html#about">About Us</a>
        <a href="../index.html#courses">Courses</a>
        

</div>
    <header id="body">
        
       
    <a class="logo"  href="../index.html">

    SKILLDR
    </a>
<div class="chrme">
            <form method="get" action="result.php" style="display: flex; justify-content: center;" class="search_form">
                <input
                    title="Search Skilldr"
                    type="search"
                    name="query"
                    required
                    style="border-radius: 10px; color: #de5b00; font-weight: 700; width: 700px;"
                    placeholder="Search Skilldr Academy ..."
                    id="search"
                />
                <button style="background-color:#de5b00;color:white;outline:none;border:none;border-radius:10px;padding:5px;width:40px;margin-left:5px;"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="rt" style="color: white;display:flex;">
            
         <a id="search__form" href="result.php?query=python" style="color: #de5b00;font-size: 1.5em;margin-right:10px;">
         <h3><i class="fas fa-search"></i></h3>
         </a>
         
         <a href="../html/code/intro.html" style="color: #de5b00;font-size: 1.5em;margin-right:10px;">
         <h3><i class="fas fa-backward"></i></h3>
         </a>
         
         
         <a href="../html/favVids.html" style="color: #de5b00;font-size: 1.5em;margin-right:10px;">
         <h3><i class="fas fa-heart"></i></h3>
         </a>
         
         <a href="../index.html" style="color: #de5b00;font-size: 1.5em;margin-right:10px;">
         <h3><i class="fas fa-home"></i></h3>
         </a>

         <a href="../html/controls.html" style="color: #de5b00;font-size: 1.5em;margin-right:10px;">
         <h3><i class="fas fa-cog"></i></h3>
         </a>
      </div>
    </header>
    <div id="warn" class="alert alert-warning">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
           <strong>Warning:</strong> You haven't signed in yet.
    </div>
    <div id="savedVid" class="savedVid">
        <span class="closebtn" onclick="closeAlert()">&times;</span>
     <strong>The Shortcut Created Successfully, You Can Click " <i class="fas fa-play-circle"></i> " Now Easily.</strong>
    </div>

    <div id="favurl" class="favurl">
        <span class="closebtn" onclick="closeAlertxx()">&times;</span>
     <strong>The Video Added To Favorites Successfully, Click " <i class="fas fa-heart"></i> " To See All Your Favorites.</strong>
    </div>
    <div class="container">
        <div class="mainvids">

     
        <?php
        // Check if the video ID is provided in the query parameter
        if (isset($_GET['watch'])) {
            $videoId = $_GET['watch'];
            $videos = [
                [
                    'watch' => 1,
                    'title' => '[Arabic] Learn HTML in 2022 In One Video',
                    'description' => '<i class="fas fa-newspaper"></i> Learn HTML in 2022 In One Video. The Course In 37 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE',
                    'likeNo' => '+ 15k',
                    'dislikeNo' => '+ 500',
                    'saveNo' => '+ 400k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 2,
                    'title' => '[Arabic] Learn CSS in 2022 In One Video',
                    'description' => '<i class="fas fa-newspaper"></i> Learn CSS in 2022 In One Video. The Course In 88 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qyVkLebgfzY?si=bZpnaoGjOFjHqh6O',
                    'likeNo' => '+ 7k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 300k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 3,
                    'title' => '[Arabic] Learn JavaScript In One Video - Part One',
                    'description' => '<i class="fas fa-newspaper"></i> Learn JavaScript In One Video - Part One . Lessons From 001 To 101 The Course In 188 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'gIGGhFlGgLI?si=WZ7v-57M9a3RKvtK',
                    'likeNo' => '+ 5k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 200k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 4,
                    'title' => '[Arabic] Learn JavaScript In One Video - Part Two',
                    'description' => '<i class="fas fa-newspaper"></i> Learn JavaScript In One Video - Part Two . Lessons From 102 To 188 The Course In 188 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'FKrfis1W1tk?si=wffpm6lkKYF8LNKu',
                    'likeNo' => '+ 1.4k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 65k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 5,
                    'title' => '[Arabic] Learn Bootstrap In 12 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Bootstrap Course in 2022 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=jr_L00-B67GNYRq-&amp;list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ',
                    'likeNo' => '+ 20k',
                    'dislikeNo' => '+ 134',
                    'saveNo' => '+ 443k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 999,
                    'title' => '[Arabic] Learn React-JS In 30 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete React-JS Course in 2022 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Unique Coderz Academy</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=uoLF7ZiC8TaV-5cx&amp;list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW',
                    'likeNo' => '+ 50k',
                    'dislikeNo' => '+ 134',
                    'saveNo' => '+ 1.2M',
                    'subs' => '78.7k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCq_xgufsy1KrGsmJq7mFH-g',
                ],
                [
                    'watch' => 6,
                    'title' => '[Arabic] Learn PHP In 105 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete PHP Course in 2022 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-end</a>',
                    'youtubeId' => 'videoseries?si=PgA3KHaYp3EjTywe&amp;list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq',
                    'likeNo' => '+ 6k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 275k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 7,
                    'title' => '[Arabic] Learn MYSQL In 51 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete MYSQL Course in 2020 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2020</a><br><i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-end</a>',
                    'youtubeId' => 'videoseries?si=pTpW9ajAf691nCdo&amp;list=PLDoPjvoNmBAz6DT8SzQ1CODJTH-NIA7R9',
                    'likeNo' => '+ 120k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 1.5M',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 8,
                    'title' => '[Arabic] Learn Laravel In 21 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Laravel Course in 2021 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2021</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Back-End</a>',
                    'youtubeId' => 'videoseries?si=SmI4WPH26nADZhdS&amp;list=PLDoPjvoNmBAy_mAhY0x8cHf8oSGPKsEKP',
                    'likeNo' => '+ 142k',
                    'dislikeNo' => '+ 600',
                    'saveNo' => '+ 650k',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => 9,
                    'title' => '[English] Learn HTML & CSS In One Video 2023',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete HTML & CSS Course in 2023 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'HGTJBPNC-Gw?si=i5gJ5fhCxskoxn0e',
                    'likeNo' => '+ 58k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 1.9M',
                    'subs' => '2M Followers',
                    'channel' => 'https://www.youtube.com/channel/UC4SVo0Ue36XCfOyb5Lh1viQ',
                ],
                [
                    'watch' => 10,
                    'title' => '[English] Learn JAVASCRIPT In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete JAVASCRIPT Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'lfmg-EJ8gm4?si=IIlZEQiXAHipOTx0',
                    'likeNo' => '+ 40k',
                    'dislikeNo' => '+ 150',
                    'saveNo' => '+ 1.1M',
                    'subs' => '2M Followers',
                    'channel' => 'https://www.youtube.com/channel/UC4SVo0Ue36XCfOyb5Lh1viQ',
                ],
                [
                    'watch' => 11,
                    'title' => '[English] Learn Bootstrap In 20 Videos 2021',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Bootstrap Course in 2021 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Net Ninja</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2021</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Front-End Framework</a>',
                    'youtubeId' => 'videoseries?si=jLu4BOAOlwlEqNfn&amp;list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR',
                    'likeNo' => '+ 80k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 1.6M',
                    'subs' => '1.52M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCW5YeuERMmlnqo4oq8vwUpg',
                ],
                [
                    'watch' => 12,
                    'title' => '[English] Learn React-JS In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete React-JS Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End Framework</a>',
                    'youtubeId' => 'CgkZ7MvWUAA?si=4ku4iR4rtnuWrJxr',
                    'likeNo' => '+ 20k',
                    'dislikeNo' => '+ 132',
                    'saveNo' => '+ 780k',
                    'subs' => '2M Followers',
                    'channel' => 'https://www.youtube.com/channel/UC4SVo0Ue36XCfOyb5Lh1viQ',
                ],
                [
                    'watch' => 13,
                    'title' => '[English] Learn PHP In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete PHP Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-End</a>',
                    'youtubeId' => 'zZ6vybT1HQs?si=OldtIeWGeqWIW5-H',
                    'likeNo' => '+ 33k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 1.2M',
                    'subs' => '2M Followers',
                    'channel' => 'https://www.youtube.com/channel/UC4SVo0Ue36XCfOyb5Lh1viQ',
                ],
                [
                    'watch' => 14,
                    'title' => '[English] Learn MYSQL In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete MYSQL Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-End</a>',
                    'youtubeId' => '5OdVJbNCSso?si=mzTzMhKgJdwgKBUd',
                    'likeNo' => '+ 40k',
                    'dislikeNo' => '+ 128',
                    'saveNo' => '+ 1.5M',
                    'subs' => '2M Followers',
                    'channel' => 'https://www.youtube.com/channel/UC4SVo0Ue36XCfOyb5Lh1viQ',
                ],
                [
                    'watch' => 15,
                    'title' => '[English] Learn Laravel In 52 Videos 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Laravel Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Yelo Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Back-End</a>',
                    'youtubeId' => 'videoseries?si=NfeU7r53FAb7yuh3&amp;list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU',
                    'likeNo' => '+ 92k',
                    'dislikeNo' => '+ 526',
                    'saveNo' => '+ 233k',
                    'subs' => '14.7k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCGCq3TxiYbLbAfAvGFqZovg',
                ],
                [
                    'watch' => "Quan3doSe",
                    'title' => '[English] Learn Next.Js In 7 Hours And In One Video 2023',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Next.Js Course in 2023 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Dave Gray</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Next.Js</a>',
                    'youtubeId' => '843nec-IvW0?si=MOoSKU2KUQMGB1nf',
                    'likeNo' => '+ 10k',
                    'dislikeNo' => '+ 2053',
                    'saveNo' => '+ 410k',
                    'subs' => '325k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCY38RvRIxYODO4penyxUwTg',
                ],
                                [
                    'watch' => "vandamGHv",
                    'title' => '[Arabic] Learn Python in 2020 In 53 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Python Course in 2020 <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Abdelrahman Gamal</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2020</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Python</a>',
                    'youtubeId' => 'videoseries?si=SOHulmvIAScQQ9nl&amp;list=PLknwEmKsW8OsG8dnisr_-2WGyx7lpgGEE',
                    'likeNo' => '+ 460k',
                    'dislikeNo' => '+ 2180',
                    'saveNo' => '+ 3M',
                    'subs' => '534k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCbQh1yxBPVhyjB-G_blFFEQ',
                ],
                [
                    'watch' => "lkhvoejVt",
                    'title' => '[Arabic] Learn Python in 2020 In 153 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Python Course in 2020. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2020</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Python</a>',
                    'youtubeId' => 'videoseries?si=WgF7EPmOZFmI3i3T&amp;list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs',
                    'likeNo' => '+ 580k',
                    'dislikeNo' => '+ 1270',
                    'saveNo' => '+ 4.9M',
                    'subs' => '1.5M Followers',
                    'channel' => 'https://www.youtube.com/channel/UCSNkfKl4cU-55Nm-ovsvOHQ',
                ],
                [
                    'watch' => "klhvoVehav",
                    'title' => '[Arabic] Learn Python in 2020 In 51 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Python Course in 2020. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Codezilla</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2020</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Python</a>',
                    'youtubeId' => 'videoseries?si=5Io6MXF9FWIGfMlE&amp;list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ',
                    'likeNo' => '+ 760k',
                    'dislikeNo' => '+ 3374',
                    'saveNo' => '+ 13M',
                    'subs' => '897k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCveX_0uBOHVHbpV838OGXVA',
                ],
                [
                    'watch' => "mbGvjedv",
                    'title' => '[English] Learn Python in 2021 In One Video',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Python Course in 2021. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2021</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Python</a>',
                    'youtubeId' => 'XKHEtdqhLK8?si=LhVmWx3UEvy2d0Qf',
                    'likeNo' => '+ 884k',
                    'dislikeNo' => '+ 3930',
                    'saveNo' => '+ 18M',
                    'subs' => '2M Followers',
                    'channel' => 'https://www.youtube.com/channel/UC4SVo0Ue36XCfOyb5Lh1viQ',
                ],
                                [
                    'watch' => "wtvVvhffv",
                    'title' => '[Arabic] Learn Lua Script in 2023 In 37 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Lua Script Course in 2023. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Adres_Dev</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=Tv56LMMkjL9fJvSf&amp;list=PL1s2Olz3_bXG4GZ6EoEvWu1kVpZLbp6Le',
                    'likeNo' => '+ 19k',
                    'dislikeNo' => '+ 338',
                    'saveNo' => '+ 175k',
                    'subs' => '2,09k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCEMA3RbTCeE5GyArZVf2l5A',
                ],
                [
                    'watch' => "nboFehfDjv",
                    'title' => '[Arabic] Learn Lua Script in 2019 In 10 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Lua Script Course in 2019. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">JustCarry Explaining</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2019</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=QDW-8leUXGhIkSkM&amp;list=PL6yhZuIk6Ic4oiNcQuf7Cw77fwbqFVxpD',
                    'likeNo' => '+ 1.4k',
                    'dislikeNo' => '+ 122',
                    'saveNo' => '+ 35k',
                    'subs' => '958 Followers',
                    'channel' => 'https://www.youtube.com/channel/UCWQY0lm8YabS8omoXIC21sg',
                ],
                [
                    'watch' => "bnEpdAce",
                    'title' => '[Arabic] Learn Lua Script in 2023 In 7 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Lua Script Course in 2023. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">0xWaleed</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=vdVYzCAhZ54zX3Jt&amp;list=PL3KnC8_o_BSlPDf439a5ecZnflwqQ-r8W',
                    'likeNo' => '+ 43k',
                    'dislikeNo' => '+ 3372',
                    'saveNo' => '+ 144k',
                    'subs' => '8.61k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCwFmpPW6wKmp47KXSPTVjnA',
                ],
                [
                    'watch' => "feyGjeav",
                    'title' => '[English] Learn Lua Script in 2021 In 39 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Lua Script Course in 2021. <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Steve"s Teacher</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2021</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=dhh87ZfasYn2gLy3&amp;list=PLYBJzqz8zpWavt37pA6NANJTGStIHpybU',
                    'likeNo' => '+ 71k',
                    'dislikeNo' => '+ 248',
                    'saveNo' => '+ 155k',
                    'subs' => '13.6k Followers',
                    'channel' => 'https://www.youtube.com/channel/UCrIsEy0a57Fz3MdEOvhWbkw',
                ],
                
            ];


            $selectedVideo = null;
            foreach ($videos as $video) {
                if ($video['watch'] == $videoId) {
                    $selectedVideo = $video;
                    break;
                }
            }

            // If a matching video is found, display the video player
            if ($selectedVideo) {
                $videoTitle = $selectedVideo['title'];
                $videoDescription = $selectedVideo['description'];
                $youtubeId = $selectedVideo['youtubeId'];
                $likeNo = $selectedVideo['likeNo'];
                $dislikeNo = $selectedVideo['dislikeNo'];
                $saveNo = $selectedVideo['saveNo'];
                $subs = $selectedVideo['subs'];
                $channel = $selectedVideo['channel'];
                echo "<div class='video-player'>";
                echo "<iframe width='100%' height='400' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h2 class='formobilelabel'>$videoTitle</h2>";
                
                    echo "<div class='buttons'>";
            echo "<button style='font-weight:bold;' id='lkb' class='like-button' type='button'><i class='fas fa-thumbs-up'></i>$likeNo</button>";
            echo "<button style='font-weight:bold;' class='dislike-button' type='button'><i class='fas fa-thumbs-down'></i>$dislikeNo</button>";
            echo "<button style='font-weight:bold;' class='save-button' type='button'><i class='fas fa-eye'></i>$saveNo</button>";
            echo "<br>";
            echo "<br>";
            echo "</div>";

            echo "<div style='align-items:center;'>";
            echo "<a href='#body' class='buttondown' id='storeButton' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-save' style='color:white;'></i> Shortcut</a>";
            echo "<a href='../html/donate.html' id='jj' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-donate' style='color:white;'></i> Donate</a>";
            echo "<a href='../html/report.html' id='jj' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-flag' style='color:white;'></i> Report</a>";
            echo "<a href='$channel' target='_blank' id='jj' title='$subs' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fab fa-youtube' style='color:white;'></i> $subs</a>";
            echo "<a href='#' id='jj' class='buttondown' style='color:white;text-decoration:none;text-align:center;'  download='$videoTitle'><i class='fas fa-download' style='color:white;'></i> Download Page</a>";
            echo "<a id='favButton' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-heart' style='color:white;' ></i> Add To Favorites</a>";

            echo "</div>";
                    echo "<br>";
                echo "<div class='desc'>";
                echo "<p>$videoDescription</p>";
                echo "</div>";
         
                
            // Display the like, dislike, and save buttons
            

           
            } else {
                echo '<center><svg class="no_ex" width="80" height="80" fill="none" stroke="#de5b00" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                echo "<h2 style='justify-content:center;text-align:center;color:white;'>Sorry! ... Nothing To Watch.</h2>";
                
            }
        } else {
            echo '<center><svg class="no_ex" width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                
            echo "<h3 style='justify-content:center;text-align:center;'>Invalid video ID.</h3>";
        }
        ?>
        <br>
                <a id="showComments" class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-eye' style='color:white;'></i> Show / Hide Comments</a>
<br>
        <div id="commentSec" class="comment-section">
     <h3><i class="fas fa-comments"></i> Global Chat</h3>
    <!--<form id="commentForm">
    <h6><i>Nobody Can See Your Comments As It's A Data For You Only, Likes & Comments.</i></h6>
    <br>
        <textarea style="font-family:sans-serif;font-weight:bold;" id="commentText" placeholder="Your Comment" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <div id="commentsContainer"></div> -->
    <!-- <div id="commentSec" class="comment-section">
        <div class="powr-comments" id="31402cbe_1723472426"></div><script src="https://www.powr.io/powr.js?platform=html"></script></div> 
         -->
         <!-- <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
         <div class="commonninja_component pid-9b8eb4d7-497f-4d9c-8f03-c9bfcffcfa17"></div>
         -->
         <script src="https://minnit.chat/js/embed.js" defer></script><minnit-chat data-chatname="https://organizations.minnit.chat/793477230788067/Main?embed&nickname=" data-style="width:100%;height:500px;max-height:90vh;"></minnit-chat><p class="powered-by-minnit"><a href="https://minnit.chat" target=_blank></a></p>
        </div>   

<!-- id="redirectButton" -->

<br>
 <h2><i class="fas fa-star"></i> Top Creators:</h2>
 <br>
                <div class="topCreators">
                
                    <div class="cardcrt">
                        <div class="cardcrtimg">
                            <img src="https://yt3.googleusercontent.com/-qCvx3y42iXp9cMNe5Yx3aoR2lL8TFxsrLShyBLuXOE4tY56kt_bPceyvPw95rpUqgKqI8zDBe4=s160-c-k-c0x00ffffff-no-rj" alt="creator">
                        </div>
                        <br>
                        <div class="cardcrtname">
                            <h3><i class="fas fa-user"></i> <a href="https://www.youtube.com/@ElzeroWebSchool" style="text-decoration:none;color:white;">Elzero Web School</a></h3>
                        </div>
                        <div class="cardcrtsubs">
                            <h4><i class="fab fa-youtube"></i> 1.5M Followers</h4>
                        </div>
                        <br>
                        <div class="place">
                            <h3 style="color:#FFD700;"><i class="fas fa-medal"></i> First Place</h3>
                        </div>
                    </div>

                    <div class="cardcrt">
                        <div class="cardcrtimg">
                            <img src="https://yt3.googleusercontent.com/ytc/AIdro_mPFVsxROj1dOtTWc9iNBwDYV4z42Q8LPokBSewiW9pCSg=s160-c-k-c0x00ffffff-no-rj" alt="creator">
                        </div>
                        <br>
                        <div class="cardcrtname">
                            <h3><i class="fas fa-user"></i> <a href="https://www.youtube.com/@BroCodez" style="text-decoration:none;color:white;">Bro Code</a></h3>
                        </div>
                        <div class="cardcrtsubs">
                            <h4><i class="fab fa-youtube"></i> 2M Followers</h4>
                        </div>
                        <br>
                        <div class="place">
                            <h3 style="color:#C0C0C0;"><i class="fas fa-medal"></i> Second Place</h3>
                        </div>
                    </div>

                </div>
</div>


    </div>

    <script src="../js/lasturl.js"></script>



    <script>
document.addEventListener('DOMContentLoaded', function () {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');
    const commentSec = document.getElementById("commentSec");
    const warn = document.getElementById("warn");

    // Function to save comments to local storage
    function saveCommentsToLocalStorage(comments) {
        localStorage.setItem('comments', JSON.stringify(comments));
    }

    // Function to retrieve comments from local storage
    function getCommentsFromLocalStorage() {
        const comments = localStorage.getItem('comments');
        return comments ? JSON.parse(comments) : [];
    }

    // Function to display comments
    function displayComments() {
        commentsContainer.innerHTML = '';
        const comments = getCommentsFromLocalStorage();
        comments.forEach(function(comment) {
            const commentElement = createCommentElement(comment);
            commentsContainer.appendChild(commentElement);
        });
    }

    // Function to create a comment element
    function createCommentElement(comment) {
        const commentElement = document.createElement('div');
        commentElement.classList.add('comment');
        commentElement.innerHTML = `
            <p><strong style="color:#de5b00;"><i class='fas fa-user'></i> <span style="font-size: 20px;">${comment.username} :</span></strong></p>
            <p>${comment.text}</p>`;
        return commentElement;
    }

    let sc = document.getElementById("showComments");

sc.addEventListener("click", function() {
    if (commentSec.style.display === "none" || commentSec.style.display === "") {
        commentSec.style.display = "block";
    } else {
        commentSec.style.display = "none";
    }
});
// Display existing comments on page load
displayComments();




    // Display existing comments on page load
    displayComments();

    // Check if user is logged in
    const currentUser = sessionStorage.getItem('currentUser');
    if (!currentUser) {
        commentSec.style.display = "none";
        warn.style.display = "block";
        sc.style.display = "none";

    }

    // Event listener for comment submission
    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get input values
        const commentText = document.getElementById('commentText').value;

        // Create new comment object with the logged-in user's name
        const newComment = {
            username: currentUser, // Use the current logged-in user's username
            text: commentText
        };

        // Get existing comments from local storage
        const comments = getCommentsFromLocalStorage();

        // Add new comment to the array of comments
        comments.push(newComment);

        // Save updated comments to local storage
        saveCommentsToLocalStorage(comments);

        // Display comments again (including the new one)
        displayComments();

        // Clear the form
        commentForm.reset();
    });

    // Example: Adding a specific comment on button click
    const addButton = document.getElementById('lkb');
    addButton.addEventListener('click', function() {
        const specificComment = {
            username: currentUser, // You can set any username for this comment
            text: '<i style="color:gray;">Liked A Video: <?php 
            echo $videoTitle;
            ?> </i>'
        };


        if (!currentUser) {
}else{
        alert("Successfully Liked The Video!");
             // Get existing comments from local storage
             const comments = getCommentsFromLocalStorage();

// Add the specific comment to the array of comments
comments.push(specificComment);

// Save updated comments to local storage
saveCommentsToLocalStorage(comments);

// Display comments again (including the new one)
displayComments();
    }
   
        
    });
});

    </script>

<br><br><br><br>
<h6 style="font-weight: bold;color: white;text-align: center;color:white;">* <a href="../html/Privacy&Policy.html" style="color:white;">Privacy & Policy Terms</a> *</h6>
<br>
<footer style="background-color: #000c15; color: rgb(255, 255, 255); padding: 20px; text-align: center;">

<h4>© Skill<span style="color: #de5b00;">dr.</span> Made By <span style="color: #de5b00;">FEROZ</span></h4>
<br>

<div class="icons" style="display: flex;text-align: center;justify-content: center;">

<a href="result.php?query=python" style="color: white;">
  <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="m21.407 19.753-4.41-4.41a8.148 8.148 0 0 0 1.633-4.903c0-4.516-3.674-8.19-8.19-8.19s-8.19 3.674-8.19 8.19 3.674 8.19 8.19 8.19a8.148 8.148 0 0 0 4.902-1.633l4.41 4.41a1.171 1.171 0 0 0 1.655-1.654ZM4.59 10.44a5.85 5.85 0 1 1 5.85 5.85 5.857 5.857 0 0 1-5.85-5.85Z"></path>
  </svg>
</a>

<a href="../html/userdata.html" style="color: white;">
  <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25Zm.094 4.5a3.375 3.375 0 1 1 0 6.75 3.375 3.375 0 0 1 0-6.75ZM12 20.25a8.23 8.23 0 0 1-6.055-2.653C6.359 15.45 10.08 15 12 15s5.64.45 6.055 2.596A8.228 8.228 0 0 1 12 20.25Z"></path>
  </svg>
</a>

<a href="share.php" style="color: white;">
  <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.756 20.584a.75.75 0 0 1-.506-.71c0-3.426.688-6.166 2.046-8.144C5.936 9.338 8.525 8.052 12 7.891V4.125a.75.75 0 0 1 1.268-.542l8.25 7.875a.75.75 0 0 1 0 1.084l-8.25 7.875A.75.75 0 0 1 12 19.875v-3.74c-2.11.064-3.703.406-4.972 1.062-1.371.709-2.365 1.768-3.437 3.14a.75.75 0 0 1-.835.248Z"></path>
  </svg>
</a>
    
<a href="https://x.com/feroz4_" style="color: white;">
      <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z"></path>
      </svg>
</a>

</div>
</footer>
</div>

<script>
    // Disable right-click context menu
    document.addEventListener('contextmenu', event => event.preventDefault());

    // Disable specific keyboard shortcuts
    document.addEventListener('keydown', function(event) {
        if (event.key === "F12" || (event.ctrlKey && event.shiftKey && event.key === "I") || 
            (event.ctrlKey && event.shiftKey && event.key === "J") || 
            (event.ctrlKey && event.key === "U")) {
            event.preventDefault();
        }
    });
</script>
<script>
        function closeAlert() {
            document.getElementById('savedVid').style.display = 'none';
        }
    </script>
    <script>
        function closeAlertx() {
            document.getElementById('savedurl').style.display = 'none';
        }
    </script>
    <script>
        function closeAlertxx() {
            document.getElementById('favurl').style.display = 'none';
        }
    </script>
    <script>
        let alert  = document.getElementById("savedVid");
        let button = document.getElementById("storeButton");
function tcco(){
    savedVid.style.display = "block"
}
        button.addEventListener("click", tcco);
    </script>
    <script>
        document.getElementById('saveUrlButton').addEventListener('click', function() {
            // Get the current URL
            const currentUrl = window.location.href;
            
            // Retrieve the existing URLs from localStorage
            let urls = JSON.parse(localStorage.getItem('savedUrls')) || [];
            document.getElementById('savedurl').style.display = "block";
            // Add the current URL to the list if it's not already saved
            if (!urls.includes(currentUrl)) {
                urls.push(currentUrl);
                localStorage.setItem('savedUrls', JSON.stringify(urls));
                alert('URL saved!');
            } else {
                alert('This URL is already saved.');
            }
        });
    </script>
    <script>
        document.getElementById('favButton').addEventListener('click', function() {
            // Get the current URL
            const currentUrl = window.location.href;
            
            // Retrieve the existing URLs from localStorage
            let urls = JSON.parse(localStorage.getItem('favUrls')) || [];
            document.getElementById('favurl').style.display = "block";
            // Add the current URL to the list if it's not already saved
            if (!urls.includes(currentUrl)) {
                urls.push(currentUrl);
                localStorage.setItem('favUrls', JSON.stringify(urls));
                alert('URL saved!');
            } else {
                alert('This URL is already saved.');
            }
        });
    </script>
<script src="../js/notify.js"></script>
</body>
</html>