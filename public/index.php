<?php
$json_file = file_get_contents("test.json");
$json_decode = json_decode($json_file, true);

function ave($json_decode) {
    foreach($json_decode as $keyTag => $itemArray) {
//            echo $keyTag, "<br>";
        $s .= "<$keyTag ";
        $style = $itemArray['style'];
        echo $style;
        foreach($itemArray as $keyKey => $keyValue) {
//            echo $keyKey . ' '. $keyValue, "<br>";
        }
        $s .= "$keyKey=" . "'$keyValue'>" ;
        foreach($itemArray as $keyKey => $keyValue) {
            $s .= $keyValue . "</$keyTag> </n>";
            break;
        }
    }
    return $s;
}

echo ave($json_decode);

?>


<?php
//
//echo "
//<h1 style='margin-bottom: 1rem'>title</h1>
//<div style='color: red'>main content</div>
//";

// -> /Users/roughty/php/docker docker-compose up -d
// docker-compose down
// docker ps
