<?php
trait SalamKenal {
    public function sapa() {
        echo "Halo semuanya!<br>";
    }
}

trait PerkenalanBaru {
    public function kenalan($nama) {
        echo "Nama saya " . $nama . "<br>";
    }
}

class OrangBaru {
    use SalamKenal, PerkenalanBaru;
}

$o = new OrangBaru();
$o->sapa();
$o->kenalan("Jhozy");
?>