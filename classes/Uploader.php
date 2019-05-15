<?php


class Uploader
{
    protected $formFieldName;

    public function __construct($formFieldName)
    {
        $this->formFieldName = $formFieldName;
    }

    public function isUploaded()
    {
        if(!empty($_FILES)){
            return isset($_FILES[$this->formFieldName]);
        }
        return false;
    }

    public function upload()
    {
        if($this->isUploaded()) {
            if($_FILES[$this->formFieldName]['error'] === 0) {
                move_uploaded_file($_FILES[$this->formFieldName]['tmp_name'],
                    __DIR__ . '/../img/' . $_FILES[$this->formFieldName]['name']);
            }
        }
    }
}