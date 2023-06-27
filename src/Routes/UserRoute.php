<?php

namespace Routes;

use Controllers\UserController;

class UserRoute
{
    public static function defineRoutes($router)
    {
        $router->get('/users', function () {
            $userController = new UserController();
            $userController->listUsers();
        });
    }
}
