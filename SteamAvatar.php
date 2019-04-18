<?php
    function getAvatar($steamIDCode){

        require 'SteamConfig.php';

        $url = file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamauth['apikey']."&steamids=".$steamIDCode); 
        $content = json_decode($url, true);

        $returnVal = $content['response']['players'][0]['avatarfull'];

        if(is_null($returnVal)||$returnVal == ""){
            return "https://steamuserimages-a.akamaihd.net/ugc/885384897182110030/F095539864AC9E94AE5236E04C8CA7C2725BCEFF/";
        } else {
            return $returnVal;
        }
    }
?>
