<?php

class DeserializerJSonDollar implements DesInterface
{

    private function getContent($dataString): array
    {
        $dataContents = file_get_contents($dataString);
        $jsonDecoded = json_decode($dataContents, true);
        return $jsonDecoded;
    }
    public function des(string $getContent): string
    {
        $jsonDecoded = $this->getContent($getContent);
        $resultArray = [];
        foreach ($jsonDecoded as $key => $value) {
            if ($key == "Valute") {
                foreach ($key as $key1 => $value1) {
                    if ($key1 == "AUD") {
                        $resultArray .= $value1;
                    }
                }
            }
        }
        return $resultArray;
    }
}