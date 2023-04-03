<?php
require_once "autoload.php";

//$dollarJSon = new Dollar("https://www.cbr-xml-daily.ru/daily_json.js", new DeserializerJSonDollar(), 'USD');
//echo $dollarJSon->write();

//$dollarXML = new Dollar("https://www.cbr-xml-daily.ru/daily_utf8.xml", new DeserializerXMLDollar(), 'USD');
//echo $dollarXML->write();

//$dollar = new Dollar(['https://www.cbr-xml-daily.ru/daily_json.js', "https://www.cbr-xml-daily.ru/daily_utf8.xml"], [new DeserializerJSonDollar(), new DeserializerXMLDollar()], 'USD');
//echo $dollar->write();
?>
<form action="index.php" method="get">
    ОБНАРУЖЕНА ХАЛЯВА: <input type="text" name="Currency">
    <input type="submit" value="ВЗЯТЬ">
</form>
<?php
if (isset($_GET['Currency'])) {
    $dollar = new Dollar(['https://www.cbr-xml-daily.ru/daily_json.js', "https://www.cbr-xml-daily.ru/daily_utf8.xml"], [new DeserializerJSonDollar(), new DeserializerXMLDollar()], $_GET['Currency']);
    echo $dollar->write();
}