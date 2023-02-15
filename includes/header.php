<html>
    <head>
        <title>Wypożyczalnia Filmów</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        
        <?php
            $db = new mysqli ("localhost", "root", "", "filmy");
            $db -> query ('SET NAMES utf8');
            session_start();
        ?>
    </head>
    <body>
        <div class="header">
            <h1>Wypożyczalnia filmów</h1>
        </div>
    </body>
</html>