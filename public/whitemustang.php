<?php
$json_file = file_get_contents("test.json");
$json_decode = json_decode($json_file, true);

function ave($json_decode){
    foreach($json_decode as $keyTag => $itemArray) {
        if (array_key_exists('text',$itemArray)){
            $style = $itemArray['style'];
            $text = $itemArray['text'];
            $string .= "<$keyTag style='$style'>$text<$keyTag></n>" ;
        }

    }
    return $string;
}

echo ave($json_decode);
?>
