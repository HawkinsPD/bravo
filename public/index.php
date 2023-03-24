<?php
//$json_file = file_get_contents("test.json");
//$json_decode = json_decode($json_file, true);
//
//function ave($json_decode) {
//    foreach($json_decode as $keyTag => $itemArray) {
////            echo $keyTag, "<br>";
//        $s .= "<$keyTag ";
//        $style = $itemArray['style'];
//        echo $style;
//        foreach($itemArray as $keyKey => $keyValue) {
////            echo $keyKey . ' '. $keyValue, "<br>";
//        }
//        $s .= "$keyKey=" . "'$keyValue'>" ;
//        foreach($itemArray as $keyKey => $keyValue) {
//            $s .= $keyValue . "</$keyTag> </n>";
//            break;
//        }
//    }
//    return $s;
//}
//
//echo ave($json_decode);
//
//?>
<!---->
<!---->
<?php
////
////echo "
////<h1 style='margin-bottom: 1rem'>title</h1>
////<div style='color: red'>main content</div>
////";
//
//// -> /Users/roughty/php/docker docker-compose up -d
//// docker-compose down
//// docker ps


//include "Item.php";

require_once "autoload.php";

//$jsonFile = file_get_contents("test.json");
//$jsonDecode = json_decode($jsonFile, true);
//
///** @var array<Item> $objArr */
//$objArr = [];
//
//function clObj($jsonDecode): void
//{
//    foreach ($jsonDecode as $keyTag0 => $itemArray) {
//        if (array_key_exists('text', $itemArray)) {
//            $keyTag = $keyTag0;
//            $style = $itemArray['style'];
//            $text = $itemArray['text'];
//            $element = new Item();
//
//            $element
//                ->setTag($keyTag)
//                ->setText($text)
//                ->setStyle($style);
//
//            $objArr[] = $element;
//            echo $element->keyTag;
//        }
//    }
//}
//
//clObj($jsonDecode);
//
///**
// * @param array<array<string, string>> $jsonDecode
// */function ave(array $jsonDecode): ?string
//{
//    foreach ($jsonDecode as $keyTag => $itemArray) {
//        $style = $itemArray['style'];
//        $text = $itemArray['text'];
//        $string .= "< $keyTag style='$style'>$text<$keyTag ></n>";
//    }
//    return $string;
//}
//
//echo ave($objArr);


 $writer = new HtmlWriter("test.json");
 echo $writer->write();