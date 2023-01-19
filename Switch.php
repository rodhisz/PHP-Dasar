<?php
$nilai = 10;

switch ($nilai) {
    case 10: //$nilai == case
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B": //$nilai == "B"
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "C": //$nilai == "C"
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D": //$nilai == "D"
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
}

echo "\n";

echo "# switch tanpa {} #";
echo "\n";

switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
    endswitch;
?>
