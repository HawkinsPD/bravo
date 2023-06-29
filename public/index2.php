<?php
require_once "autoload.php";

function echoCurrency()
{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    if ($uri === '/') {
        $homePage = new HomePage();
        return $homePage->route();
    }elseif ($uri === '/save') { //html save form
        $saveImg = new SaveImg();
        return $saveImg->route();
    }elseif ($uri === '/getImages') {
        $getImg = new GetImg();
        return $getImg->route();
    }elseif ($uri === '/get-data') {
        $getData = new GetData();
        return $getData->getData();
    }elseif ($uri === '/saveMe') { //file save
        $saveMe = new SaveMe();
        return $saveMe->saveMe();
    }
}

echo echoCurrency();

?>

