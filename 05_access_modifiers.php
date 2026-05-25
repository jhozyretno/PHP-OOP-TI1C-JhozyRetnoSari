<?php
class Orang {
    public $nama;
    protected $umur;
    private $password;

    function __construct($nama, $umur, $password) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->password = $password;
    }

    public function getUmur() {
        return $this->umur;
    }
}

$orang = new Orang("Jhozy", 17, "kambingcoklat");
echo $orang->nama . "<br>";
echo $orang->getUmur() . "<br>";
?>