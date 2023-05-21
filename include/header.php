<?php
$base_url = isset($base_url) ? $base_url : '';
$path_info = isset($path_info) ? $path_info : '';
?>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="<?php echo $base_url ?>index.php"><img src="<?php echo $base_url ?>img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li <?php if (!$path_info || $path_info == 'home') { echo 'class = "active"'; } ?>><a href="<?php echo $base_url ?>index.php/home">Home</a></li>
                            <li <?php if ($path_info == 'about') { echo 'class = "active"'; } ?>><a href="<?php echo $base_url ?>index.php/about">About</a></li>
                            <li <?php if ($path_info == 'portfolio') { echo 'class = "active"'; } ?> ><a href="<?php echo $base_url ?>index.php/portfolio">Portfolio</a></li>
                            <li <?php if ($path_info == 'services') { echo 'class = "active"'; } ?> ><a href="<?php echo $base_url ?>index.php/services">Services</a></li>
                            <li <?php if ($path_info == 'contact') { echo 'class = "active"'; } ?> ><a href="<?php echo $base_url ?>index.php/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>