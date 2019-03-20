<?php
// @author Maik Basso <maik@maikbasso.com.br>
require_once './data/ProfessorData.data.php';

//define the page title
if(!isset($pageTitle)){
    $title = $PROFESSOR["name"];
    $pageTitle = "";
}
else{
    $title = $pageTitle . " - " . $PROFESSOR["name"];
}

?>
<!DOCTYPE html>
<!--
@author Maik Basso <maik@maikbasso.com.br>
-->
<html lang="eng-us">
    <head>
        <title><?=$title?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="css/site.css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/site.js"></script>
    </head>
    <body>
        <header>
            <div class="menu">
                <div id="main-menu-button" class="menu-mobile">
                    <div class="button">
                        <div id="bar1" class="bar-h"></div>
                        <div id="bar2" class="bar-h"></div>
                        <div id="bar3" class="bar-h"></div>
                    </div>
                </div>
                <ul id="main-menu" class="items">
                    <li><a href="./index">Home</a></li>
                    <li><a href="./professionalInformation">Professional Information</a></li>
                    <li><a href="./publications">Publications</a></li>
                    <li><a href="./researchProjects">Research & Projects</a></li>
                    <li><a href="./teaching">Teaching</a></li>
                </ul>
            </div>
        </header>
        <div class="page">
            <a href="./index">
                <div class="page-header">
                    <div class="left">
                        <div class="photo"></div>
                    </div>
                    <div class="right">
                        <div class="name"><?=$PROFESSOR["name"]?></div>
                        <div class="office"><?=$PROFESSOR["office"]?></div>
                        <div class="university"><?=$PROFESSOR["university"]?></div>
                        <div class="department"><?=$PROFESSOR["department"]?></div>
                    </div>
                </div>
            </a>
            <div class="page-content-label">
                <?=$pageTitle?>
            </div>
            <div class="page-content">