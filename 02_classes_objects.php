<?php
class Buah {
    public $nama;
    public $warna;

    public function info() {
        echo "Buah: " . $this->nama . " warna: " . $this->warna . "<br>";
    }
}

$buah1 = new Buah();
$buah1->nama = "Anggur";
$buah1->warna = "Ungu";
$buah1->info();

$buah2 = new Buah();
$buah2->nama = "Semangka";
$buah2->warna = "Hijau";
$buah2->info();
?>