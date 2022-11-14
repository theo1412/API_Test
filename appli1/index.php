<?php
ob_start();
?>
<h1>Bienvenue mon gars sur l'API du calendrier EMLV</h1>
<?php
$content = ob_get_clean();
require_once("template.php");