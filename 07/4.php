<?php
    $file = '1.txt';
    $hand = fopen($file,'r');
    echo fgets($hand);
    echo "<br>";
    echo fgets($hand);
    fclose($file);

?>

<?php
$file = '1.txt';
$hand = fopen($file,'r');
echo fgets($hand);
echo '<br>';
//echo  fgets($hand);
// echo fclsoe($file);

$handle2 = fopen($file,'r');
echo fgets($handle2);
fclose($file);

?>