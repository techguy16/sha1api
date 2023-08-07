<?php
header('Content-Type: application/json');

function getSHA1Hash($text) {
    $sha1Hash = hash('sha1', $text);
    return $sha1Hash;
}

$text = $_GET['text'];
$sha1Hash = getSHA1Hash($text);

$response = [
    'sha1' => $sha1Hash
];

echo json_encode($response);
?>
