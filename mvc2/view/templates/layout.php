<html>
    <head>
    
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <h2>gamebase</h2>
                <h4 class = "text-muted">
                    <?php
                    echo '<a href="./">kodu</a> &#187';
                    echo '<a href="books">mängid</a>';
                    if (!empty($book['bookname'])) echo'&#187'.$book['bookname'];
                    ?>
                </h4>
            </div>
            <div id="content" style = "padding-top:20px;">
            <?php 
            echo $content;
            ?>
        </div>
        <footer class="footer">
            <p>&copy; Year Design <i class = "fa fa-child"></i></p>
        </footer>
        </div>
    </body>
</html>