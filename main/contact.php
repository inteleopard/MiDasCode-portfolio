<?php
$base_url = isset($base_url) ? $base_url : '';
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo $base_url ?>img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact us</h2>
                    <div class="breadcrumb__links">
                        <a href=<?php echo $base_url ?>index.php">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Call To Action Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="contact__form">
                    <h3>Get in touch</h3>
                    <form action="#">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Website">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="site-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->