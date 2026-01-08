<?php

class User
{
    private $full_name = '';
    private $email = '';

    public function __construct(string $full_name, string $email)
    {
        $this->full_name = $full_name;
        $this->email = $email;
    }

    public function describe() : string
    {
        return $this->full_name . ' (' . $this->email . ')';
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getFullName() : string
    {
        return $this->full_name;
    }
}
