<?php

//Version 4.0

$steamauth['apikey'] = ""; // Your Steam WebAPI-Key found at https://steamcommunity.com/dev/apikey

// System stuff

if (empty($steamauth['apikey'])) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply an API-Key!<br>Find this in steamauth/SteamConfig.php, Find the '<b>\$steamauth['apikey']</b>' Array. </div>");}

if (empty($steamauth['domainname'])) {$steamauth['domainname'] = $_SERVER['SERVER_NAME'];}
?>
