<?php
$zip = new ZipArchive;
$zip->open('wordpress.zip'); // Nome do seu arquivo zip entre aspas simples ok
$zip->extractTo('./');
$zip->close();
echo "<strong>Arquivo Extraido Com Sucesso ->";
?>
