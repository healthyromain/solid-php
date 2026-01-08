<?php

require_once 'RepositoryInterface.php';
require_once 'User.php';
require_once 'DatabaseInterface.php';

class UserRepository implements RepositoryInterface
{
    private $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function getUser(string $userEmail) : User
    {
        foreach ($this->getUsers() as $user) {
            if ($user->getEmail() === $userEmail) {
                return $user;
            }
        }

        throw new Exception('Utilisateur non trouvé');
    }

    public function getUsers() : array
    {
        $users = [];
        $rows = $this->database->fetchAll();

        foreach ($rows as $row) {
            $fullName = is_array($row) ? $row['full_name'] : $row->full_name;
            $email = is_array($row) ? $row['email'] : $row->email;
            $users[] = new User($fullName, $email);
        }

        return $users;
    }
}