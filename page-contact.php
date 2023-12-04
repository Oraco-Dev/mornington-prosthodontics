<?php

get_header();


?>

<section class="co__banner">
    <div class="container">
        <div class="container__inner">
            <div class="co__banner-outer">
                <div class="co__banner-outer-left fade-content delay-200">
                    <h1>Contact us</h1>
                    <div class="co__banner-outer-left-box">
                        <h4>PHONE</h4>
                        <span class="footer-text">03 9923 8255</span>
                        <a href="tel:0399238255" class="footer-text"> CALL <img
                                src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right-small.png"
                                alt="Right Arrow Icon" /></a>
                    </div>
                    <div class="co__banner-outer-left-box">
                        <h4>EMAIL</h4>
                        <span class="footer-text">info@morningtonpros.com.au</span>
                        <a href="mailto:info@morningtonpros.com.au" class="footer-text"> EMAIL <img
                                src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right-small.png"
                                alt="Right Arrow Icon" /></a>
                    </div>
                    <div class="co__banner-outer-left-box">
                        <h4>ADDRESS</h4>
                        <span class="footer-text">1022 Nepean Highway, <br /> Mornington Vic 3931</span>
                        <a href="https://maps.app.goo.gl/MkYqRt346rF6wwCX9\" class="footer-text"> ADDRESS <img
                                src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right-small.png"
                                alt="Right Arrow Icon" /></a>
                    </div>
                </div>
                <div class="co__banner-outer-right fade-content delay-400">
                    <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="co__gallery">
    <div class="co__gallery-left fade-content delay-600">
        <img src="http://morningtonpros.local/wp-content/uploads/2023/11/Morninton-Prosthodontics-Clinic.jpg"
            alt="Image of Mornington Prosthodontics" />
    </div>
    <div class="co__gallery-right fade-content delay-800">
        <img src="http://morningtonpros.local/wp-content/uploads/2023/11/Morninton-Prosthodontics-Clinic.jpg"
            alt="Image of Mornington Prosthodontics" />
    </div>
</section>



<? get_footer(); ?>