<?php
$imagesDir = 'fakeads/horizontal/';
$array = array(
    "f" => "bar",
    "bar" => "foo",
);

$images = glob($imagesDir . '*.{png}', GLOB_BRACE);

$randomhorImage = $images[array_rand($images)]; // See comments
?>