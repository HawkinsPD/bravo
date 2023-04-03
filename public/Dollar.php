<?php

class Dollar
{
    public array $dataString;
    private array $deserializer;
    public string $valute;
//    public function __construct(string $fileName, DesInterface $deserializer, string $valute)
    public function __construct(array $fileNameArr, array $deserializerArr, string $valute)
    {
        $this->dataString = $fileNameArr;
        $this->deserializer = $deserializerArr;
        $this->valute = $valute;
    }

//    private function getContent(): string
//    {
//        $dataContents = file_get_contents($this->dataString);
//        return $dataContents;
//    }

    public function write(): string
    {
        $result = '';
        for ($i = 0; $i <= count($this->dataString)-1; $i++) {
            $result .= $this->dataString[$i] . ' - ';
            $arrayItem = $this->deserializer[$i]->des($this->dataString[$i], $this->valute);
            $result .= $arrayItem . "<br>";
        }
        return $result;
    }

}