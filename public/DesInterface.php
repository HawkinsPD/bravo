<?php

interface DesInterface
{
    /**
     * @param string $dataString
     * @return string
     */
    public function des(string $dataString): string;
}