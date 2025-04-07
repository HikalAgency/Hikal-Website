<?php
include '../data/agent-data.php';

function getUserNameById($user_id, $agency_id) {
    global $agents1, $agents4;

    $agents = ($agency_id == 1) ? $agents1 : (($agency_id == 4) ? $agents4 : []);

    foreach ($agents as $agent) {
        if ($agent['user_id'] == $user_id) {
            return $agent['user_name'];
        }
    }
    return "Unknown User";
}

if (isset($_GET['user_id']) && isset($_GET['agency_id'])) {
    $user_id = intval($_GET['user_id']);
    $agency_id = intval($_GET['agency_id']);
    
    echo json_encode(["user_name" => getUserNameById($user_id, $agency_id)]);
}
?>
