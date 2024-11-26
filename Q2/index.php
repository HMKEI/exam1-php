<?php
echo "1";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('&nbsp;', (5 - $i) * 2); 
    echo str_repeat('* ', $i);
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    echo str_repeat('&nbsp;', (5- $i) * 2); 
    echo str_repeat('* ', $i);
    echo "<br>";
}

echo "<br><br>";
echo "2";
echo "<br><br>";
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('* ', $i);
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    echo str_repeat('* ', $i);
    echo "<br>";
}

echo "<br><br>"; 
echo "3";
echo "<br><br>";
for ($i = 0; $i <= 5; $i++) {
    echo str_repeat('&nbsp;', ($i -1) * 0); // إضافة مسافات
    echo str_repeat('* ', 5- $i);
    echo "<br>";
}
