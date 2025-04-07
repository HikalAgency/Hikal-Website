<?php
error_reporting(0);
include("data/companies.php");
include("data/services.php");


$ip = $_SERVER['REMOTE_ADDR'];
$device = $_SERVER['HTTP_USER_AGENT'];

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$requestUri = $_SERVER['REQUEST_URI'];
$url = $protocol . $host . $requestUri;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hikal Group | Careers</title>
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

    <!-- SELECT 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <h2 class="gold-grad-anim mb-2">CAREERS</h2>
                <p class="text-white">Join a thriving community</p>
                <div class="divider"></div>
                <p>
                    At Hikal, we recognize the unique skills each professional brings to the table. Be part of a company
                    that values your contributions and invests in your development. Explore career paths with us.
                </p>
            </div>
        </div>

        <!-- FORM -->
        <div class="container-fluid d-flex flex-column my-5">
            <form id="hiringForm" class="card-black">
                <div class="d-flex justify-content-end px-4 py-2">
                    <small id="fill-note">* Kindly fill up all details!</small>
                </div>
                <div id="details" class="step">
                    <h5 class="gold-grad-anim text-uppercase">Details</h5>
                    <div class="row my-3 px-4">
                        <!-- FULL NAME -->
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-1 position-relative">
                            <label>Full name</label>
                            <input type="text" id="name" name="name" value="" placeholder="Your full name" required />
                        </div>
                        <!-- CONTACT -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Contact</label>
                            <input type="tel" id="phone" name="phone" value="" required />
                            <input type="text" id="country" name="country" value="" class="d-none" readonly />
                            <small id="contactError"></small>
                        </div>
                        <!-- EMAIL -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Email</label>
                            <input type="email" id="email" name="email" value="" placeholder="Your email" required />
                            <small id="emailError"></small>
                        </div>
                        <!-- ADDRESS -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Address</label>
                            <input type="text" id="address" name="address" value="" placeholder="Your address"
                                required />
                        </div>
                        <!-- DATE OF BIRTH -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Date of Birth</label>
                            <input type="date" id="dob" name="dob" value="" required />
                        </div>
                        <!-- GENDER -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="" selected>Your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <!-- LANGUAGES -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Languages</label>
                            <select id="language" name="language" data-placeholder="Select languages" multiple>
                                <option value="English">English</option>
                                <option value="Arabic">Arabic</option>
                                <option value="French">French</option>
                                <option value="German">German</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <!-- MILITARY -->
                        <div id="militaryDiv" class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Military</label>
                            <select id="military" name="military" required>
                                <option value="" selected>Your military status</option>
                                <option value="Veteran">Veteran</option>
                                <option value="Served">Served</option>
                                <option value="Not served">Not served</option>
                                <option value="Exempted">Exempted</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-end p-4 pt-2">
                        <button type="button" class="nextto2 primary-btn text-white">Next</button>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                            style="width: 10%"></div>
                    </div>
                </div>
                <div id="eduexp" class="step" style="display: none">
                    <h5 class="gold-grad-anim text-uppercase">Education and Experience</h5>
                    <div class="row my-3 px-4">
                        <!-- EDUCATION -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Education</label>
                            <select id="education" name="education" required>
                                <option value="" selected>Your education level</option>
                                <option value="Primary School">Primary School</option>
                                <option value="Secondary or High School">Secondary or High School</option>
                                <option value="Vocational or Diploma">Vocational or Diploma</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Master's Degree">Master's Degree</option>
                                <option value="Doctorate or Higher">Doctorate or Higher</option>
                            </select>
                        </div>
                        <!-- PROFESSION -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Profession</label>
                            <input type="text" id="profession" name="profession" value="" placeholder="Your profession"
                                required />
                        </div>
                        <!-- YEARS OF EXPERIENCE -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Years of Experience</label>
                            <div class="d-flex align-items-center">
                                <button type="button" id="decrease" class="plain-btn">-</button>
                                <input type="number" id="experience" name="experience" value="0" min="0" max="16"
                                    class="text-center mx-2" readonly />
                                <button type="button" id="increase" class="plain-btn">+</button>
                            </div>
                        </div>
                        <!-- PORTFOLIO -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Portfolio Link</label>
                            <input type="text" id="portfolio" name="portfolio" value="" placeholder="Portfolio link"
                                required />
                        </div>
                        <!-- LAST SALARY -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Last Salary</label>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-5 col-md-4 col-lg-3">
                                    <input type="text" id="currency" name="currency" value="EGP" required readonly />
                                </div>
                                <div class="col-7 col-md-8 col-lg-9">
                                    <input type="number" id="last_salary" name="last_salary" value=""
                                        placeholder="Your last salary" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-between p-4 pt-2">
                        <button type="button" class="backto1 primary-btn text-white">Back</button>
                        <button type="button" class="nextto3 primary-btn text-white">Next</button>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                            style="width: 40%"></div>
                    </div>
                </div>
                <div id="add_details" class="step" style="display: none">
                    <h5 class="gold-grad-anim text-uppercase">Additional Details</h5>
                    <div class="row my-3 px-4">
                        <!-- EXPECTED SALARY -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Expected Salary</label>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-5 col-md-4 col-lg-3">
                                    <input type="text" id="currencye" name="currencye" value="EGP" required readonly />
                                </div>
                                <div class="col-7 col-md-8 col-lg-9">
                                    <input type="number" id="expected_salary" name="expected_salary" value=""
                                        placeholder="Your expected salary" required />
                                </div>
                            </div>
                        </div>
                        <!-- NOTICE PERIOD -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Notice Period</label>
                            <select id="notice" name="notice" required>
                                <option value="" selected>Your notice period</option>
                                <option value="None">None</option>
                                <option value="Less than a month">Less than a month</option>
                                <option value="1 month">1 month</option>
                                <option value="2 months">2 months</option>
                                <option value="3 months">3 months</option>
                                <option value="More than 3 months">More than 3 months</option>
                            </select>
                        </div>
                        <!-- APPLY FOR -->
                        <div class="col-12 col-md-6 col-lg-4 p-2 col-xl-3 position-relative" dir="ltr">
                            <label>Applying For</label>
                            <input type="text" id="position" name="position" value="" placeholder="Applying for"
                                required />
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-between p-4 pt-2">
                        <button type="button" class="backto2 primary-btn text-white">Back</button>
                        <button type="submit" id="submit" class="submit custom-btn text-white">Submit</button>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                            style="width: 70%"></div>
                    </div>
                </div>
                <div id="thank_you" class="step" style="display: none">
                    <!-- CHECK -->
                    <div class="d-flex justify-content-center p-5 pb-2">
                        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                            type="module"></script>
                        <dotlottie-player src="https://lottie.host/f084addc-0a64-4c3b-893d-b0f541288629/0VA4gxibG8.json"
                            background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                            autoplay></dotlottie-player>
                    </div>
                    <h1 class="p-5 pt-2">
                        Application submission successful! Our team will review and reach out to you!
                    </h1>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                            style="width: 100%"></div>
                    </div>
                </div>
            </form>
        </div>

        <!-- CONTENT -->
        <div class="container-fluid my-5 py-5 text-center">
            <h4 class="gold-grad-anim mb-2">Why Work With Us?</h4>
            <h6 class="text-white">A PLACE TO THRIVE AND MAKE AN IMPACT</h6>
            <div class="divider"></div>
            <p>
                Our group of companies is committed to creating a workplace that values innovation, collaboration, and
                personal development. With opportunities across a range of exciting industries, we ensure that every
                team member can grow, contribute, and succeed in their career.
            </p>
        </div>

        <!-- CONTACT -->
        <div id="contact" class="py-5">
            <div class="container-fluid my-5 text-center">
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

    <!-- LANGUAGE MULTI SELECT -->
    <script>
        $('#language').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
    </script>
    <!-- EXPERIENCE NUMBER -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const experienceInput = document.getElementById('experience');
            const decreaseBtn = document.getElementById('decrease');
            const increaseBtn = document.getElementById('increase');
            decreaseBtn.addEventListener('click', function () {
                let currentValue = parseInt(experienceInput.value);
                if (currentValue > 0) {
                    experienceInput.value = currentValue - 1;
                }
            });
            increaseBtn.addEventListener('click', function () {
                let currentValue = parseInt(experienceInput.value);
                if (currentValue < 16) {
                    experienceInput.value = currentValue + 1;
                }
            });
        });
    </script>
    <!-- STEP FORM -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const details = document.getElementById("details");
            const eduexp = document.getElementById("eduexp");
            const add_details = document.getElementById("add_details");
            const thank_you = document.getElementById('thank_you');

            details.style.display = "block";
            eduexp.style.display = "none";
            add_details.style.display = "none";
            thank_you.style.display = "none";

            const fillNote = document.getElementById('fill-note');
            // STEP 1 
            const nameField = document.getElementById('name');
            const phoneField = document.getElementById('phone');
            const countryField = document.getElementById('country');
            const emailField = document.getElementById('email');
            const addressField = document.getElementById('address');
            const dobField = document.getElementById('dob');
            const genderField = document.getElementById('gender');
            const militaryField = document.getElementById('military');
            const contactError = document.getElementById('contactError');
            const emailError = document.getElementById('emailError');
            var militaryFieldValue = "";
            // STEP 2 
            const experienceInput = document.getElementById('experience');
            const portfolioField = document.getElementById('portfolio');
            const educationField = document.getElementById('education');
            const professionField = document.getElementById('profession');
            const lastSalaryField = document.getElementById('last_salary');
            const currencyField = document.getElementById('currency');
            // STEP 3
            const expectedSalaryField = document.getElementById('expected_salary');
            const noticeField = document.getElementById('notice');
            const positionField = document.getElementById('position');

            // GENDER AND MILITARY
            const militaryDiv = document.getElementById('militaryDiv');
            genderField.addEventListener('change', function () {
                if (genderField.value === "Female") {
                    militaryDiv.style.display = "none";
                    militaryFieldValue = "Not Required";
                } else {
                    militaryDiv.style.display = "block";
                    militaryFieldValue = "";
                }
            });
            if (genderField.value === "Female") {
                militaryField.style.display = "none";
                militaryFieldValue = "Not Required";
            }

            // Initialize intl-tel-input
            const phoneNumber = window.intlTelInput(phoneField, {
                separateDialCode: true,
                preferredCountries: ["eg", "sa", "qa", "om", "kw", "iq"],
                initialCountry: "auto",
                geoIpLookup: function (callback) {
                    fetch('https://ipinfo.io/json')
                        .then(response => response.json())
                        .then(data => {
                            const countryCode = data.country ? data.country : 'eg';
                            callback(countryCode);
                        })
                        .catch(() => {
                            callback('eg');
                        });
                },
                utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.0.1/js/utils.js"
            });
            console.log(phoneNumber);

            // Automatically update country name on country change
            phoneField.addEventListener('countrychange', function () {
                const countryData = phoneNumber.getSelectedCountryData();
                countryField.value = countryData.name;
            });

            // Validate contact field on input
            phoneField.addEventListener('input', function () {
                if (phoneNumber.isValidNumber()) {
                    contactError.textContent = '';
                    phoneField.classList.remove('is-invalid');
                } else {
                    contactError.textContent = 'Please enter a valid contact number.';
                    phoneField.classList.add('is-invalid');
                }
            });

            // Validate email field on input
            emailField.addEventListener('input', function () {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailPattern.test(emailField.value)) {
                    emailError.textContent = '';
                    emailField.classList.remove('is-invalid');
                } else {
                    emailError.textContent = 'Please enter a valid email address.';
                    emailField.classList.add('is-invalid');
                }
            });

            // NEXT TO 2
            document.querySelector('button.nextto2').addEventListener('click', function () {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!phoneNumber.isValidNumber()) {
                    contactError.textContent = 'Please enter a valid contact number.';
                    return;
                }
                if (!emailPattern.test(emailField.value)) {
                    emailError.textContent = 'Please enter a valid email address.';
                    return;
                }
                // Switch sections
                details.style.display = "none";
                eduexp.style.display = "block";
                add_details.style.display = "none";
            });

            // BACK TO 1
            document.querySelector('button.backto1').addEventListener('click', function () {
                // Switch sections
                details.style.display = "block";
                eduexp.style.display = "none";
                add_details.style.display = "none";
            });
            // NEXT TO 3
            document.querySelector('button.nextto3').addEventListener('click', function () {
                // Switch sections
                details.style.display = "none";
                eduexp.style.display = "none";
                add_details.style.display = "block";
            });

            // BACK TO 2
            document.querySelector('button.backto2').addEventListener('click', function () {
                // Switch sections
                details.style.display = "none";
                eduexp.style.display = "block";
                add_details.style.display = "none";
            });

            // SUBMIT
            // document.querySelector('button.submit').addEventListener('click', function () {
            const hiringForm = document.getElementById('hiringForm');
            const submit = document.getElementById('submit');
            submit.onclick = function (event) {
                // hiringForm.addEventListener('submit', function (event) {
                console.log("Form listener attached");
                event.preventDefault();
                console.log("Triggered!");
                const formData = {
                    name: nameField.value,
                    phone: phoneNumber.getNumber(),
                    email: emailField.value,
                    address: addressField.value,
                    country: countryField.value,
                    dob: dobField.value,
                    gender: genderField.value,
                    language: $('#language').val().join(', '),
                    military: militaryFieldValue,
                    education: educationField.value,
                    profession: professionField.value,
                    experience: experienceInput.value,
                    portfolio: portfolioField.value ?? "",
                    lastSalary: lastSalaryField.value,
                    currency: currencyField.value,
                    expectedSalary: expectedSalaryField.value,
                    notice: noticeField.value,
                    position: positionField.value,
                    ip: "<?php echo $ip; ?>",
                    device: "<?php echo $device; ?>",
                    url: "<?php echo $url; ?>",
                };

                console.log('Form Data:', formData);

                if (nameField.value && phoneField.value && emailField.value && addressField.value && dobField.value && genderField.value && militaryFieldValue && educationField.value && professionField.value && experienceInput.value && lastSalaryField.value && currencyField.value && expectedSalaryField.value && noticeField.value && positionField.value
                ) {
                    // SEND FORM DATA IN MAIL USING AJAX
                    $.ajax({
                        url: "controllers/hiringEmail.php",
                        method: "POST",
                        data: formData,
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                add_details.style.display = "none";
                                fillNote.textContent = "";
                                thank_you.style.display = "block";
                                console.log(response.message);
                            }
                            else {
                                alert(response.message);
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error("AJAX Error:", textStatus, errorThrown);
                            console.log("Response Text:", jqXHR.responseText);
                        }
                    });

                    return false;
                } else {
                    fillNote.textContent = 'Please fill up all details';
                    fillNote.classList.add('is-invalid');
                    alert(fillNote.textContent);
                }
            };
        });
    </script>
</body>

</html>
<?php
?>