<?php
// config/env.php

function loadEnv($path)
{
    if (!file_exists($path)) {
        $GLOBALS['env'] = [
            'BASE_URL' => 'https://hikal.ae',
            'SMTP_HOST' => 'mail.hikal.ae',
            'SMTP_PORT' => '465',
            'SMTP_USERNAME' => 'enquiry@hikal.ae',
            'SMTP_PASSWORD' => 'Enquiry@Hikal1610',
            'SMTP_ENCRYPTION' => 'ssl',
            'FROM_EMAIL' => 'enquiry@hikal.ae',
            'FROM_NAME' => 'Hikal Enquiry',
            'MAIL_TO' => 'muskan@hikalagency.ae'
        ];
        return;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0)
            continue;
        list($key, $value) = explode('=', $line, 2);
        $env[trim($key)] = trim($value);
    }
    $GLOBALS['env'] = $env;
}

// Load .env from project root
loadEnv(__DIR__ . '/../.env');