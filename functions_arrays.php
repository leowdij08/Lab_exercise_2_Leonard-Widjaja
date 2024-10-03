<?php
class Siswa {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function sapa() {
        return "Hello, " . $this->nama . "!";
    }
}

$siswa = [
    new Siswa("Alicia"),
    new Siswa("Ivone"),
    new Siswa("Leonard"),
    new Siswa("Felicia"),
    new Siswa("Chaiden")
];

foreach ($siswa as $objekSiswa) {
    echo $objekSiswa->sapa() . "<br>";
}
?>
