<?php
$base_url = isset($base_url) ? $base_url : '';
?>

<style>
    .error {
        color: red;
    }
</style>

<script>
    const base_url = '<?= $base_url ?>';
</script>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo $base_url ?>img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact us</h2>
                    <div class="breadcrumb__links">
                        <a href="<?php echo $base_url ?>index.php">Home</a>
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
            <div class="col-lg-12 col-md-12" style="margin-top: 170px; margin-bottom: 70px;">
                <div class="contact__form">
                    <h3>Get in touch</h3>
                    <form action="#" id="contact_form">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Email" name="email">
                        <textarea placeholder="Message" name="message"></textarea>
                        <button type="submit" class="site-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->