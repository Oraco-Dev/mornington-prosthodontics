<footer class="footer">
    <div class="container">
        <div class="container__inner">
            <div class="footer__outer top">
                <div class="footer__outer-col one fade-content delay-200">
                    <a href="/">
                        <img src="http://morningtonpros.local/wp-content/uploads/2023/11/MOP_Icon-White.svg"
                            alt="Mornington Prostedontics Logo" />
                    </a>
                </div>
                <div class="footer__outer-col two fade-content delay-400">
                    <h5>ABOUT</h5>
                    <div class="footer__outer-col-links">
                        <a href="/about/#our-team" class="footer-text">Our team</a>
                        <a href="/#faq" class="footer-text">FAQs</a>
                        <a href="/contact" class="footer-text">Contact us</a>
                    </div>
                </div>
                <div class="footer__outer-col three fade-content delay-600">
                    <h5>OUR PROCEDURES</h5>
                    <div class="footer__outer-col-links">
                        <a href="/procedures/cosmetic-dentistry/" class="footer-text">Cosmetic dentistry</a>
                        <a href="/procedures/crown-and-bridgework/" class="footer-text">Crown and bridgework</a>
                        <a href="/procedures/dental-implant-restorations/" class="footer-text">Dental implant
                            restoration</a>
                        <a href="/procedures/dentures-and-partial-dentures/" class="footer-text">Dentures and partial
                            dentures</a>
                        <a href="/procedures/full-mouth-oral-rehabilitation/" class="footer-text">Full mouth oral
                            rehabilitation</a>
                        <a href="/procedures/veneers/" class="footer-text">Veneers</a>
                    </div>
                </div>
                <div class="footer__outer-col four fade-content delay-800">
                    <h5>CONTACT US</h5>
                    <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                </div>
            </div>
            <div class="footer__divider">
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-outer">
                    <div class="footer__bottom-outer-col one fade-content delay-200">
                        <h4>PHONE</h4>
                        <span class="footer-text">03 9923 8255</span>
                        <a href="tel:0399238255" class="footer-text"> CALL <img
                                src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right-small.png"
                                alt="Right Arrow Icon" /></a>
                    </div>
                    <div class="footer__bottom-outer-col two fade-content delay-400">
                        <h4>EMAIL</h4>
                        <span class="footer-text">info@morningtonpros.com.au</span>
                        <a href="mailto:info@morningtonpros.com.au" class="footer-text"> EMAIL <img
                                src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right-small.png"
                                alt="Right Arrow Icon" /></a>
                    </div>
                    <div class="footer__bottom-outer-col three fade-content delay-600">
                        <h4>ADDRESS</h4>
                        <span class="footer-text">1022 Nepean Highway, <br /> Mornington Vic 3931</span>
                        <a href="https://maps.app.goo.gl/MkYqRt346rF6wwCX9\" class="footer-text"> ADDRESS <img
                                src="http://morningtonpros.local/wp-content/uploads/2023/11/arrow-right-small.png"
                                alt="Right Arrow Icon" /></a>
                    </div>
                </div>
            </div>

        </div>
</footer>

<div class="container">
    <div class="container__inner">
        <div class="footer__terms">
            <div class="footer__terms-outer">
                <span class="footer-copyright-text fade-content delay-200">&copy;
                    <?php echo do_shortcode("[current_year]") ?> Mornington Prosthodontics. All rights reserved.
                </span>
                <a href="/privacy-policy" class="footer-copyright-text fade-content delay-400">
                    Privacy Policy
                </a>
                <a href="https://oraco.com.au" target="_blank" class="footer-copyright-text fade-content delay-600">
                    Site by Oraco
                </a>
            </div>
        </div>
    </div>
</div>


<!-- WORDPRESS TEMPLATE FOR FOOTER -->
</body>

</html>

<?php wp_footer(); ?>