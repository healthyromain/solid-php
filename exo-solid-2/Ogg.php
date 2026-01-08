<?php

require_once 'Music.php';

class Ogg extends Music
{
    public function supports(string $filename): bool
    {
        return $this->getExtension($filename) === 'ogg';
    }

    public function listen(string $filename)
    {
        return 'Lecture du fichier Ogg ' . $filename;
    }
}