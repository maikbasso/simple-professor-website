<?php

// @author Maik Basso <maik@maikbasso.com.br>

$pageTitle = "Publications";

include_once './ui/header.ui.php';

$_GET['library']=1;
define('BIBTEXBROWSER_BIBTEX_LINKS',false); // no [bibtex] link by default
require_once('./libraries/bibtexbrowser/bibtexbrowser.php');
//global $db;
$db = new BibDataBase();
$db->load('./data/bibtex/publications.bib');

//$types = $

$entries = $db->getEntries();

foreach ($entries as $bibentry) {
  echo '<p class="reference">'.$bibentry->toHTML().'</p>';
}

include_once './ui/footer.ui.php';
?>