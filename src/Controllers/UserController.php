<?php

namespace Controllers;

use Services\UserService;

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function listUsers()
    {
        $users = $this->userService->listUsers();

        // Renderizar a resposta em JSON
        header('Content-Type: application/json');
        echo json_encode($users);
    }
}
