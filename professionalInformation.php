<?php

// @author Maik Basso <maik@maikbasso.com.br>

$pageTitle = "Professional Information";

include_once './ui/header.ui.php';
include_once './libraries/parsedown/Parsedown.php';

$Parsedown = new Parsedown();
echo $Parsedown->text(file_get_contents("./data/pages/professionalInformation.md"));

include_once './ui/footer.ui.php';
?>