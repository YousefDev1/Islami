<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pro/pro.css">
    <link rel="stylesheet" href="css/suras.css">
    <link rel="shortcut icon" href="./imgs/logo.jpg" type="image/x-icon">
    <?php

        require_once "conn.php";

        if(!isset($_GET['id']) || !is_numeric($_GET['id']))
        {
            header('location: index.php');
        }else{
            $id = intval($_GET['id']);
        

        $select_reciter = mysqli_query($db_conn, "SELECT * FROM reciters WHERE id='$id'");
        $fetch_reciter  = mysqli_fetch_array($select_reciter);

        $sura_id = isset($_GET['sura_id']) && is_numeric($_GET['sura_id']) ? intval($_GET['sura_id']) : 1;
    ?>
    <title><?php echo $fetch_reciter['name'] ?></title>
    <meta name="title" content="<?php echo $fetch_reciter['name'] ?>">
    <meta name="description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.yousefpro.com">
    <meta property="og:title" content="<?php echo $fetch_reciter['name'] ?>">
    <meta property="og:description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">
    <meta property="og:image" content="./imgs/logo.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.yousefpro.com">
    <meta property="twitter:title" content="<?php echo $fetch_reciter['name'] ?>">
    <meta property="twitter:description" content="اسلامي هو موقع يحتوي علي عدد كبير من القراء و بعدة روايات للاستماع الي القران الكريم">
    <meta property="twitter:image" content="./imgs/logo.jpg">
</head>
<body>
    
    
    <?php
        include "./includes/header.php"
    ?>
    <div class="container content">
        <div class="reciter-name flex justify-center align-center">
            <?php echo $fetch_reciter['name'] ?>
        </div>

        <div class="row player">
            <div class="col-9 flex justify-center">
                <audio controls autoplay>
                    <?php 
                        if(strlen($sura_id) == 1)
                        {
                            $sura_filename = '00' . $sura_id;
                        }else if(strlen($sura_id) == 2){
                            $sura_filename = '0' . $sura_id;
                        }else{
                            $sura_filename = $sura_id;
                        }
                    ?>
                    <source src="<?php echo $fetch_reciter['Server'] . '/' . $sura_filename . '.mp3' ?>" type="audio/mp3">
                </audio>
            </div>
        </div>

        <div class="row">
            <?php
                
                $suras = $fetch_reciter['suras'];
                $suras_arr = explode(',', $suras);

                foreach($suras_arr as $sura_id)
                {
                    $select_suraname = mysqli_query($db_conn, "SELECT * FROM suras WHERE number='$sura_id'");
                    $fetch_suraname  = mysqli_fetch_array($select_suraname);

            ?>  
                <div class="col-3">
                    <div class="sura-card">
                        <a class="card__name" href="?id=<?php echo $fetch_reciter['id'] ?>&sura_id=<?php echo $sura_id ?>"><?php echo $fetch_suraname['name'] ?></a>
                        <div class="sura-ayat">
                            عدد الايات :  <?php echo $fetch_suraname['numberOfAyahs'] ?> 
                        </div>
                    </div>
                </div>
            <?php         
                }
                
            ?>
        </div>
    </div>


    
    <?php
        }
    ?>
</body>
</html>