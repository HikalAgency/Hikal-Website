<?php
session_start();
error_reporting(1);

$timeout_duration = 30 * 60;

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: login");
        exit();
    } else {
        $_SESSION['last_activity'] = time();
        header("Location: dashboard");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pin = $_POST['pin'];

    if (count($pin) === 4) {
        $predefined_pin = ["1", "9", "9", "2"];
        // $predefined_pin = ["1", "2", "2", "2"];
    
        // Validate PIN
        if ($pin === $predefined_pin) {
            $_SESSION['logged_in'] = true;
            $_SESSION['last_activity'] = time();
            header("Location: dashboard");
            exit();
        } else {
            $error = "Invalid PIN. Please try again.";
        }
    } else {
        $error = "Please enter a 4-digit PIN.";
    }
}
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
    <style>
        .pin-container {
            padding: 10px;
            text-align: center;
            width: 300px;
            z-index: 101;
        }
        .pin-input {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .pin-input input {
            width: 50px !important;
            height: 50px;
            font-size: 20px;
            text-align: center;
            border-bottom: 1px solid var(--primary);
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.3));
        }
        .pin-input input:focus {
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5));
            outline: none;
        }
        .pin-buttons {
            padding: 20px;
            display: grid;
            justify-items: center;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        .pin-buttons button {
            padding: 10px;
            font-size: 12px;
            background: none;
            backdrop-filter: blur(3px);
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.3));
            color: white;
            border-right: 0.5px solid #EEE;
            border-bottom: 0.5px solid #EEE;
            width: 50px !important;
            height: 50px;
            border-radius: 50%;
        }
        .error-message {
            padding: 15px;
            background-image:  linear-gradient(to bottom right, rgba(255, 255, 255, 0.3), rgba(255, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
            backdrop-filter: blur(3px);
            color: white;
            font-size: small;
            margin-top: 20px;
            display: none;
        }
    </style>

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
        <div class="section">
            <!--LOGIN FORM -->
            <form id="login-form" class="pin-container" method="POST">
                <div class="pin-input">
                    <input type="text" id="pin1" maxlength="1" name="pin[]" autofocus>
                    <input type="text" id="pin2" maxlength="1" name="pin[]">
                    <input type="text" id="pin3" maxlength="1" name="pin[]">
                    <input type="text" id="pin4" maxlength="1" name="pin[]">
                </div>
                <div class="pin-buttons">
                    <button type="button" onclick="enterDigit('1')">1</button>
                    <button type="button" onclick="enterDigit('2')">2</button>
                    <button type="button" onclick="enterDigit('3')">3</button>
                    <button type="button" onclick="enterDigit('4')">4</button>
                    <button type="button" onclick="enterDigit('5')">5</button>
                    <button type="button" onclick="enterDigit('6')">6</button>
                    <button type="button" onclick="enterDigit('7')">7</button>
                    <button type="button" onclick="enterDigit('8')">8</button>
                    <button type="button" onclick="enterDigit('9')">9</button>
                    <button type="button" onclick="clearPin()">X</button>
                    <button type="button" onclick="enterDigit('0')">0</button>
                    <button type="submit">>>></button>
                </div>
                <?php if(isset($error)) { ?>
                    <div class="error-message"><?php echo $error; ?></div>
                <?php } ?>
            </form>
    
            <img class="monument" src="../assets/images/graphics/monument.png" alt="Hikal Group">
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
    
    <!--PIN LOGIN -->
    <script>
        let pin = [];

        // Function to enter digit into the PIN inputs
        function enterDigit(digit) {
            for (let i = 0; i < 4; i++) {
                if (!document.getElementById('pin' + (i + 1)).value) {
                    document.getElementById('pin' + (i + 1)).value = digit;
                    pin[i] = digit; // Store the digit in the pin array
                    break;
                }
            }
        }

        // Function to clear the PIN input fields
        function clearPin() {
            for (let i = 0; i < 4; i++) {
                document.getElementById('pin' + (i + 1)).value = '';
                pin[i] = ''; // Clear the pin array
            }
        }

        // // Function to submit the PIN
        // function submitPin() {
        //     if (pin.length === 4 && pin.join('').length === 4) {
        //         const enteredPin = pin.join('');
        //         const predefinedPin = '1992'; // Set your predefined PIN here

        //         if (enteredPin === predefinedPin) {
        //             document.getElementById('login-form').submit();
        //         } else {
        //             // If the PIN is incorrect, show an error message
        //             document.getElementById('error-message').style.display = "block";
        //             document.getElementById('error-message').innerText = "Invalid PIN. Please try again!";
        //             clearPin();
        //         }
        //     } else {
        //             document.getElementById('error-message').style.display = "block";
        //             document.getElementById('error-message').innerText = "Please enter a 4-digit PIN.";
        //     }
        // }
    </script>
</body>

</html>
<?php
?>