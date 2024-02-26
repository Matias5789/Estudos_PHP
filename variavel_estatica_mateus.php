<?php
function somatoria ($a) {
    static $b;
    $b += $a;
    echo "valor de a = $a valor de b = $b <br>\n";
}
somatoria(2);
somatoria(4);
somatoria(6);

?>