<?php

// @author Maik Basso <maik@maikbasso.com.br>

// add all professor information
$PROFESSOR = [];

$PROFESSOR["name"] = "Prof. Dr. Professor's Name";

$PROFESSOR["office"] = "Associate Professor";

$PROFESSOR["university"] = "Federal University of Rio Grande do Sul (UFRGS)";

$PROFESSOR["department"] = "PPGEE – System of Automation";

$PROFESSOR["email"] = "example@server.com";

$PROFESSOR["phone"] = "+55 55 0 0000 0000";

$PROFESSOR["address"] = "
1600 Pennsylvania Ave NW<br>
Washington, DC 20500, USA
";

$PROFESSOR["text"] = "
<p>
This model aims to help teachers create a personal website where they can share their contact information and publications in a simplified way.
</p>
<p>
This model does not require the use of a database. Its installation is simple, just edit the files in the folders data and img.
</p>
<p>
In the img folder, replace \"profile.jpg\" with the desired profile photo. In the data folder, edit the array contained in \"ProfessorData.data.php\" with the information you want. In bibitex, include in the \"publications.bib\" file the list of publications your publications in bibtex format. On the pages folder, use the Markdown language to edit the content of the pages files.
</p>
<p>
Feel free to modify, share and use this template. I simply ask you to keep the copyrights to the developers involved!
</p>
<p>
Libraries used:
</p>
<ul>
    <li>https://github.com/monperrus/bibtexbrowser</li>
    <li>https://github.com/erusev/parsedown</li>
    <li>https://jquery.com</li>
</ul>
";