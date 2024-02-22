<?php
$animals = ["kucing", "ayam", "banteng", "ikan"];
echo "Ini hewan dengan index ke 1 :" .$animals[1];
echo "<br>";
echo "Ini hewan dengan index ke 3 :" .$animals[3];

//mencetak seluruh data array menggunakan looping foreach
foreach ($animals as $animal) {
    echo "<li>" .$animal. "</li>";
}