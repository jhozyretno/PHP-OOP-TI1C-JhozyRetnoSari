<?php
class Hewan {
    public $nama;

    function __construct($nama) {
        $this->nama = $nama;
    }

    public function makan() {
        echo $this->nama . " sedang makan<br>";
    }
}

class Kucing extends Hewan {
    public function mengeong() {
        echo $this->nama . " bilang meow! <br>";
    }
}

$kucing = new Kucing("Neko");
$kucing->makan();
$kucing->mengeong();
?>