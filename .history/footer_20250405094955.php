<?php
?>
<footer>
    <div
        class="container container-fluid d-flex flex-column align-items-center justify-content-center gap-4 text-center my-5 pt-5">
        <!-- FORM -->
        <div>
            <h3 class="gold-grad-anim mb-2">Get in Touch</h3>
            <div class="divider"></div>
            <p class="mb-5">
                We’d love to hear from you! Fill out the form below, and our team will reach out shortly.
            </p>
            <form class="row">
                <div class="col-12 col-md-6 p-4 d-flex flex-column gap-2">
                    <p class="px-1 primary-text text-start">
                        Name
                    </p>
                    <input type="text" name="name" id="name" required />
                    <p class="px-1 primary-text text-start">
                        Phone
                    </p>
                    <input type="tel" name="phone" id="phone" required />
                    <p class="px-1 primary-text text-start">
                        Email
                    </p>
                    <input type="text" name="email" id="email" required />
                </div>
                <div class="col-12 col-md-6 p-4">
                <p class="px-1 primary-text text-start">
                        Message
                    </p>
                    <input type="text" name="name" id="name" required />
                </div>
            </form>
        </div>
        <!-- LOGO -->
        <img src="assets/images/logo/HikalGroup.png" alt="Hikal Group" style="width: 300px;" />
        <!-- SOCIAL LINKS -->
        <div class="social-links d-flex gap-4 align-items-center justify-content-center">
            <a href="https://www.linkedin.com/company/hikal" class="social-link">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/hikalagency/" class="social-link">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/hikalagency/" class="social-link">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.tiktok.com/@hikalagency" class="social-link">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCR0EzeM3p9GRGp6bMU1D-jA" class="social-link">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </div>
        <!-- COPYRIGHT -->
        <div class="copyright">
            <span class="primary-text">Hikal</span>
            © <?php echo date("Y"); ?>. All Rights Reserved.
            <span class="primary-text">Privacy Policy</span>
        </div>
    </div>
</footer>