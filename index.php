<?php
error_reporting(1);
include("data/companies.php");
include("data/services.php");
$page = "home";
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

    <!-- ICONIFY ICONS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js"
        integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400;500&family=Noto+Sans+Devanagari:wght@300;400;500&family=Noto+Sans+Hebrew:wght@300;400;500&family=Noto+Sans+TC:wght@300;400;500&family=Noto+Sans:wght@300;400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap"
        rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- INTL-TEL-INPUT COUNTRY CODE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.0.1/js/intlTelInput.min.js"
        integrity="sha512-HR6JR+Ur/fzZ79Ptaa/u09198eEmGnwTyfXb0GVk1Sn11u1hfgYeXkYbz1hlARvrxPc06Wi1ZBbGHtYB+1n0MA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.0.1/css/intlTelInput.css"
        integrity="sha512-NaMul8MuQ8x0w6Ptgl0CZcJ3n0VsmN6mkZR4XuVQZL5ptkR6vf9wCOhm7lh+UyespK1DxZzXWBF88l7NBVv3Rw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- THREE JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script> -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js"
        integrity="sha512-f6bQMg6nkSRw/xfHw5BCbISe/dJjXrVGfz9BSDwhZtiErHwk7ifbmBEtF9vFW8UNIQPhV2uEFVyI/UHob9r7Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js"
        integrity="sha512-AcqPGqrrAEtEwe+ADO5R8RbdFi7tuU7b/A2cJJH0Im0D18NRk5p5s4B3E5PMuO81KFw0ClN7J5SHVUJz7KOb0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    <!-- <div class="body-content"> -->
    <!-- HEADER -->
    <?php include_once("components/header.php"); ?>
    <!-- HOME -->
    <div class="section section1">
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
    <div class="section section2 my-5 py-5">
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
    <div id="companies" class="section section3 justify-content-start align-items-start">
        <?php
        include_once("components/companies-list.php");
        ?>

    </div>
    <!-- SERVICES -->
    <div id="services" class="section section4 my-5 py-5">
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
    <div id="about" class="section section5 my-5 py-5">
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
    <div id="contact" class="section section6 my-5 py-5">
        <?php include_once('components/contact.php') ?>
    </div>

    <div class="section section7">
        <?php include_once('footer.php') ?>
    </div>
    <!-- </div> -->


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
    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const scrollContainer = document.querySelector(".body-content");
            const sections = scrollContainer.querySelectorAll(".section");

            if (sections.length === 0) {
                return;
            }

            let isAutoScrolling = false;
            let isInitialLoad = true;
            let lastScrollTop = scrollContainer.scrollTop || 0;
            let previousScrollTop = lastScrollTop;

            // Scroll listener on the container
            scrollContainer.addEventListener("scroll", () => {
                const currentScrollTop = scrollContainer.scrollTop || 0;
                previousScrollTop = lastScrollTop;
                lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
            });

            const observer = new IntersectionObserver(
                (entries) => {
                    if (isInitialLoad || isAutoScrolling) {
                        return;
                    }

                    const currentScrollTop = scrollContainer.scrollTop || 0;
                    const scrollingDown = currentScrollTop > previousScrollTop;

                    entries.forEach((entry) => {
                        const currentSection = entry.target;
                        const nextSection = currentSection.nextElementSibling;

                        // Skip auto-scroll if the current section is #companies
                        if (currentSection.id === "companies") {
                            return;
                        }

                        if (
                            scrollingDown &&
                            (!entry.isIntersecting || entry.intersectionRatio < 0.5) &&
                            nextSection &&
                            nextSection.classList.contains("section")
                        ) {
                            isAutoScrolling = true;
                            nextSection.scrollIntoView({ behavior: "smooth", block: "start" });

                            setTimeout(() => {
                                isAutoScrolling = false;
                            }, 1000);
                        }
                    });
                },
                {
                    root: scrollContainer,
                    threshold: 0.5,
                    rootMargin: "0px"
                }
            );

            sections.forEach((section) => {
                observer.observe(section);
            });

            setTimeout(() => {
                isInitialLoad = false;
            }, 100);
        });
    </script> -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".section");

            if (sections.length === 0) return;

            let isAutoScrolling = false;
            let isInitialLoad = true;
            let lastScrollTop = window.scrollY || 0;
            let previousScrollTop = lastScrollTop;

            // Scroll listener on the window (body)
            window.addEventListener("scroll", () => {
                const currentScrollTop = window.scrollY || 0;
                previousScrollTop = lastScrollTop;
                lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
            });

            const observer = new IntersectionObserver(
                (entries) => {
                    if (isInitialLoad || isAutoScrolling) return;

                    const currentScrollTop = window.scrollY || 0;
                    const scrollingDown = currentScrollTop > previousScrollTop;

                    entries.forEach((entry) => {
                        const currentSection = entry.target;
                        const nextSection = currentSection.nextElementSibling;

                        // Skip auto-scroll if the current section is #companies
                        if (currentSection.id === "companies") return;

                        if (
                            scrollingDown &&
                            (!entry.isIntersecting || entry.intersectionRatio < 0.5) &&
                            nextSection &&
                            nextSection.classList.contains("section")
                        ) {
                            isAutoScrolling = true;
                            nextSection.scrollIntoView({ behavior: "smooth", block: "start" });

                            setTimeout(() => {
                                isAutoScrolling = false;
                            }, 1000);
                        }
                    });
                },
                {
                    root: null, // Use viewport (body) as root
                    threshold: 0.5,
                    rootMargin: "0px"
                }
            );

            sections.forEach((section) => {
                observer.observe(section);
            });

            setTimeout(() => {
                isInitialLoad = false;
            }, 100);
        });
    </script> -->

    <!-- MOBILE VIEWPORT FIX -->
    <script>
        // Set custom --vh unit for mobile
        function setVH() {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }
        setVH();
        window.addEventListener('resize', setVH);
    </script>

    <!-- SECTION VERTICAL SCROLL -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".section");

            if (sections.length === 0) return;

            let isAutoScrolling = false;
            let isInitialLoad = true;
            let lastScrollTop = window.scrollY || 0;
            let previousScrollTop = lastScrollTop;

            window.addEventListener("scroll", () => {
                const currentScrollTop = window.scrollY || 0;
                previousScrollTop = lastScrollTop;
                lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
            });

            const observer = new IntersectionObserver(
                (entries) => {
                    if (isInitialLoad || isAutoScrolling) return;

                    const currentScrollTop = window.scrollY || 0;
                    const scrollingDown = currentScrollTop > previousScrollTop;

                    entries.forEach((entry) => {
                        const currentSection = entry.target;
                        const nextSection = currentSection.nextElementSibling;

                        if (currentSection.id === "companies") return;

                        if (
                            scrollingDown &&
                            (!entry.isIntersecting || entry.intersectionRatio < 0.5) &&
                            nextSection &&
                            nextSection.classList.contains("section")
                        ) {
                            isAutoScrolling = true;
                            nextSection.scrollIntoView({ behavior: "smooth", block: "start" });
                            setTimeout(() => {
                                isAutoScrolling = false;
                            }, 1000);
                        }
                    });
                },
                {
                    root: null,
                    threshold: 0.5,
                    rootMargin: "0px"
                }
            );

            sections.forEach((section) => {
                observer.observe(section);
            });

            setTimeout(() => {
                isInitialLoad = false;
            }, 100);
        });
    </script>

    <!-- SCROLLTRIGGER REFRESH -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Refresh ScrollTrigger on resize to handle mobile viewport changes
            window.addEventListener("resize", () => {
                ScrollTrigger.refresh();
            });
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