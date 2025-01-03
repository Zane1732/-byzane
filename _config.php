<?php 

$conn = new mysqli("HOSTNAME", "USERNAME", "PASSWORD", "DATABASE");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

$websiteTitle = "AniMatrix";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "0.1";

$discord = "https://discord.gg/aVvqx77RGs";
$github = "https://github.com/PacaHat";
$twitter = "https://x.com/PacaHat";

// all the api you need

$api = "https://aniwatch-api-iota-ten.vercel.app"; //https://github.com/ghoshRitesh12/aniwatch-api Also use this in src/component/qtip.php
$zpi = "https://zenime-api-sand.vercel.app"; //https://github.com/itzzzme/anime-api
$proxy = "m3u8-proxy-cors-iota-lac.vercel.app/cors?url="; //https://github.com/shashstormer/m3u8_proxy-cors


$banner = $websiteUrl . "/public/images/banner.png";

    
