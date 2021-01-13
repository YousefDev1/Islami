<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pro/pro.css">
    <link rel="stylesheet" href="css/about.css">
    <!-- Primary Meta Tags -->
    <title>عن الموقع</title>
    <meta name="title" content="اسلامي">
    <meta name="description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.yousefpro.com">
    <meta property="og:title" content="عن الموقع">
    <meta property="og:description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">
    <meta property="og:image" content="./imgs/logo.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.yousefpro.com">
    <meta property="twitter:title" content="عن الموقع">
    <meta property="twitter:description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">
    <meta property="twitter:image" content="./imgs/logo.jpg">
</head>
<body>
    <?php
        require "conn.php";

        include "./includes/header.php"
    ?>

    <div class="container content">
        <div class="img">
            <img src="./imgs/logo.jpg" alt="">
        </div>
        <div class="text text-center">
            <p>اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم</p>
            <p>تم تطوير هذا الموقع بواسطة <a href="https://www.linkedin.com/in/yousef-dev/" target="_blank">يوسف محمود</a></p>
            <p>تم استخدام api من موقع <a href="https://www.mp3quran.net/" target="_blank">mp3quran</a></p>
        </div>
    </div>

    <div class="change-mode" id="change-mode">
        <span><i class="pro-sun-o"></i></span>
    </div>

    <script src="js/theme.js"></script>
</body>
</html>