<?php

// @author Maik Basso <maik@maikbasso.com.br>

include_once './ui/header.ui.php';

?>

<p><?=$PROFESSOR["text"]?></p>
<br><br>
<h1>Contact information:</h1>
<br>
<p><?=$PROFESSOR["address"]?></p>
<br>
<p><b>Email:</b> <?=$PROFESSOR["email"]?></p>
<p><b>Phone:</b> <?=$PROFESSOR["phone"]?></p>

<?php
include_once './ui/footer.ui.php';
?>