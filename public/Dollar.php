<?php

class Dollar
{
    public string $dataString;
    private DesInterface $deserializer;
    public string $valute;
    public function __construct(string $fileName, DesInterface $deserializer, string $valute)
    {
        $this->dataString = $fileName;
        $this->deserializer = $deserializer;
        $this->valute = $valute;
    }

//    private function getContent(): string
//    {
//        $dataContents = file_get_contents($this->dataString);
//        return $dataContents;
//    }

    public function write(): string
    {
        $result = $this->dataString . ' - ';
        $arrayItem = $this->deserializer->des($this->dataString, $this->valute);
        $result .= $arrayItem . "<br>";
        return $result;
    }

}