<?php
function tampilkanHaloDunia($n){
    if($n <= 0) return;
    echo "Hallo Dunia! <br>";
    tampilkanHaloDunia($n-1);
}
tampilkanHaloDunia(5);
?>