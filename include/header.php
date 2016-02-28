<?php
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
require "connection.php";
require_once "model/User.php";
require_once "model/Game.php";
require_once "model/Category.php";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="asset/js/jquery-1.11.3.min.js"></script>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boardgame Collection</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="asset/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="asset/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="asset/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <script>
     $(document).ready (function(){
        $("#ErrorMessage").val("bla");
     }) 
     </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
              <div style="color: white;
padding: 15px 50px 5px 50px;
float: left;
font-size: 16px;"> 
<span style="margin-right: 49px;">Boardgame collection</span>
<div id="" class="btn-group">
    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="margin-left:10px;margin-right:5px;">
         Boardgame Playlist &nbsp;<span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#">Manage Playlists</a></li>
        <li><a href="#">New Playlist</a></li>

    </ul>
</div>

<div id="" class="btn-group">
    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="margin-left:10px;margin-right:5px;">
        Action &nbsp;<span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#">Action2</a></li>
        <li><a href="#">Another action2</a></li>
        <li><a href="#">Something else here2</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link2</a></li>
    </ul>
</div>

  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">

</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a style="background-color: #0b62a4;" href="#"><i class="glyphicon glyphicon-play fa-2x"></i> 
                        <b>Your boardgame Playlist</b></a>
                    </li>
                     <li>
                        <a  href="?view=manage-playlist"><i class="glyphicon glyphicon-list-alt fa-6x"></i> Manage Playlists</a>
                    </li>
                     <li>
                        <a  href="#"><i class="glyphicon glyphicon-plus fa-6x"></i> New Playlist</a>
                    </li>
                     <li>
                        <a style="background-color: #0b62a4;" href="#"><i class="glyphicon glyphicon-tower fa-2x"></i> 
                        <b>Games</b></a>
                    </li>
                     <li>
                        <a  href="?view=manage-games">    <i class="icomoon icon-dice"></i>
<i class="glyphicon glyphicon-list-alt fa-6x"></i> Manage Games</a>
                    </li>
                     <li>
                        <a  href="?view=new_game"><i class="glyphicon glyphicon-plus fa-6x"></i> New Game</a>
                    </li>

                     <li>
                        <a style="background-color: #0b62a4;" href="#"><i class="glyphicon glyphicon-tags fa-2x"></i> 
                        <b>Categories</b></a>
                    </li>
                     <li>
                        <a  href="#"><i class="glyphicon glyphicon-list-alt fa-6x"></i> Manage Categories</a>
                    </li>
                     <li>
                        <a  href="#"><i class="glyphicon glyphicon-plus fa-6x"></i> New Categories</a>
                    </li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <?php
