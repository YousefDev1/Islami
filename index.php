<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pro/pro.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./imgs/logo.jpg" type="image/x-icon">
    <title>Islami</title>
</head>
<body>
    <?php

        require_once "conn.php";

        $select_reciters = mysqli_query($db_conn, "SELECT * FROM reciters ORDER BY letter");
        
        include "./includes/header.php"
    ?>
    <div class="container content">
        <div class="row">
            
                <?php
                while($fetch_reciters = mysqli_fetch_array($select_reciters))
                {
                ?>
                    <div class="col-3">
                        <div class="reciter-card">
                            <a href="reciter?id=<?php echo $fetch_reciters['id'] ?>" class="card__name">
                                <?php echo $fetch_reciters['name'] ?>
                            </a>
                            <div class="card__rewaya py-10">
                                الرواية : <?php echo $fetch_reciters['rewaya'] ?>
                            </div>
                            <div class="card__suras-num fsize-15">
                                <?php echo $fetch_reciters['count'] ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
</body>
</html>