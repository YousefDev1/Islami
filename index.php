<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pro/pro.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./imgs/logo.jpg" type="image/x-icon">
    <!-- Primary Meta Tags -->
    <title>اسلامي</title>
    <meta name="title" content="اسلامي">
    <meta name="description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.yousefpro.com">
    <meta property="og:title" content="اسلامي">
    <meta property="og:description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">
    <meta property="og:image" content="./imgs/logo.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.yousefpro.com">
    <meta property="twitter:title" content="اسلامي">
    <meta property="twitter:description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">
    <meta property="twitter:image" content="./imgs/logo.jpg">
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

    <div class="change-mode" id="change-mode">
        <span><i class="pro-sun-o"></i></span>
    </div>

    <script src="js/theme.js"></script>
</body>
</html>