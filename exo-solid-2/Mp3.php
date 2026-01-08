<?php

require_once 'Music.php';

class Mp3 extends Music
{
    public function supports(string $filename): bool
    {
        return $this->getExtension($filename) === 'mp3';
    }

    public function listen(string $filename)
    {
        return 'Lecture du fichier Mp3 ' . $filename;
    }
}
