<?php


class TextFile
{
    protected $path;

    protected $data = [];

    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
}