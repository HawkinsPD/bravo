<?php

class SaveMe
{
    public function saveMe()
    {
        $url = $_GET['saveMe'];
        $fileName =  basename($url);
        file_put_contents($fileName, file_get_contents($url));
        return json_encode($url);
    }
}