<?php
require_once "autoload.php";

$dollarJSon = new Dollar("https://www.cbr-xml-daily.ru/daily_json.js", new DeserializerJSonDollar(), 'USD');
echo $dollarJSon->write();

$dollarXML = new Dollar("https://www.cbr-xml-daily.ru/daily_utf8.xml", new DeserializerXMLDollar(), 'USD');
echo $dollarXML->write();

