<?php
error_reporting(1);
include("data/companies.php");
include("data/services.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hikal Group</title>
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

    <!-- THREE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

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
        <?php include_once("components/header.php"); ?>
        <!-- HOME -->
        <div class="section">
            <div class="hikal-intro">
                <p>Introducing</p>
            </div>
            <div class="hikal">
                <div class="hikalText">
                    <h2>HIKAL</h2>
                    <h2>HIKAL</h2>
                </div>
            </div>
            <p class="hikal-group">GROUP</p>
            <img class="monument" src="assets/images/graphics/monument.png" alt="Hikal Group">
        </div>
        <!-- INTRO -->
        <div class="section section1 my-5 py-5">
            <div class="container container-fluid ">
                <h3 class="gold-grad">
                    Redefining Excellence Across Borders
                </h3>
                <div class="divider"></div>
                <p>
                    Welcome to Hikal Group, where innovation meets integrity to deliver exceptional services
                    across the Middle East and beyond. Our diversified portfolio spans real estate, marketing
                    management,
                    and
                    technology solutions, each division driven by a commitment to excellence and client satisfaction.
                </p>
            </div>
        </div>
        <!-- COMPANIES -->
        <div id="companies" class="section section2 my-5 py-5">
            <div class="container-fluid">
                <h3 class="gold-grad-anim mb-2">Our Companies</h3>
                <h6 class="text-white">INNOVATING ACROSS DIVERSE INDUSTRIES</h6>
                <div class="divider"></div>
            </div>
            <?php include_once("components/companies-list.php"); ?>
        </div>
        <!-- SERVICES -->
        <div id="services" class="section section3 my-5 py-5">
            <div class="container container-fluid text-center">
                <h3 class="gold-grad-anim mb-2">Our Services</h3>
                <h6 class="text-white">COMPREHENSIVE SOLUTIONS FOR EVERY NEED</h6>
                <div class="mb-5"></div>
                <?php include_once("components/services-list.php"); ?>
                <div id="sub-services">
                </div>
            </div>
        </div>
        <!-- ABOUT -->
        <div id="about" class="section section4 my-5 py-5">
            <div class="container container-fluid text-center">
                <h3 class="gold-grad-anim mb-2">About Us</h3>
                <div class="divider"></div>
                <p>
                    Welcome to Hikal Group, where we are dedicated to redefining excellence across a broad spectrum of
                    industries. From real estate consultation and marketing strategies to custom software development
                    and
                    professional cleaning services, we provide comprehensive solutions tailored to your needs. Our
                    commitment to
                    innovation, quality, and customer satisfaction sets us apart, driving us to deliver exceptional
                    results
                    in
                    every project we undertake.
                </p>
                <p>
                    At Hikal Group, we believe in the power of collaboration and the importance of adapting to the
                    ever-changing
                    market landscape. Our team of experts brings a wealth of experience and a passion for excellence,
                    ensuring
                    that we consistently exceed our clients' expectations.
                </p>
                <p>
                    Join us on our journey as we continue to innovate and excel across diverse industries, making a
                    lasting
                    impact on the communities we serve.
                </p>
            </div>
        </div>

        <!-- CONTACT -->
        <div id="contact" class="section section5 my-5 py-5">
            <div class="container container-fluid text-center">
                <h3 class="gold-grad-anim mb-2">Contact Us</h3>
                <h6 class="text-white">YOUR CONNECTION TO EXCELLENCE</h6>
                <div class="divider"></div>
                <p class="mb-5">
                    <!-- We’d love to hear from you! Whether you have questions, need more information about our services, or
                    want to discuss a potential project, our team is here to help. -->
                    Smart Solutions, Real Growth Hikal Group transforms companies with innovative real estate,
                    marketing, and technology solutions. Growing up or growing from scratch, we've got you covered.
                    Let's create something incredible contact us now
                </p>
                <div class="p-4 text-start mb-5">
                    <div
                        class="d-flex flex-column gap-2 gap-md-5 flex-md-row align-items-center justify-content-center">
                        <a href="mailto:info+website@hikal.ae" class="text-white">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="mx-2">info@hikal.ae</span>
                        </a>
                        <a href="tel:+97142621133" class="text-white">
                            <i class="fa-solid fa-phone"></i>
                            <span class="mx-2">+971 4 262 1133</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                        <div class="blur-con h-100">
                            <div class="contact-card p-4 h-100">
                                <p class="gold-grad"><b>UNITED ARAB EMIRATES</b></p>
                                <p><small>1610, SIT Tower, Dubai Silicon Oasis, Dubai, UAE</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                        <div class="blur-con h-100">
                            <div class="contact-card p-4 h-100">
                                <p class="gold-grad"><b>EGYPT</b></p>
                                <p><small>51, Skies Plaza Mall, 90th Street, 5th Settlement, New Cairo, Egypt</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                        <div class="blur-con h-100">
                            <div class="contact-card p-4 h-100">
                                <p class="gold-grad"><b>PAKISTAN</b></p>
                                <p><small>Islamabad, Pakistan</small></p>
                            </div>
                        </div>
                    </div>
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

    <!-- SECTION SCROLL -->
    <script>
        // document.addEventListener("DOMContentLoaded", () => {
        //     const sections = document.querySelectorAll(".section");
        //     let isScrolling = false;

        //     const observer = new IntersectionObserver((entries) => {
        //         if (isScrolling) return;

        //         entries.forEach((entry) => {
        //             if (entry.isIntersecting && entry.intersectionRatio >= 0.6) {
        //                 const currentSection = entry.target;
        //                 const nextSection = currentSection.nextElementSibling;

        //                 if (nextSection && nextSection.classList.contains('section')) {
        //                     isScrolling = true;
        //                     nextSection.scrollIntoView({ behavior: "smooth" });

        //                     // Wait before allowing the next scroll
        //                     setTimeout(() => {
        //                         isScrolling = false;
        //                     }, 1000);
        //                 }
        //             }
        //         });
        //     }, {
        //         threshold: 0.6
        //     });

        //     sections.forEach((section) => observer.observe(section));
        // });
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".section");
            let isScrolling = false;
            let currentSectionIndex = 0;

            function scrollToNextSection() {
                if (isScrolling || currentSectionIndex >= sections.length - 1) return;

                const current = sections[currentSectionIndex];
                const rect = current.getBoundingClientRect();

                // Check if 50% of current section has passed above the viewport
                if (rect.top < -rect.height * 0.5) {
                    isScrolling = true;
                    currentSectionIndex++;

                    sections[currentSectionIndex].scrollIntoView({ behavior: "smooth" });

                    setTimeout(() => {
                        isScrolling = false;
                    }, 800); // Delay must match scroll duration
                }
            }

            window.addEventListener("scroll", scrollToNextSection);
        });
    </script>



    <!-- SERVICES -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const isMobile = window.innerWidth <= 750;
            const dotCircle = document.querySelector('.dotCircle');
            const itemDots = document.querySelectorAll('.itemDot');
            const contentCircles = document.querySelectorAll('.CirItem');
            const subServicesContainer = document.getElementById('sub-services');
            let activeTab = 2;

            const services = <?php echo json_encode($services); ?>;

            const updateSubServices = (index) => {
                const service = services[index];
                if (!service.subservices || service.subservices.length === 0) {
                    subServicesContainer.innerHTML = '';
                    return;
                }

                let subServicesHtml = `
                        <div class="mt-4">
                            <div class="row d-flex justify-content-center">`;

                service.subservices.forEach(subservice => {
                    subServicesHtml += `
                        <div class="col-12 col-md-4 p-2">
                            <div class="blur-con h-100">
                                <div class="p-4 text-center services-card h-100">
                                    <p class="gold-grad" style="text-transform: capitalize;">${subservice.title}</p>
                                    <p class="m-0" style="font-size: small;">${subservice.subtitle}</p>
                                </div>
                            </div>
                        </div>`;
                });

                subServicesHtml += `
                        </div>
                    </div>`;

                subServicesContainer.innerHTML = subServicesHtml;
            };

            const handleTabClick = (index) => {
                activeTab = index;
                itemDots.forEach((item) => item.classList.remove('active'));
                document.querySelector(`.itemDot${index}`).classList.add('active');
                contentCircles.forEach((item) => item.classList.remove('active'));
                document.querySelector(`.CirItem${index}`).classList.add('active');

                dotCircle.style.transform = `rotate(${360 - (index * 36)}deg)`;
                dotCircle.style.transition = '2s';

                itemDots.forEach((item) => {
                    item.style.transform = `rotate(${index * 36}deg)`;
                    item.style.transition = '1s';
                });

                updateSubServices(index);
            };

            itemDots.forEach((item, index) => {
                item.addEventListener('click', () => handleTabClick(index));
            });

            const radius = isMobile ? 150 : 200;
            const step = (2 * Math.PI) / itemDots.length;

            itemDots.forEach((item, index) => {
                const angle = index * step;
                const x = Math.round(radius + radius * Math.cos(angle) - item.clientWidth / 2);
                const y = Math.round(radius + radius * Math.sin(angle) - item.clientHeight / 2);
                item.style.left = `${x}px`;
                item.style.top = `${y}px`;
            });

            setInterval(() => {
                activeTab = activeTab === itemDots.length - 1 ? 0 : activeTab + 1;
                handleTabClick(activeTab);
            }, 5000);

            // Initial call to display the sub-services for the active tab
            updateSubServices(activeTab);
        });

    </script>
</body>

</html>
<?php
?>