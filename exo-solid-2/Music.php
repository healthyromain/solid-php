<?php

abstract class Music
{
    abstract public function supports(string $filename): bool;

    abstract public function listen(string $filename);

    protected function getExtension(string $filename): string
    {
        return pathinfo($filename, PATHINFO_EXTENSION);
    }
}
