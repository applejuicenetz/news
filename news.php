<?php
header('Content-Type: text/html; charset=ISO-8859-15');

$version = $_REQUEST['version'] ?: '';

$message = file_get_contents('news/_header.html');

# zeige Versions spezifische Informationen als erstes an
if (preg_match('#0.[\d]+.[\d]+.[\d]+#', $version) && file_exists(sprintf('news/%s.html', $version))) {
    $message .= file_get_contents(sprintf('news/%s.html', $version));
}

$message .= file_get_contents('news/_footer.html');

echo $message;
