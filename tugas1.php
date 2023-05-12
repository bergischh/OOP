<?php
    echo "<b>Data Siswa</b>";
    echo "<br>";

    class namaSiswa{
        public $siswa = "Nama : Bergisch Humaira";
        private $rayon,
                $rombel;

        function tampilRayon() {
           echo "<br>";
           echo $this->rayon = "Rayon : Sukasari 2";
           echo "<br>";
           echo $this ->rombel = "Rombel : PPLG";
        }
    }

    $namaSiswa1 = new namaSiswa();
    echo $namaSiswa1 -> siswa ;

    echo $namaSiswa1 ->tampilRayon();
?>
