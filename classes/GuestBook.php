<?php
require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function getData()
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text;
        return $this;
    }

    public function save()
    {
        return file_put_contents($this->path, implode(PHP_EOL, $this->data));
    }
}