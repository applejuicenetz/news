<?php
header('Content-Type: text/html; charset=ISO-8859-15');


echo file_get_contents(
    sprintf('https://applejuicenetz.github.io/news/%s.html', $_REQUEST['version'] ?: '404'),
    false,
    stream_context_create(
        [
            'http' => [
                'ignore_errors' => true,
            ],
        ]
    ));
