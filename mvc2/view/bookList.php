<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <meta name="description" content="KinoBaza on kinoteemaline portaal">
    <meta name="keywords" content="filmid, filmid võrgus, HD">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="view\style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="main">

        <div class="header">
            <div class="logo">
                <div class="logo.txt">
                    <h1> <a href="/NikitaSkorohodov.github.io/index.html"><img width="40" src="view\logo5.png"></a></a></h1>
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
                <a href="docktype.html"><img width="40" src="view\logo5.png"></a>
                <?php 
ob_start();
?>
        </div>

        </div>

    </div>

</body>
</html>
