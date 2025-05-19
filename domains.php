<?php
// Reject Direct Access
if (!defined('WHMCS'))
die('You cannot access this file directly.');

// This file contains the domain names and their corresponding client names.
$host = $_SERVER['HTTP_HOST'];
$domains = [
    'clientarea.hyberhost.com' => 'hyberhost',
    'billing.hyber.gg' => 'hyberhost',
    'clients.gameforge.gg' => 'gameforge'
];

$brand = $brands[$host] ?? 'default';


// Hooks
add_hook('ClientAreaPageHome', 1, function($vars) {
    if ($brand == "gameforge") {
        $companyName = "GameForge";
        $logo = "https://clients.gameforge.gg/brand/logo.png";
        $systemurl = "https://clients.gameforge.gg/";
    }
});

