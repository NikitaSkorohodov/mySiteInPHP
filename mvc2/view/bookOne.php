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
    
    <div class="header">
        <div class="logo">
            <h1> <a href="/NikitaSkorohodov.github.io/index.html/index.html"><img width="40" src="view\logo5.png"></a></a></h1>
            <div class="logo.txt"> <div class="container-fluid"><div class="row"><div class="col-8">
                 <h1><a href="docktype.html">BestGames</a></h1>
                
            </div>
        </div>
    </div>
        </div>
    
        <div class="menubar">
            
            <div class="main">               
           
                <ul class="menu">
                 <div class="container-fluid">
                    <div class="row">
                    
                    <div class="col-lg-3"><li><a href="view/templates/layout.php">Kodu</a></li></div>
                    <div class="col-lg-3"><li><a href="films.html">mängid</a></li></div>
                    <div class="col-lg-4"><li><a href="seria.html">tasuta mängud</a></li></div>
                    <div class="col-lg-2"><li><a href="contact.html">Kontaktid</a></li></div>
                </div>
                </div>
                </ul>
            
        </div>

    </div>
    
    
</div>

        
        <div class="site_content">

            <div class="sidebar_container">

                <div class="sidebar">
                    <h2>Otsing</h2>
                    <form method="post" action="#" id="search_form">
                        <input type="search" name="search_field" placeholder="teie taotlus"/>
                        <input type="submit" class="btn" value="leida"/>
                    </form>
                </div>

                <div class="sidebar">
                    <h2>Sissepääs</h2>
                    <form method="post" action="#" id="login">

                        <input type="text" name="login_field" placeholder="Logi sisse"/>
                        <input type="password" name="password_field" placeholder="parool"/>
                        <input type="submit" class="btn" value="sisend"/>
                        <div class="lables_passreg_text">
                            <span><a href="#">Unustasid parooli?</a></span> | <span><a href="#">registreerimine</a></span>
                        </div>

                    </form>
                </div>

            </div>

            <div class="content">

                
                <hr>
            <?php 
                ob_start();

                echo '<article>';
                echo '<h3>'.$book['bookname'].'</h3>';
                echo '<img src = "public/images/'.$book['image'].'">';
                echo '<p>Tootja(s): '.$book['author'].'</p>';
                echo '<p>Price: '.$book['price'].'</p>';
                echo '<p>mängu kohta: '.$book['description'].'</p>';
                echo '<p style="padding-top:10px;">';
                echo '<a href="books" role="button"> Back &raquo;</a>';
                echo '<p>';
                echo '</article>';
                echo '<div style="clear:both;"></div>';
                
            ?>
        
                <hr>
                <div class="send">
                    <form method="post" action="#" id="review">
                        <input type="text" name="review_name" placeholder="Sinu nimi">
                        <textarea name="review_text"></textarea>
                        <input class="btn" type="submit" value="saada"> 
                    </form>

                </div>  
            </div>
         </div>
        <div class="footer">
            <p>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-2"><a href="docktype.html">Kodu</a></li></div>
                    <div class="col-lg-2"><a href="films.html">mängid</a></li></div>
                    <div class="col-lg-2"><a href="seria.html">tasuta mängud</a></li></div>
                    <div class="col-lg-2"><a href="contact.html">Kontaktid</a></li></div>
                </div>
                </div>
            </p>
            <a href="dead.html"><img width="40" src="view\logo5.png"></a>
            
        </div>
    </div>
    
</body>
</html>
