<?php

class Dollar
{
    public string $dataString;
    private DesInterface $deserializer;
    public function __construct(string $fileName, DesInterface $deserializer)
    {
        $this->dataString = $fileName;
        $this->deserializer = $deserializer;
    }

//    private function getContent(): string
//    {
//        $dataContents = file_get_contents($this->dataString);
//        return $dataContents;
//    }

    public function write(): string
    {
        $result = $this->dataString . ' - ';
        echo $result;
        $arrayItem = $this->deserializer->des($this->dataString);
        foreach ($arrayItem as $item) {
            $result .= $item->rString();
        }
        echo $this->dataString;
        return $result;
    }

}