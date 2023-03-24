<?php

class HtmlWriter
{
    public string $jsonString;

    public function __construct($fileName)
    {
        $this->jsonString = $fileName;
    }

    /**
     * @return array<array<string>>
     */
    private function getContent(): array
    {
        $jsonFileContents = file_get_contents($this->jsonString);

        return json_decode($jsonFileContents, true);
    }

    /**
     * @return array<Item>
     */
    private function dis(): array
    {
        $arrayOfObj = [];
        $arrayOfArrays = $this->getContent();
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