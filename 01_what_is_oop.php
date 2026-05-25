<?php
class HewanDarat {
    public $nama;
    public $suara;

    public function bersuara() {
        echo $this->nama . " bilang " . $this->suara . "<br>";
    }
}

$kambing = new HewanDarat();
$kambing->nama = "Kambing";
$kambing->suara = "mbek";
$kambing->bersuara();
?>