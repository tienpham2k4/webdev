<?php
include "config.php";

function getUrl($url='')
{
    if($url!="")
         return $url = URL.$url;
    else
        return URL;
}
function getAdminUrl($url="")
{
    if($url!="")
         return $url = URL."admin/".$url;  
        // URL lúc này là: http://webdev.local/, nối thêm chuổi /admin -> http://webdev.local/admin/....
    else
        return URL."admin/";
}
$mysql = new mysqli($servername, $username, $password, $database);
global $mysql;

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
include "cart-function.php";