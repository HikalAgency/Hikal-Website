<?php
$ip = $_SERVER['REMOTE_ADDR'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$fullUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<footer class="w-100" style="background: linear-gradient(to bottom, transparent, rgba(196, 174, 122, 0.25))">
    <div
        class="container container-fluid d-flex flex-column align-items-center justify-content-center gap-4 text-center mt-5 py-5">
        <?php
        if ($page === "home") {
            ?>
            <!-- FORM -->
            <div>
                <h3 class="gold-grad-anim mb-2">Get in Touch</h3>
                <div class="divider"></div>
                <p class="mb-5">
                    We’d love to hear from you! Fill out the form below, and our team will reach out shortly.
                </p>
                <form id="contactForm">
                    <div class="row">
                        <div class="col-12 col-md-6 p-4 d-flex flex-column gap-2">
                            <label class="px-1 primary-text text-start">
                                Name
                            </label>
                            <input type="text" name="name" id="name" required />

                            <label class="px-1 primary-text text-start">
                                Phone
                            </label>
                            <input type="tel" id="phone" name="phone" value="" required />
                            <input type="text" id="country" name="country" value="" class="d-none" readonly />
                            <small id="contactError"></small>

                            <label class="px-1 primary-text text-start">
                                Email
                            </label>
                            <input type="email" id="email" name="email" value="" placeholder="Your email" required />
                            <small id="emailError"></small>
                        </div>
                        <div class="col-12 col-md-6 p-4 d-flex flex-column gap-2">
                            <label class="px-1 primary-text text-start">
                                Message
                            </label>
                            <textarea name="message" id="message" rows="9" required></textarea>
                            <button type="submit" id="submit" class="ui-btn">Submit</button>
                        </div>
                        <small id="fill-note"></small>
                    </div>
                </form>
                <div id="thank_you" class="p-4" style="display: none;">
                    <div class="blur-con">
                        <div class="contact-card p-5 d-flex flex-column gap-3 align-items-center justify-content-center">
                            <i class="fa-solid fa-check gold-grad" style="font-size: 70px;"></i>
                            <h4 class="text-white">Thanks for reaching out to <span class="gold-grad">HIKAL</span>! We’ve
                                got your enquiry and will be in touch soon.</h4>
                        </div>
                    </div>
                </div>
                <div id="error" class="p-4 text-danger" style="display: none;">
                    <div class="blur-con">
                        <div class="contact-card p-5 d-flex flex-column gap-3 align-items-center justify-content-center">
                            <i class="fa-solid fa-xmark" style="font-size: 70px;"></i>
                            <h4 class="text-white">
                                Something went wrong. Please reload the page and try again.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="d-flex gap-5 flex-wrap align-items-center justify-content-center mt-5">
            <a href="<?php if ($page == "home") {
                echo '#header';
            } else {
                echo $base;
            } ?>">
                Home</a>
            <a href="<?php if ($page === "home") {
                echo '#companies';
            } else {
                echo $base . '/#companies';
            } ?>">
                Companies
            </a>
            <a href="<?php if ($page === "home") {
                echo '#services';
            } else {
                echo $base . '/#services';
            } ?>">
                Services
            </a>
            <a href="<?php if ($page === "home") {
                echo '#about';
            } else {
                echo $base . '/#about';
            } ?>">
                About
            </a>
            <a href="<?php echo $base . '/careers'; ?>">Careers</a>
        </div>
        <div class="w-100 h-1" style="background: rgba(169, 163, 194, 0.24); height: 1px;"></div>

        <!-- LOGO -->
        <!-- <img src="assets/images/logo/HikalGroup.png" alt="Hikal Group" style="width: 300px;" /> -->
        <!-- SOCIAL LINKS -->
        <div class="social-links d-flex gap-4 align-items-center justify-content-center">
            <a href="https://www.linkedin.com/company/hikal" class="social-link">
                <span class="iconify" data-icon="iconoir:linkedin"></span>
            </a>
            <a href="https://www.instagram.com/hikalagency/" class="social-link">
                <span class="iconify" data-icon="iconoir:instagram"></span>
            </a>
            <a href="https://www.facebook.com/hikalagency/" class="social-link">
                <span class="iconify" data-icon="iconoir:facebook"></span>
            </a>
            <a href="https://www.tiktok.com/@hikalagency" class="social-link">
                <span class="iconify" data-icon="iconoir:tiktok"></span>
            </a>
            <a href="https://www.youtube.com/channel/UCR0EzeM3p9GRGp6bMU1D-jA" class="social-link">
                <span class="iconify" data-icon="iconoir:youtube"></span>
            </a>
        </div>
        <div class="w-100 h-1" style="background: rgba(169, 163, 194, 0.24); height: 1px;"></div>
        <!-- COPYRIGHT -->
        <div class="copyright">
            <span class="primary-text">Hikal</span>
            © <?php echo date("Y"); ?>. All Rights Reserved.
            <a href="privacypolicy" class="primary-text">Privacy Policy</a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Form and message elements
        const contactForm = document.getElementById("contactForm");
        const thankYou = document.getElementById('thank_you');
        const errorDiv = document.getElementById('error');
        const fillNote = document.getElementById('fill-note');

        // Show form, hide messages initially
        contactForm.style.display = "block";
        thankYou.style.display = "none";
        errorDiv.style.display = "none";

        // Form fields
        const nameField = document.getElementById('name');
        const phoneField = document.getElementById('phone');
        const countryField = document.getElementById('country');
        const emailField = document.getElementById('email');
        const messageField = document.getElementById('message');
        const contactError = document.getElementById('contactError');
        const emailError = document.getElementById('emailError');

        // Initialize intl-tel-input for phone validation
        const phoneNumber = window.intlTelInput(phoneField, {
            separateDialCode: true,
            preferredCountries: ["ae", "eg", "sa", "qa", "om", "kw", "iq"],
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

        // Automatically update country field on country change
        phoneField.addEventListener('countrychange', function () {
            const countryData = phoneNumber.getSelectedCountryData();
            countryField.value = countryData.name;
        });

        // Validate phone field on input
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

        // Form submission
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();

            // Validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!phoneNumber.isValidNumber()) {
                contactError.textContent = 'Please enter a valid contact number.';
                phoneField.classList.add('is-invalid');
                return;
            }
            if (!emailPattern.test(emailField.value)) {
                emailError.textContent = 'Please enter a valid email address.';
                emailField.classList.add('is-invalid');
                return;
            }
            if (!nameField.value || !messageField.value) {
                fillNote.textContent = 'Please fill up all details';
                fillNote.classList.add('is-invalid');
                alert(fillNote.textContent);
                return;
            }

            // Form data
            const formData = {
                name: nameField.value,
                phone: phoneNumber.getNumber(),
                email: emailField.value,
                country: countryField.value,
                message: messageField.value,
                ip: "<?php echo $ip; ?>",
                device: navigator.userAgent,
                url: "<?php echo $fullUrl; ?>"
            };

            console.log('Form Data:', formData);

            // AJAX submission
            $.ajax({
                url: "controllers/contactEmail.php", // Adjust to your endpoint
                method: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        contactForm.style.display = "none";
                        fillNote.textContent = "";
                        thankYou.style.display = "block";
                        errorDiv.style.display = "none";

                        // Reset form after 10 minutes (600,000 ms)
                        setTimeout(() => {
                            contactForm.reset(); // Clear form fields
                            contactForm.style.display = "block";
                            thankYou.style.display = "none";
                        }, 600000);
                    } else {
                        contactForm.style.display = "none";
                        thankYou.style.display = "none";
                        errorDiv.style.display = "block";
                        console.log(response.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    contactForm.style.display = "none";
                    thankYou.style.display = "none";
                    errorDiv.style.display = "block";
                    console.error("AJAX Error:", textStatus, errorThrown);
                    console.log("Response Text:", jqXHR.responseText);
                }
            });
        });
    });
</script>