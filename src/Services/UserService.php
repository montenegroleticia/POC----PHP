<?php

namespace Services;

use Repository\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function listUsers()
    {
        return $this->userRepository->listUsers();
    }
}
