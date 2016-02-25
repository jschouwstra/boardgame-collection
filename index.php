<?php
    session_start();
    require "include/header.php";

        $view = $_GET['view'];
        switch ($view): 
            //default view:


            case "manage-playlist":
                require "view/manage-playlist.php";
            break;
            case "new_game":
                require "view/new_game.php";
            break;

            case "manage-games":
                require "view/manage-games.php";
            break;
            case "game_edit":
                require "view/game_edit.php";
            break; 
            case "login":
                require "view/login.php";
            break;

            case "dashboard":
                require "view/dashboard.php";
            break;
                
            case null:
                require "view/home.php";
            break;
        endswitch;
    require "include/footer.php";
?>