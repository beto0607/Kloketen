<?php
    $doc = new DOMDocument();
    $doc->Load('aventuras_front.php');

    $xpath = new DOMXPath($doc);

    $animals = $xpath->query("//a[@aux=]");
    foreach($animals as $animal) {
        // ...
    }