<?php
$email = $_POST["email"];
$text = $_POST["text"];
$censoredWord = $_POST["censoredWord"];

echo "Verifica email, conteine @ ?" . " " . (str_contains($email, "@") ? "True" : "False") . "<br>";
echo  "Verifica lunghezza testo inviato:" . " " . (strlen(string: $text))  . "<br>";
echo  "Testo inviato:" . " " . $text   . "<br>";
echo "Parola da censurare:" . " " . $censoredWord   . "<br>";

$finalText = "Sostituisco parola da censurare con tre *:" . " " .(str_replace($censoredWord, "***", $text)) . "<br>";
echo $finalText;

echo "Lunghezza testo censurato:" . " " . (strlen($finalText));