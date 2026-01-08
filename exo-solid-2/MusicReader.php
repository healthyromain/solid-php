<?php

require_once 'Music.php';
require_once 'Mp3.php';
require_once 'Ogg.php';

class MusicReader
{
    private $filename;
    private $players;

    public function __construct($filename, array $players = [])
    {
        $this->filename = $filename;
        $this->players = !empty($players) ? $players : [new Mp3(), new Ogg()];
    }

    public function listen()
    {
        foreach ($this->players as $player) {
            if ($player->supports($this->filename)) {
                return $player->listen($this->filename);
            }
        }

        throw new \Exception('Aucun lecteur trouvé pour cette musique');
    }
}