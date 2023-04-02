<?php

class DeserializerJSonDollar implements DesInterface
{

    private function getContent($dataString): array
    {
        $dataContents = file_get_contents($dataString);
        $jsonDecoded = json_decode($dataContents, true);
        return $jsonDecoded;
    }
    public function des(string $getContent, string $valute): string
    {
        $jsonDecoded = $this->getContent($getContent);
        return $jsonDecoded['Valute'][$valute]["Value"];
    }
}