<html>
<head>
    <style>
    .d1
        {
        background: blue;
        height: 500px;
        width: 1000px;
        font-size: 10px;
        text-align: center;
        }
    
    
    
    
    </style>
    </head>
    <body>
    <?php
        session_start();
        $con = new mysqli("127.0.0.1", "root","","filmy");
        echo '<form method="POST">';
        $res = $con->query("SELECT * FROM user");
        $con = $res->fetch_all();
    
    
    ?>
    </body>
</html>