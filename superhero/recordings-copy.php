<?php
session_start();
error_reporting(1);
include_once("data/agent-data.php");

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


// DATA
$agency_id = $_GET['agency_id'] ?? 1;
$page = $_GET['page'] ?? null;
if ($page > 1) {
    $page = $page - 1;
} else if ($page === 1) {
    $page = null;
}

$recordings = [];

$apiUrl = "https://df07-154-176-234-79.ngrok-free.app/dodeal-2938d/us-central1/getRecordings";
$requestData = [
    "count" => 50,
    "agencyId" => (string) $agency_id,
    "lastId" => $page,
    "lastDate" => null
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
  
if ($data['status'] === "success" && $data['code'] == 200) {
    $recordings = $data['data'];
}  
    
    
// GET USERNAME
function getUserNameById($user_id, $agency_id) {
    global $agents1, $agents4;
    
    if ($agency_id == 4) {
        $agentsList = $agents4;
    } else {
        $agentsList = $agents1;
    }
    
    foreach ($agentsList as $agent) {
        if ($agent['user_id'] == $user_id) {
            return $agent['user_name'];
        }
    }
    return "Unknown User";
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

    <!-- BOOTSTRAP ICON 1.11.3 -->
    <!--https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/bootstrap-icons.svg-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        .table {
            --bs-table-color-type: initial;
            --bs-table-bg-type: initial;
            --bs-table-color-state: initial;
            --bs-table-bg-state: initial;
            --bs-table-color: white;
            --bs-table-bg: transparent !important;
            --bs-table-border-color: #EEE;
            --bs-table-accent-bg: transparent;
            width: 100%;
            margin-bottom: 1rem;
            vertical-align: top;
            border-color: #EEE;
            background: none !important; 
            border-radius: 20px;
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.3)) !important;
        }
        
        audio::-webkit-media-controls-panel {
            overflow: hidden;
        }
        
        audio::-webkit-media-controls-download-button {
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
        <div class="container-fluid py-5">
            <div class="d-flex justify-content-between align-items-center mb-5 text-white">
                <h3>
                    #<?php echo $_GET['agency_id']; ?>
                </h3>
                <div role="button" class="text-end d-flex align-items-center" onclick="window.location.href = `dashboard`;">
                    <i class="bi bi-arrow-return-right px-2"></i> Other Agency
                </div>
            </div>
            <?php 
                if (!empty($recordings)) {
                ?>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>DateTime</th>
                                    <th>Direction</th>
                                    <th>Number</th>
                                    <th>Duration</th>
                                    <th>User</th>
                                    <th>Audio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($recordings as $index => $record) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $record['date_time']; ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if ($record['direction'] === "IN") {
                                                    ?>
                                                    <i class="bi bi-telephone-inbound"></i>
                                                    <?php
                                                } else if ($record['direction'] === "OUT") {
                                                    ?>
                                                    <i class="bi bi-telephone-outbound"></i>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <i class="bi bi-question-lg"></i>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <div class="fw-medium">
                                                <?php echo $record['number']; ?>
                                                </div>
                                                <div>
                                                    <?php echo $record['number_name']; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <?php 
                                                    $duration = $record['duration'];
                                                    
                                                    if ($duration >= 3600) { 
                                                        $hours = floor($duration / 3600);
                                                        $minutes = floor(($duration % 3600) / 60);
                                                        $seconds = $duration % 60;
                                                        echo "{$hours}h {$minutes}m {$seconds}s";
                                                    } elseif ($duration >= 60) {
                                                        $minutes = floor($duration / 60);
                                                        $seconds = $duration % 60;
                                                        echo "{$minutes}m {$seconds}s";
                                                    } else {
                                                        echo "{$duration}s";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <?php echo getUserNameById($record['user_id'], $agency_id); ?>
                                            </td>
                                            <td>
                                                <audio controlsList="nodownload" controls>
                                                    <source src="<?php echo $record['url']; ?>" type="audio/wav">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                } else {
                    ?>
                    <div class="alert alert-warning">No recordings found for this agency.</div>
                    <?php
                }
            ?>
            <div class="d-flex justify-content-between align-items-center gap-5">
                <div role="button" class="rounded-circle p-3 bg-dark" onclick="loadPagePrev(<?php echo $agency_id; ?>, <?php echo $page; ?>)">
                    <<<
                </div>
                <?php
                if (!empty($recordings)) {
                    ?>
                    <div role="button" class="rounded-circle p-3 bg-dark" onclick="loadPageNext(<?php echo $agency_id; ?>, <?php echo $page; ?>)">
                        >>>
                    </div>
                    <?php
                }   
                ?>
            </div>
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
    
    <!--LOAD PAGE -->
    <script>
        function loadPagePrev(agencyId, page) {
            if (!page || page <= 1) {
                window.location.href = `recordings?agency_id=${agencyId}`;
            } else if (page > 1) {
                window.location.href = `recordings?agency_id=${agencyId}&page=${page - 1}`;
            } else {
                // DO NOTHING;
            }
        }
        function loadPageNext(agencyId, page) {
            if (!page) {
                window.location.href = `recordings?agency_id=${agencyId}&page=1`;
            } else if (page >= 1) {
                window.location.href = `recordings?agency_id=${agencyId}&page=${page + 1}`;
            } else {
                // DO NOTHING;
            }
        }
    </script>
    
</body>

</html>
<?php
?>