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
        <div class="section container container-fluid my-5 py-5">
            <h4 class="gold-grad">
                Redefining Excellence Across Borders
            </h4>
            <div class="divider"></div>
            <p>
                Welcome to Hikal Group, where innovation meets integrity to deliver exceptional services
                across the Middle East and beyond. Our diversified portfolio spans real estate, marketing
                management,
                and
                technology solutions, each division driven by a commitment to excellence and client satisfaction.
            </p>
        </div>
        <!-- COMPANIES -->
        <div id="companies" class="companies-section my-5 py-5">
            <div class="container-fluid">
                <h4 class="gold-grad-anim mb-2">Our Companies</h4>
                <h6 class="text-white">INNOVATING ACROSS DIVERSE INDUSTRIES</h6>
                <div class="divider"></div>
            </div>
            <?php include_once("components/companies-list.php"); ?>
        </div>
        <!-- SERVICES -->
        <div id="services" class="py-5">
            <div class="container container-fluid my-5 text-center">
                <h4 class="gold-grad-anim mb-2">Our Services</h4>
                <h6 class="text-white">COMPREHENSIVE SOLUTIONS FOR EVERY NEED</h6>
                <div class="mb-5"></div>
                <?php include_once("components/services-list.php"); ?>
                <div id="sub-services">
                </div>
            </div>
        </div>
        <!-- <div id="services" class="services-section">
        <div class="services-container">
            <section class="s-section" id="section1">
                <div class="graphics">
                    <div class="image-one services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-two services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-three services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-four services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                </div>
            </section>
            <section class="s-section" id="section2">
                <div class="graphics">
                    <div class="image-one services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-two services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-three services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-four services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                </div>
            </section>
            <section class="s-section" id="section3">
                <div class="graphics">
                    <div class="image-one services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-two services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-three services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-four services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                </div>
            </section>
            <section class="s-section" id="section4">
                <div class="graphics">
                    <div class="image-one services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-two services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-three services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-four services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                </div>
            </section>
            <section class="s-section" id="section5">
                <div class="graphics">
                    <div class="image-one services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-two services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-three services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                    <div class="image-four services-image"><img src="https://hikalgroup.ae/assets/images/logo/logo.png"
                            alt="Hikal"></div>
                </div>
            </section>
        </div>
    </div> -->

        <!-- ABOUT -->
        <div id="about" class="bg-black py-5">
            <div class="section container container-fluid my-5 text-center">
                <h4 class="gold-grad-anim mb-2">About Us</h4>
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
        <div id="contact" class="py-5">
            <div class="section container container-fluid my-5 text-center">
                <h4 class="gold-grad-anim mb-2">Contact Us</h4>
                <h6 class="text-white">YOUR CONNECTION TO EXCELLENCE</h6>
                <div class="divider"></div>
                <p class="mb-5">
                    We’d love to hear from you! Whether you have questions, need more information about our services, or
                    want to discuss a potential project, our team is here to help.
                </p>
                <div class="p-4 text-start mb-5">
                    <h6 class="text-center">GET IN TOUCH</h6>
                    <div class="semi-divider"></div>
                    <div
                        class="d-flex flex-column gap-2 gap-md-5 flex-md-row align-items-center justify-content-center">
                        <a href="mailto:info@hikalgroup.ae" class="text-white">
                            <i class="fa-solid fa-envelope gold-grad"></i>
                            <span class="mx-2">info@hikalgroup.ae</span>
                        </a>
                        <a href="tel:+97142722249" class="text-white">
                            <i class="fa-solid fa-phone gold-grad"></i>
                            <span class="mx-2">+971 4 272 2249</span>
                        </a>
                    </div>
                </div>
                <h6 class="text-center">VISIT US</h6>
                <div class="semi-divider"></div>
                <div class="row">
                    <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                        <div class="contact-card p-4 ">
                            <p class="gold-grad">UNITED ARAB EMIRATES</p>
                            <p>API World Tower, 2704, Sheikh Zayed Road, Dubai, UAE</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                        <div class="contact-card p-4">
                            <p class="gold-grad">EGYPT</p>
                            <p>Skies Plaza Mall, 51, 90th Street, 5th Settlement, New Cairo, Egypt</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                        <div class="contact-card p-4">
                            <p class="gold-grad">PAKISTAN</p>
                            <p>Islamabad, Pakistan</p>
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

    <!-- SERVICES -->
    <script>
        // let h1Texts = ["Real Estate", "Technology", "Marketing"]; // Add your h1 texts here
        // let logoColors = [
        //     "#0000ff",
        //     "#ff0000",
        //     "#00ff00"
        // ];
        // let keyframes = ["wave-pear-effect", "wave-apple-effect", "wave-exotic-effect"]; // Add your keyframes here

        // gsap.from(".services-image ", { y: "-100vh", delay: 0.5 });
        // gsap.to(".services-image img", {
        //     x: "random(-20, 20)",
        //     y: "random(-20, 20)",
        //     zIndex: 22,
        //     duration: 2,
        //     ease: "none",
        //     yoyo: true,
        //     repeat: -1
        // });

        // // get the elements
        // const waveEffect = document.querySelector(".wave");
        // const sections = document.querySelectorAll(".section");
        // const prevButton = document.getElementById("prevButton");
        // const nextButton = document.getElementById("nextButton");
        // const caneLabels = document.querySelector(".cane-labels");
        // const sectionContainer = document.querySelector(".services-container");
        // // Set index and current position
        // let index = 0;
        // let currentIndex = 0;
        // let currentPosition = 0;

        // // Add event listeners to the buttons
        // nextButton.addEventListener("click", () => {
        //     // Decrease the current position by 100% (to the left)
        //     if (currentPosition > -200) {
        //         currentPosition -= 100;
        //         // Update the left position of the cane-labels
        //         caneLabels.style.left = `${currentPosition}%`;
        //         sectionContainer.style.left = `${currentPosition}%`;
        //     }
        //     // Increment index and currentIndex
        //     currentIndex++;
        //     // Update the h1 text if currentIndex is less than the length of h1Texts
        //     if (currentIndex < h1Texts.length) {
        //         document.querySelector(".h1").innerHTML = h1Texts[currentIndex];
        //     }
        //     // Gasp animation for next section components
        //     gsap.to(".logo", {
        //         opacity: 1,
        //         duration: 1,
        //         color: logoColors[currentIndex]
        //     });
        //     gsap.from(".h1", { y: "20%", opacity: 0, duration: 0.5 });
        //     gsap.from(".services-image ", { y: "-100vh", delay: 0.4, duration: 0.4 });

        //     // Disable the nextButton if the last section is active
        //     if (currentIndex === h1Texts.length - 1) {
        //         nextButton.style.display = "none";
        //     }
        //     // Enable the prevButton if it's not the first section
        //     if (currentIndex > 0) {
        //         prevButton.style.display = "block";
        //     }
        //     // Button colors and animations
        //     nextButton.style.color = logoColors[currentIndex + 1];
        //     prevButton.style.color = logoColors[currentIndex - 1];
        //     nextButton.style.animationName = keyframes[currentIndex + 1];
        //     prevButton.style.animationName = keyframes[currentIndex - 1];
        // });
        // // Add event listeners to the buttons
        // prevButton.addEventListener("click", () => {
        //     if (currentPosition < 0) {
        //         currentPosition += 100;
        //         // Update the left position of the cane-labels
        //         caneLabels.style.left = `${currentPosition}%`;
        //         sectionContainer.style.left = `${currentPosition}%`;
        //         sectionContainer.style.transition = `all 0.5s ease-in-out`;
        //     }
        //     // Decrement index and currentIndex
        //     currentIndex--;
        //     if (currentIndex >= 0) {
        //         document.querySelector(".h1").innerHTML = h1Texts[currentIndex];
        //     }
        //     // Gasp animation for previous section components
        //     gsap.to(".logo", { color: logoColors[currentIndex], duration: 1 });
        //     gsap.from(".h1", { y: "20%", opacity: 0, duration: 0.5 });
        //     gsap.from(".services-image ", { y: "100vh", delay: 0.5 });
        //     // Enable the nextButton if it was disabled
        //     nextButton.style.display = "block";
        //     // Disable the prevButton if it's the first section
        //     if (currentIndex === 0) {
        //         prevButton.style.display = "none";
        //     }
        //     // Button colors and animations
        //     nextButton.style.color = logoColors[currentIndex + 1];
        //     prevButton.style.color = logoColors[currentIndex - 1];
        //     nextButton.style.animationName = keyframes[currentIndex + 1];
        //     prevButton.style.animationName = keyframes[currentIndex - 1];
        // });
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
                            <div class="p-4 text-center" style="border-radius: 20px; box-shadow: 5px 5px 10px #333333, -5px -5px 10px #555555;">
                                <p class="gold-grad" style="text-transform: uppercase;">${subservice.title}</p>
                                <p class="m-0" style="font-size: small;">${subservice.subtitle}</p>
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