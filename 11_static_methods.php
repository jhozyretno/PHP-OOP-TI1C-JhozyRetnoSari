<?php
class Hitung {
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kali($a, $b) {
        return $a * $b;
    }
}

echo Hitung::tambah(7, 8) . "<br>";
echo Hitung::kali(4, 6) . "<br>";
?>