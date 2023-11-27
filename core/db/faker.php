<?php 
function url() {
    $websiteList = ['google.com', 'youtube.com', 'facebook.com'];
    return sprintf("%s://%s", "https", $websiteList[rand(0, sizeof($websiteList) - 1)]);
}

function name() {
    $nameList = [
        'ao thun',
        'ao khoac',
        'quan dai',
        'ao len',
        'ao mua',
        'quan au',
        'quan tay',
        'ao am'
    ];
    return $nameList[rand(0, sizeof($nameList) - 1)];
}

function description() {
    return 'ashdghasgdhagshdgsahdghagdhhdasdhsa';
}

?>
