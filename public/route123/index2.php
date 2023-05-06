<?php
require_once "autoload.php";

function echoCurrency()
{
    if (isset($_GET['getData'])){
        if ($_GET['userId'] === '01') {
            $imgArr = ['Taylor_Swift_-_Evermore.png'];
            return json_encode($imgArr);
        }elseif ($_GET['userId'] === '02'){
            $imgArr = ['Taylor_Swift_-_Red.png'];
            return json_encode($imgArr);
        }
    }elseif (isset($_GET['saveMe'])){
        $url = $_GET['saveMe'];
        $fileName =  basename($url);
        file_put_contents($fileName, file_get_contents($url));
        return json_encode($url);
    }else {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//        $routes = [
//            '/' => 'homePage.php',
//            '/save' => 'saveImg.php',
//            '/getImages' => ['01','02']
//        ];
        if ($uri === '/') {
            require 'homePage.php';
        }elseif ($uri === '/save') {
            require 'saveImg.php';
        }elseif ($uri === '/getImages' && isset($_GET['userId'])){
            require 'getImg.php';
        }
//        elseif (array_key_exists($uri, $routes)) {
//            require $routes[$uri];
//        }else {
//            http_response_code(404);
//            echo 'haha';
//        }
    }
}

echo echoCurrency();
?>

