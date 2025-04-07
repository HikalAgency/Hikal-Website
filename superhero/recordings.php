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
$lastId = $_GET['lastId'] ?? null;
$lastDate = $_GET['lastDate'] ?? null;

$apiUrl = "https://f760-154-176-129-148.ngrok-free.app/dodeal-2938d/us-central1/getRecordings";

if (!$lastId && !$lastDate) {
    $requestData = [
        "count" => 50,
        "agencyId" => (string) $agency_id
    ];
} else {
    $requestData = [
        "count" => 50,
        "agencyId" => (string) $agency_id,
        "lastId" => $lastId,
        "lastDate" => $lastDate
    ];
}

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
$recordings = ($data['status'] === "success" && $data['code'] == 200) ? $data['data'] : [];

if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    header('Content-Type: application/json');
    echo json_encode($recordings);
    exit();
}

function getUserNameById($user_id, $agency_id) {
    global $agents1, $agents4;
    $agentsList = ($agency_id == 4) ? $agents4 : $agents1;
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
        
    <!--JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
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
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.2), rgba(0, 0, 0, 0.2)) !important;
            backdrop-filter: blur(2px);
        }
        
        audio::-webkit-media-controls-panel {
            overflow: hidden;
        }
        
        audio::-webkit-media-controls-download-button {
            display: none;
        }
        .load-more {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.3));
            backdrop-filter: blur(3px);
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .load-more:disabled {
            background: rgba(38, 38, 38, 0.3);
            cursor: not-allowed;
        }
    </style>
    
    <!-- ICON -->
    <link rel="icon" type="image/png" href="../assets/images/logo/icon.png" />
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
            <div class="table-responsive">
                <table class="table table-bordered" id="recordings-table">
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
                        <?php foreach ($recordings as $record): ?>
                        <tr data-id="<?php echo $record['id']; ?>" data-date="<?php echo $record['date_time']; ?>">
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
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <button class="load-more" id="loadMore">Load More</button>
        </div>
    </div>

    <script>
        function getUserName(userId, agencyId, callback) {
            $.ajax({
                url: "controllers/getAgentName.php?user_id=" + userId + "&agency_id=" + agencyId,
                type: "GET",
                success: function (response) {
                    let userData = JSON.parse(response);
                    callback(userData.user_name || "Unknown User");
                },
                error: function () {
                    callback("Unknown User");
                }
            });
        }
    
    
        $(document).ready(function () {
            let lastId = null;
            let lastDate = null;
            let agencyId = "<?php echo $agency_id; ?>";
        
            $("#loadMore").click(function () {
                let btn = $(this);
                btn.text("Loading...").prop("disabled", true);
        
                let lastRow = $("#recordings-table tbody tr").last();
                if (lastRow.length > 0) {
                    lastId = lastRow.attr("data-id");
                    lastDate = lastRow.attr("data-date");
                }
        
                $.ajax({
                    url: "recordings.php",
                    type: "GET",
                    data: { agency_id: agencyId, lastId: lastId, lastDate: lastDate, ajax: 1 },
                    dataType: "json",
                    success: function (response) {
                        if (response.length > 0) {
                            response.forEach(record => {
                                let durationText = "";
                                let duration = record.duration;
        
                                if (duration >= 3600) {
                                    let hours = Math.floor(duration / 3600);
                                    let minutes = Math.floor((duration % 3600) / 60);
                                    let seconds = duration % 60;
                                    durationText = `${hours}h ${minutes}m ${seconds}s`;
                                } else if (duration >= 60) {
                                    let minutes = Math.floor(duration / 60);
                                    let seconds = duration % 60;
                                    durationText = `${minutes}m ${seconds}s`;
                                } else {
                                    durationText = `${duration}s`;
                                }
        
                                let icon = `<i class="bi bi-question-lg"></i>`;
                                if (record.direction === "IN") {
                                    icon = `<i class="bi bi-telephone-inbound"></i>`;
                                } else if (record.direction === "OUT") {
                                    icon = `<i class="bi bi-telephone-outbound"></i>`;
                                }
        
                                let newRow = `
                                    <tr data-id="${record.id}" data-date="${record.date_time}">
                                        <td>${record.date_time}</td>
                                        <td>${icon}</td>
                                        <td>
                                            <div class="fw-medium">${record.number}</div>
                                            <div>${record.number_name === "null" ? '' : record.number_name ? record.number_name : ''}</div>
                                        </td>
                                        <td>${durationText}</td>
                                        <td class="user-name-${record.id}">...</td>
                                        <td>
                                            <audio controlsList="nodownload" controls>
                                                <source src="${record.url}" type="audio/wav">
                                                Your browser does not support the audio element.
                                            </audio>
                                        </td>
                                    </tr>
                                `;
                                $("#recordings-table tbody").append(newRow);
                                
                                // Fetch user name asynchronously and update the row
                                getUserName(record.user_id, agencyId, function (userName) {
                                    $(`.user-name-${record.id}`).text(userName);
                                });
                            });
                            btn.text("Load More").prop("disabled", false);
                        } else {
                            btn.text("No More Recordings").prop("disabled", true);
                        }
                    }
                });
            });
        });
    </script>

</body>
</html>