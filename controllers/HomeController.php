<?php

namespace controllers;

use security\SessionManager;

class HomeController
{
        public function index(): void
        {
            $authentificatedUser = SessionManager::getAuthentifictedUSer();
            require_once('templates/header.php');
            require_once('views/home.php');
            require_once('templates/footer.php');
        }
}