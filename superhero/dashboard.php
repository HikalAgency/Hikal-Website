<?php
session_start();
error_reporting(1);
include_once("data/agency-data.php");

$timeout_duration = 30 * 60;

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit();
}

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    
    session_unset();
    session_destroy();
    header("Location: login");
    exit();
}

$_SESSION['last_activity'] = time();
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
    <link rel="stylesheet" href="../assets/css/style2.css">

    <!-- ICON -->
    <link rel="icon" type="image/png" href="../assets/images/logo/icon.png" />

</head>

<body style="height: 100vh; overflow-y: hidden;">

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
        <!-- HOME -->
        <div class="container container-fluid py-5">
            <h5 class="mb-5">
                AGENCIES
            </h5>
            <div class="row mb-5">
                <?php foreach ($agencies as $agency): ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="glass-card p-4 text-start" onclick="fetchAgencyData(<?php echo $agency['agency_id']; ?>)">
                            <h4>
                                #<?php echo $agency['agency_id']; ?>
                            </h4>
                            <div class="fw-bold">
                                <?php echo $agency['agency_name']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div id="result-container" class="py-5"></div>
        </div>
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
    
    <!--FETCH AGENCY RECORDINGS -->
    <script>
        function fetchAgencyData(agencyId) {
            window.location.href = `recordings?agency_id=${agencyId}`;
            // // Display loading message
            // document.getElementById('result-container').innerHTML = "Loading...";
        
            // // Make an API call to fetch data for the selected agency
            // fetch('controllers/fetchAgencyRecordings.php', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //     },
            //     body: JSON.stringify({ 
            //         agency_id: agencyId, 
            //         count: 50,
            //         lastId: null, // add last id for pagination | null for first call
            //         lastDate: null // add last date for pagination | null for first
            //     }),
            // })
            // .then(response => response.json())
            // .then(data => {
            //     // Process the API response and display the results
            //     if (data.success) {
            //         document.getElementById('result-container').innerHTML = `
            //             <div class="alert alert-success">
            //                 <strong>Success:</strong> ${data.message}
            //             </div>
            //         `;
            //     } else {
            //         document.getElementById('result-container').innerHTML = `
            //             <div class="alert alert-danger">
            //                 <strong>Error:</strong> ${data.message}
            //             </div>
            //         `;
            //     }
            // })
            // .catch(error => {
            //     document.getElementById('result-container').innerHTML = `
            //         <div class="alert alert-danger">
            //             <strong>Error:</strong> Something went wrong. Please try again.
            //         </div>
            //     `;
            // });
        }
    </script>
    
</body>

</html>
<?php
?>