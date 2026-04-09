<?php
$motdepasse = "Benzinho0726";
$hash = password_hash($motdepasse, PASSWORD_DEFAULT);

echo $hash;

?>