<?php

// @author Maik Basso <maik@maikbasso.com.br>

$pageTitle = "Research & Projects";

include_once './ui/header.ui.php';
include_once './plugins/parsedown/Parsedown.php';

$Parsedown = new Parsedown();
echo $Parsedown->text(file_get_contents("./data/pages/researchProjects.md"));

include_once './ui/footer.ui.php';
?>