<?php

class DeserializerXMLDollar implements DesInterface
{

    private function getContent($dataString): array
    {
        $xml = simplexml_load_string(file_get_contents($dataString));
        $xmlJsonEncode = json_encode($xml);
        $xmlJsonDecode = json_decode($xmlJsonEncode, true);
        return $xmlJsonDecode;
    }
    public function des(string $getContent, string $valute): string
    {
        $result = '';
        $jsonDecoded = $this->getContent($getContent);
        foreach ($jsonDecoded as $key) {
            for ($i = 0; $i <= count($key); $i++)
                if ($key[$i]['CharCode'] == $valute) {
                    $result = ($key[$i]['Value']);
                }
        }
        return $result;
    }
}