<?php

// @author Maik Basso <maik@maikbasso.com.br>

$pageTitle = "Teaching";

include_once './ui/header.ui.php';
include_once './libraries/parsedown/Parsedown.php';

$Parsedown = new Parsedown();
echo $Parsedown->text(file_get_contents("./data/pages/teaching.md"));

include_once './ui/footer.ui.php';
?>