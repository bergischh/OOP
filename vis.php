<?php
    class sekolah {
         private $nama ;

         public function tampilSekolah() {
             $this -> nama;
            echo $this->nama = "SMK Wikrama Bogor";
         }
    }

    $sekolah1 = new sekolah();

    echo $sekolah1->tampilSekolah();
    
?>