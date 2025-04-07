<?php
error_reporting(1);
include ("data/companies.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hikal Group | Companies</title>
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
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ICON -->
    <link rel="icon" type="image/png" href="assets/images/logo/icon.png" />

    <style>
        .map-bg {
            background-image: url(assets/images/graphics/mapwithpin.png);
        }
    </style>
</head>

<body>
    <?php 
    $page = "companies";
    include_once ('header.php') 
    ?>

    <div class="subhome">
        <!-- TITLE -->
        <div class="subhome-title font-700 gold-grad-anim">
            OUR COMPANIES
        </div>
        <!-- BACKGROUND MAP -->
        <div class="map-bg"></div>
        <!-- BOTTOM BACKGROUND -->
        <div class="color-bg" style="background-color: var(--black);"></div>
    </div>
    <div class="bg-black pb-5" style="margin-top: -10px;">
        <div class="container container-fluid text-center">
            <h3 class="text-white">
                Innovating Across Diverse Industries
            </h3>
            <div class="primary-border"></div>
            <p class="text-white">
                Hikal Group is a diverse company with interests in real estate, technology, digital marketing, and other
                sectors. We are dedicated to excellence and innovation, providing top-quality products and services to
                meet the needs of our global customers. Discover how each of our companies is making a difference.
            </p>
        </div>
    </div>
    <!-- COMPANIES  -->
    <div class="py-5" style="z-index: -1;">
        <div class="container container-fluid text-center py-5"
            style="display: grid; place-items: center; min-height: 90vh; z-index: -1;">
            <?php include_once ("components/companies-list.php"); ?>
        </div>
    </div>
    <!-- SERVICES -->
    <div class="container container-fluid my-5 text-center" id="services">
        <h2 class="primary-text">Our Services</h2>
        <h6>COMPREHENSIVE SOLUTIONS FOR EVERY NEED</h6>
        <div class="primary-border"></div>
        <div class="holderCircle">
            <div class="round"></div>
            <div class="dotCircle">
                <?php
                include ("data/services.php");
                foreach ($services as $index => $service) {
                    echo '<div class="itemDot itemDot' . $index . ' ' . ($index === 2 ? 'active' : 'primary-text') . '" data-tab="' . $index . '">';
                    echo '<div class="forActive">' . $service['icon'] . '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="contentCircle p-4">
                <?php
                foreach ($services as $index => $service) {
                    echo '<div class="CirItem title-box ' . ($index === 2 ? 'active' : '') . ' CirItem' . $index . '">';
                    echo '<h6 class="primary-text font-500" style="text-transform: uppercase;">' . $service['title'] . '</h6>';
                    echo '<p style="font-size: small;">' . $service['subtitle'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div id="sub-services">
        </div>
    </div>

    <?php include_once ('footer.php') ?>


    <!-- BACKGROUND MAP  -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let mapbg = 0;
            const speed = 0.5;
            const mapBgElement = document.querySelector('.map-bg');

            function animateBackground() {
                mapbg -= speed;
                mapBgElement.style.backgroundPosition = `${mapbg}px 0px`;
                requestAnimationFrame(animateBackground);
            }

            animateBackground();
        });
    </script>

    <!-- SERVICES -->
    <script>
        // document.addEventListener('DOMContentLoaded', () => {
        //     const isMobile = window.innerWidth <= 750;
        //     const dotCircle = document.querySelector('.dotCircle');
        //     const itemDots = document.querySelectorAll('.itemDot');
        //     const contentCircles = document.querySelectorAll('.CirItem');
        //     let activeTab = 2;

        //     const handleTabClick = (index) => {
        //         activeTab = index;
        //         itemDots.forEach((item) => item.classList.remove('active'));
        //         document.querySelector(`.itemDot${index}`).classList.add('active');
        //         contentCircles.forEach((item) => item.classList.remove('active'));
        //         document.querySelector(`.CirItem${index}`).classList.add('active');

        //         dotCircle.style.transform = `rotate(${360 - (index * 36)}deg)`;
        //         dotCircle.style.transition = '2s';

        //         itemDots.forEach((item) => {
        //             item.style.transform = `rotate(${index * 36}deg)`;
        //             item.style.transition = '1s';
        //         });
        //     };

        //     itemDots.forEach((item, index) => {
        //         item.addEventListener('click', () => handleTabClick(index));
        //     });

        //     const radius = isMobile ? 150 : 200;
        //     const step = (2 * Math.PI) / itemDots.length;

        //     itemDots.forEach((item, index) => {
        //         const angle = index * step;
        //         const x = Math.round(radius + radius * Math.cos(angle) - item.clientWidth / 2);
        //         const y = Math.round(radius + radius * Math.sin(angle) - item.clientHeight / 2);
        //         item.style.left = `${x}px`;
        //         item.style.top = `${y}px`;
        //     });

        //     setInterval(() => {
        //         activeTab = activeTab === itemDots.length - 1 ? 0 : activeTab + 1;
        //         handleTabClick(activeTab);
        //     }, 5000);
        // });
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
                            <div class="white-card p-4 text-center">
                                <p class="primary-text" style="text-transform: uppercase;">${subservice.title}</p>
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