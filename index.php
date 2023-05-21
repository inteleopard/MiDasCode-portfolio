<!DOCTYPE html>
<html lang="zxx">
    <?php
    include 'include/config.php';
    $base_url = isset($base_url) ? $base_url : '';
    $path_info = isset($path_info) ? $path_info : '';
?>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Videograph Template">
        <meta name="keywords" content="Videograph, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>img/icon.png">
        <title>MiDasCode</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
              rel="stylesheet">
        <!-- Google Font -->

        <!-- Css Styles -->
        <?php include 'include/style.php'?>
        <!-- Css Styles -->
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Header Section Begin -->
        <?php include 'include/header.php'?>
        <!-- Header End -->
        <?php
            if (!isset($_SERVER['PATH_INFO'])){
                include 'main/home.php';
            }else{
                include 'main/'.$path_info.'.php';
            }
        ?>
        <!-- Footer Section Begin -->
        <?php include 'include/footer.php'?>
        <!-- Footer Section End -->
        <!-- Js Plugins -->
        <?php include 'include/script.php'?>
        <!-- Js Plugins -->
    </body>
</html>