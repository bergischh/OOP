<?php

class sekolah {
    protected $jumlahSiswa;
    protected function lihatJumlah (){
        return $this -> jumlahSiswa = 33;
    }
}

class filialSekolah extends sekolah {
    public function getSpeed(){
        return parent :: lihatJumlah();
    }
}

$sekolah = new filialSekolah();
echo $sekolah -> getSpeed();
?>