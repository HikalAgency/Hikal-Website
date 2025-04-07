<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hikal | Privacy Policy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP 5.3.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FONT AWESOME 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400;500&family=Noto+Sans+Devanagari:wght@300;400;500&family=Noto+Sans+Hebrew:wght@300;400;500&family=Noto+Sans+TC:wght@300;400;500&family=Noto+Sans:wght@300;400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap"
        rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style2.css">

    <!-- ICON -->
    <link rel="icon" type="image/png" href="assets/images/logo/icon.png" />

</head>

<body>
    <!-- BACKGROUND LINES -->
    <div class="accent-lines">
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- PARTICLES -->
    <canvas id="particleCanvas"></canvas>

    <!-- SCROLLABLE CONTENT -->
    <div class="body-content">
        <!-- HEADER -->
        <?php include_once('components/header.php'); ?>
        <div class="container-fluid my-5 py-5 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <!-- CAREERS -->
            <div class="my-5 pt-5">
                <h2 class="gold-grad-anim mb-2">PRIVACY POLICY</h2>
                <div class="divider"></div>
                <p>
                    At Hikal Group, we are committed to protecting your privacy. This policy explains how we handle the
                    limited information we collect when you interact with our website.
                </p>
                <div class="d-flex flex-column gap-3 text-start w-100 my-5 py-5">
                    <h5>
                        Information We Collect
                    </h5>
                    <p class="mb-4">
                        We only collect personal information when you voluntarily submit it through our contact or
                        inquiry forms. This may include: Name, Contact number and Email address.
                    </p>

                    <h5>
                        How We Use Your Information
                    </h5>
                    <p class="mb-4">
                        The information you provide is used <b>only</b>b to respond to your inquiry or request. We do
                        not
                        use your information for marketing, promotions, or any other purpose beyond direct communication
                        regarding your query.
                    </p>

                    <h5>
                        Information Sharing
                    </h5>
                    <p class="mb-4">
                        We do <b>not</b> share, sell, or distribute your information to any third parties. Your data is
                        only accessed by authorized personnel within Hikal Group to address your inquiry.
                    </p>

                    <h5>
                        Data Security
                    </h5>
                    <p class="mb-4">
                        We take reasonable measures to ensure that your information is stored securely and is protected
                        against unauthorized access or disclosure.
                    </p>

                    <h5>
                        Cookies
                    </h5>
                    <p class="mb-4">
                        We do <b>not</b> use cookies or tracking tools to collect personal information on this website.
                    </p>

                    <h5>
                        Your Consent
                    </h5>
                    <p class="mb-4">
                        By submitting your information through our forms, you consent to its use strictly for responding
                        to your inquiry.
                    </p>

                    <h5>
                        Contact Us
                    </h5>
                    <p class="mb-4">
                        If you have any questions or concerns regarding this policy, please contact us at
                        <code>info@hikal.ae</code>
                    </p>
                </div>
            </div>
        </div>

        <?php include_once('footer.php') ?>
    </div>

    <!-- PARTICLE CANVAS -->
    <script>
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');

        // Initial canvas size
        canvas.width = window.innerWidth;
        canvas.height = window.outerHeight;

        let particles = [];
        let particleCount = calculateParticleCount();

        class Particle {
            constructor() {
                this.reset();
                this.y = Math.random() * canvas.height;
                this.fadeDelay = Math.random() * 600 + 100;
                this.fadeStart = Date.now() + this.fadeDelay;
                this.fadingOut = false;
            }

            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.speed = Math.random() / 5 + 0.1;
                this.opacity = 1;
                this.fadeDelay = Math.random() * 600 + 100;
                this.fadeStart = Date.now() + this.fadeDelay;
                this.fadingOut = false;
            }

            update() {
                this.y -= this.speed;
                if (this.y < 0) {
                    this.reset();
                }

                if (!this.fadingOut && Date.now() > this.fadeStart) {
                    this.fadingOut = true;
                }

                if (this.fadingOut) {
                    this.opacity -= 0.008;
                    if (this.opacity <= 0) {
                        this.reset();
                    }
                }
            }

            draw() {
                ctx.fillStyle = `rgba(${255 - (Math.random() * 255 / 2)}, 255, 255, ${this.opacity})`;
                ctx.fillRect(this.x, this.y, 0.4, Math.random() * 2 + 1);
            }
        }

        function initParticles() {
            particles = [];
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(particle => {
                particle.update();
                particle.draw();
            });
            requestAnimationFrame(animate);
        }

        function calculateParticleCount() {
            return Math.floor((canvas.width * canvas.height) / 6000);
        }

        function onResize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            particleCount = calculateParticleCount();
            initParticles();
        }

        window.addEventListener('resize', onResize);

        initParticles();
        animate();
    </script>

</body>

</html>
<?php
?>