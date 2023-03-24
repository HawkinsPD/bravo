<?php

class HtmlWriter
{
    public array $jsonDecoded = [];

    public function __construct($fileName)
    {
        include $fileName;
        $jsonFileContents = file_get_contents($fileName);
        $this->jsonDecoded = json_decode($jsonFileContents, true);
    }

//    /**
//     * @return array<array<string>>
//     */
//    private function getContent(): array
//    {
//        $jsonFile = file_get_contents("test.json");
//
//        return json_decode($jsonFile, true);
//    }

    /**
     * @return array<Item>
     */
    private function dis(): array
    {
        $arrayOfObj = [];
        $arrayOfArrays = $this->jsonDecoded;
        foreach ($arrayOfArrays as $tag => $itemArray) {
            $element = new Item();
            $element
                ->setTag($tag)
                ->setText($itemArray["text"])
                ->setStyle($itemArray["style"]);
            $arrayOfObj[] = $element;
        }
        return $arrayOfObj;
    }

    public function write(): string
    {
        $stringres = "";
        $arrayItem = $this->dis();
        foreach ($arrayItem as $item) {
            $stringres .= $item->rString();
        }
        return $stringres;
    }

}