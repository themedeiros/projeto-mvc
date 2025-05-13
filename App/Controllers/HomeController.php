<?php

namespace App\Controllers;

class HomeController {

    public function index() {
        return require_once __DIR__ . "/../Views/assets/@imports/navbar.php";
        require_once __DIR__ . "../Views/assets/@imports/banner.php";
        require_once __DIR__ . "../Views/assets/@imports/about.php";
        require_once __DIR__ . "../Views/assets/@imports/paragraphs.php";
    }
    
}