<?php

require_once 'UnknownExtensionException.php';

abstract class MusicType
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;

        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        if (empty($extension)) {
            throw new UnknownExtensionException('Les fichiers sans extension ne sont pas acceptés.');
        }
    }

    public function getFilename() : string
    {
        return $this->filename;
    }

    abstract public function listen();
}
