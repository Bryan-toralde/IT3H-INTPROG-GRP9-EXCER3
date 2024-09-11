<?php
$filename = "Bryan Toralde";

if (file_exists($filename)) {
    echo " '$filename'  Section: BSIT-3H\n";
} else {
    echo "Hi!'$filename' from BSIT-3H\n";
}


$data = "he is a photographer in Kultura Teknika\n";
file_put_contents($filename, $data);
echo "About him: '$filename'.\n";

$contents = file_get_contents($filename);
echo "His Birthday is on April 14, 2004\n$contents";

$lines = file($filename);
echo "Address:\n";
foreach ($lines as $line) {
    echo $line;
}
?>
