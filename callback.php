<?php
// Get the enterpriseToken from the URL
if (!isset($_GET['enterpriseToken'])) {
    die("No enterpriseToken received.");
}

$enterpriseToken = $_GET['enterpriseToken'];
exit($enterpriseToken);
?>