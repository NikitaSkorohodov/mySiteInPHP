<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <meta name="description" content="КиноБаза - это портал о кино">
    <meta name="keywords" content="фильмы, фильмы онлайн, HD">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-size: 1.2em;
    background-color: rgb(0, 0, 0);
    color: #555;
}

p {
    padding: 0 0 20px 0;
    line-height: 1.7em;
}

input[type="text"], input[type="password"], input[type="search"] {
    color: #5d5d5d;
    width: 60%;
    padding: 8px;
}

input, textarea {
    outline: none;
    border: none;
    border: solid 1px #ffffff;
}

h1 { 
    font: normal 170% 'century gothic', 'arial';
    margin: 0 0 15px 0;
    padding: 15px 0 5px 0;
    color: rgb(32, 31, 31);
}

h2 {
    font: normal 170% 'century gothic', 'arial';
    margin: 0 0 15px 0;
    padding: 15px 0 5px 0;
    color: rgb(36, 36, 36);
}

h2 {
    font-size: 140%;
}

a, a:hover {
    outline: none;
    text-decoration: underline;
    color: #fdfdff;
}

ul {
    margin: 2px 0 22px 17px;
}

ul li {
    margin: 0 0 6px 0;
    padding: 0 0 4px 5px;
    line-height: 1.5em;
}

.header {
    background-color: rgb(40, 39, 39);
    height: 330px;
    font-size: 0.8em;
    margin-left: 0px;
    min-width: 900px;
}

.main, .logo, .menubar, .site_content, .footer {
    margin-left: auto;
    margin-right: auto;
}

.logo {
    width: 880px;
    padding-bottom: 40px;
}

.logo h1, .logo h2 {
    font: normal 300% 'century gothic', arial, sans-serif;
    margin: 0 0 0 9px;
    text-align: center;
}

.logo_text h1, .logo_text h1 a, .logo_text h1 a:hover {
    padding: 22px 0 0 0;
    color: rgb(133, 132, 132); 
    letter-spacing: 0.1em;
    text-decoration: rgb(137, 136, 136);
}

.logo_text h2 {
    font-weight: 0.9em;
    padding: 4px 0 0 0;
    color: rgb(100, 97, 97);
}

.menubar {
    width: 900px;
    height: 46px;
}

ul.menu {
    float: right;
}

ul.menu li {
    float: left;
    padding: 0 0 0 9px;
    list-style: none;
    margin: 1px 2px 0 0;
}

ul.menu li a {
    font: normal 100% 'trebuchet ms', sans-serif;
    display: block;
    height: 20px;
    padding: 6px 35px 5px 28px;
    color: rgb(252, 250, 250);
    border: solid 1px #fafafa;
    border-radius: 7px;
    text-decoration: none;
}

ul.menu li.selected a {
    color: #b0029c;
}

ul.menu li a:hover {
    background-color: black;
    color: rgb(255, 255, 255);
}

hr {
    border: solid 1px #ffffff;
}

.site_content {
    width: 1000px;
    overflow: hidden;
    margin: 20px auto 0 auto;
    background-color: rgb(255, 255, 255);
}

.sidebar_container {
    float: right;
    width: 124px;
}

.sidebar {
    float: right;
    width: 322px;
    padding: 5%;
    margin: 0 0 16px 0;
    border: solid 2px rgb(0, 0, 0);
    border-radius: 7px;
    background-color: #3d3c3c;
}

.btn {
    padding: 8px;
    border-color: rgb(160, 158, 158);
    background-color: rgb(255, 254, 254);
    cursor: pointer;
}

.sidebar h2 {
    color: #fffcfc;
}

.lables_passreg_text {
    font-size: 0.79em;
    font-style: italic ;
    margin-top: 3%;
    margin-left: 2%;
}

.sidebar ul {
    margin: 0;
}

.sidebar ul li {
    list-style-type: none;
    margin: 0 0 0 0;
}

.sidebar .rating_sidebar {
    float: right;
}

.content {
    text-align: left;
    width: 620px;
    padding:  0 0 0 5px;
    float: left;
}

.content a{
    text-decoration: none;
}

.films_block {
    margin-bottom: 5%;
}



.posts .posts_content {
    font-size: 0.8em;
}

.info_film_page {
    margin-top: 2%;
    margin-bottom: 4%;
}

.info_film_page .label {
    font-size: 1.2em;
}

.info_film_page .value {
    font-size: 1em;
    color: #403f3f;
    margin-right: 3%;
}

.description_film {
    margin-bottom: 15%;
}

.description_film img {
    float: left;
    margin-right: 2%;
    border-radius: 5px;
    border: solid 5px #ffffff;
}

.reviews {
    margin-bottom: 4%;
    font-size: 0.9em;
}

.reviews .reviews_name {
    background-color: #555456;
    color: rgb(254, 254, 254);
    padding: 1%;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.reviews .review_text {
    padding-top: 2%;
    padding-bottom: 2%;
    padding-left: 2%;
}

.send {
    margin-bottom: 4%;
}

.send input[type="text"]{
    width: 98%;
}

.send textarea {
    width: 624px;
    height: 200px;
}

.send input[type="submut"]{
    background-color: #4c4c4d;
    padding: 3%;
    color: rgb(255, 249, 249);
    border-radius: 5px;
}



.send_contact input[type="text"] {
    width: 500px;
}

.send_contact textarea {
    width: 500px;
}

.info_film {
    margin-bottom: 5%;
    background-color: #ffffff;
    padding: 5%;
    height: 270px;
}


.button {
    background-color: #3a3a3a;
    padding: 2%;
    color: rgb(255, 255, 255);
    border-radius: 5px;
    float: right;
    margin-top: 5%;
    clear: both;
    font-size: 0.8em;
}

.button a {
    color: white;
}


table {
    width: 100%;
    border: solid 1px #fefdfd;
}
    
td {
    padding: 2%;
    border: solid 1px #f4f4f4;
}


.center {
    text-align: center;
}

.rating {
    font-weight: bold;
}

.footer {
    width: 100%;
    height: 0px;
    padding: 0px 0 5px 0;
    text-align: center;
    background-color: rgb(92, 92, 92);
    color: #a8aa94;
    margin-left: 0px;
    margin-right: 0px;
    min-width: 800px;
}

.footer a {
    color: #a8aa94;
    text-decoration: none;
}

.footer a:hover {
    color: rgb(255, 255, 255);
    text-decoration: none;
}

.footer p {
    padding: 0 0 10px 0;
}


    </style>
</head>
<body>
    
    <div class="main">

        <div class="header">
            <div class="logo">
                <div class="logo.txt">
                    <h1> <a href="/NikitaSkorohodov.github.io/index.html"><img width="40" src="suorce/logo5.png"></a></a></h1>
                    <h1><a href="index.html">BestGames</a></h1>
                  
                    <h1><a>Games on meie kirg!</a></h1>
                </div>
            </div>

            <div class="menubar">

                <ul class="menu">
                    <li><a href="docktype.html">Kodu</a></li>
                    <li><a href="films.html">mängid</a></li>
                    <li><a href="seria.html">tasuta mängud</a></li>
                    <li><a href="contact.html">Kontaktid</a></li>
                 
                </ul>

            </div>

        </div>


        <div class="site_content">

            <div class="sidebar_container">

                <div class="sidebar">
                    <h2>Otsing</h2>
                    <form method="post" action="#" id="searc_form">
                        <input type="search" name="search-field" placeholder="login" />
                        <input type="submit" class="btn" value="Otsi" />
                    </form>
                </div>

                <div class="sidebar">
                    <h2>Sissepääs</h2>
                    <form method="post" action="#" id="login">

                        <input type="text" name="Login_field" placeholder="Logi sisse"/>
                        <input type="password" name="password_field" placeholder="Parool"/>
                        <input type="submit" class="btn" value="Sissepääs" />
                        <div class="lables_passreg_text">
                            <span><a href="#">Unustasid salasõna?</a></span> | <span><a href="#">Registreerimine</a></span>
                        </div>

                    </form>
                </div>

                

            </div>

            <div class="content">
                    
                <h1>parimad mängud 2022</h1>

                <div class="films_block">
<?php
$count = 0; 

foreach ($bookList as $bookOne){
  
    if ($count % 2 == 0) {
        echo '<div style="display: flex;">'; 
    }

    echo '<article style="flex: 1; margin: 0 5px; text-align: center;">'; 
    echo '<h3 style="background-color: black; color: white; border-radius: 10px; transition: color 0.3s;">'; 
    echo '<a href="book?title='.$bookOne['bookname'].'" style="color: inherit; text-decoration: none;">'.$bookOne['bookname'].'</a>';
    echo '</h3>';

    echo '<img src="public/images/'.$bookOne['image'].'" style="max-width: 100%; height: 150px;">'; 
    echo '<p>Author(s): '.$bookOne['author'].'</p>';
    echo '<p>Price: '.$bookOne['price'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '</article>';

    if ($count % 2 != 0) {
        echo '</div>'; 
    }

    $count++; 
}

if ($count % 2 != 0) {
    echo '</div>';
}

?>   
                </div>

                <h1>tasuta mängud</h1>
                    
                 <div class="films_block">
<?php
$count = 0; 

foreach ($bookList as $bookOne){
  
    if ($count % 2 == 0) {
        echo '<div style="display: flex;">'; 
    }

    echo '<article style="flex: 1; margin: 0 5px; text-align: center;">'; 
    echo '<h3 style="background-color: black; color: white; border-radius: 10px; transition: color 0.3s;">'; 
    echo '<a href="book?title='.$bookOne['bookname'].'" style="color: inherit; text-decoration: none;">'.$bookOne['bookname'].'</a>';
    echo '</h3>';

    echo '<img src="public/images/'.$bookOne['image'].'" style="max-width: 100%; height: 150px;">'; 
    echo '<p>Author(s): '.$bookOne['author'].'</p>';
    echo '<p>Price: '.$bookOne['price'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '</article>';

    if ($count % 2 != 0) {
        echo '</div>'; 
    }

    $count++; 
}

if ($count % 2 != 0) {
    echo '</div>';
}

?>
        </div>
            </div>

            </div>

            <div class="footer">
                <p>
                    <a href="docktype.html">Kodu</a>|
                    <a href="films.html">Mängid</a>|
                    <a href="seria.html">tasuta mängud</a>|
                    <a href="contact.html">Kontaktid</a>|
                </p>
                <a href="docktype.html"><img width="40" src="suorce/logo3.png"></a>
                <?php 
ob_start();
?>
        </div>

        </div>

    </div>
</body>
</html>
<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>
