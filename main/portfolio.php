<?php
$base_url = isset($base_url) ? $base_url : '';
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo $base_url ?>img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Portfolio</h2>
                    <div class="breadcrumb__links">
                        <a href="<?php echo $base_url ?>index.php">Home</a>
                        <span>Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Portfolio Section Begin -->
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".casino-games">Gambling</li>
                    <li data-filter=".metaverse-games">Metaverse</li>
                    <li data-filter=".unity-games">Unity</li>
                    <li data-filter=".fps">FPS</li>
                    <li data-filter=".webgl">WebGL</li>
                    <li data-filter=".mobile">Mobile</li>
                    <li data-filter=".web">Web</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Scissor.jpg">
                        <a href="<?php echo $base_url ?>videos/scissor.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Rock & Scissor & Paper</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Crash.jpg">
                        <a href="<?php echo $base_url ?>videos/crash.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Crash</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Dice.jpg">
                        <a href="<?php echo $base_url ?>videos/dice.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Dice</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Turtle.jpg">
                        <a href="<?php echo $base_url ?>videos/turtle.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Turtle Race</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Mines.jpg">
                        <a href="<?php echo $base_url ?>videos/mines.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Mines</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Slot.jpg">
                        <a href="<?php echo $base_url ?>videos/slot.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Slot</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games web webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/PlayZelo_Plinko.jpg">
                        <a href="<?php echo $base_url ?>videos/plinko.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Plinko</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix metaverse-games fps">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/kohai.jpg">
                        <a href="<?php echo $base_url ?>videos/Kohai_Clan.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Kohaiclan</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix webgl mobile fps">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/kromaru.jpg">
                        <a href="<?php echo $base_url ?>videos/kromaru.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Kromaru</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/wow.png">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Woo</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/crossmo.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Crossmo</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix unity-games metaverse-games mobile webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/plundering.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Plundering Pirate</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix metaverse-games mobile webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/pacverse.jpg">
                        <a href="<?php echo $base_url ?>videos/pacverse.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Pacverse</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix unity-games metaverse-games mobile webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/cocacola1.jpg">
                        <a href="<?php echo $base_url ?>videos/cokeverse.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>CokeVerse - Coca Cola</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix unity-games webgl casino mobile">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/angel.png">
                        <a href="<?php echo $base_url ?>videos/angel.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Angel</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix metaverse-games unity-games fps">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/appwar.png">
                        <a href="<?php echo $base_url ?>videos/ape_war.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Ape War</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games mobile">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/baucua.png">
                        <a href="<?php echo $base_url ?>videos/Baucua.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Baucua</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games mobile">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/cryptoslot.png">
                        <a href="<?php echo $base_url ?>videos/cryptoslot.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Crypto Slot</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix metaverse-games webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/gamedemo.png">
                        <a href="<?php echo $base_url ?>videos/game_demo.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Heroes</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/extradrawpoker.png">
                        <a href="<?php echo $base_url ?>videos/extradrawpoker.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>ExtraDrawPoker</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/roulette.png">
                        <a href="<?php echo $base_url ?>videos/roulette.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Roulette</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games unity-games">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/slotokinga.png">
                        <a href="<?php echo $base_url ?>videos/slotokinga.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>SlotoKinga</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games webgl">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/taixiu.png">
                        <a href="<?php echo $base_url ?>videos/taixiu.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>TaiXiu</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix casino-games webgl unity-games">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/aviator.png">
                        <a href="<?php echo $base_url ?>videos/unity_aviator.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Aviator</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix webgl casino-games">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/billiard.png">
                        <a href="<?php echo $base_url ?>videos/8ball.mp4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Sol Billiard</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/plasbit.png">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>PlasBit</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/rolling.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Rolling</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/robust.png">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Robust Swap</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo $base_url ?>img/portfolio/ynh.png">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Your NFT Hub</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->