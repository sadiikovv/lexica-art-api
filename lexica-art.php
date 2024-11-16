<?php

#####################################################
# Coder: Murodjon Sodikov | t.me/Sadiikovv | t.me/sodibio
#####################################################

ob_start();
error_reporting(0);
header('Content-Type: application/json');

#Murodjon Sodikov

function info($id){
    $Sadiikovv = curl_init();   
    curl_setopt($Sadiikovv, CURLOPT_URL, "https://lexica.art/api/infinite-prompts");
    curl_setopt($Sadiikovv, CURLOPT_HTTPHEADER, array(
    'Origin: https://lexica.art', 
    'Referer: https://lexica.art/?q=.$id', 
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36'));
    curl_setopt($Sadiikovv, CURLOPT_POST, true);
    curl_setopt($Sadiikovv, CURLOPT_POSTFIELDS, "text=".$id);
    curl_setopt($Sadiikovv, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($Sadiikovv);
    curl_close($Sadiikovv);

    return $response;
}

#Murodjon Sodikov

$res = info($_GET["text"]);
$arr = json_decode($res,1);

echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

#####################################################
# Coder: Murodjon Sodikov | t.me/Sadiikovv | t.me/sodibio
#####################################################

?>