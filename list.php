<?php

$dir = dir('dds/');

echo "<div class='asta'>";

while ($target = $dir->read()){
if ($target != '.' && $target != '..'){
echo " <img class='immg' src='dds/$target' width='200px'>";
}
}
echo "</div>";
?>