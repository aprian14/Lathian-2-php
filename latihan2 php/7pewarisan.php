<?php

use Singa as GlobalSinga;

    class Hewan {
        // atribut dari class Hewan
        private $jenis;

        // funcition untuk inisial
        public function inisial(){
            return "saya class Hewan";

        }
        // function setter (untuk mengubah suatu nilai dari property), ini untuk mengolah nilai nya 
        public function setJenis($jenis){
            // kita ubah nilai dari properti $jenis nya
            $this->jenis = $jenis;

        }
        // function getter (untuk mengambil nilai property yang sudah diubah nilainya olleh function setter atas)
        
        public function getJenis(){
            return $this->jenis;

        }
    }

    // class kambing => class kambing mewarisi class Hewan

    class Kambing extends Hewan {

    }
    // class Harimau => class Harimau mewarisi class Hewan
    class Harimau extends Hewan {

    }

    // class Harimau => class Harimau mewarisi class Hewan
    class Singa extends Hewan {

    }

    // class mamalia 
    class Mamalia extends Hewan {

        protected $jumlah_kaki = 4;

        public function berjalan(){
            return "Sedang Berjalan....";
        }
    }

    // class sapi 
    class Sapi extends Mamalia {

        
        public function suara(){
            return "Mooo";
        }
    }


    // membuatkan object dari suatu class
    $hewan = new Hewan();

    // membuatkan object dari suatu class
    $kambing = new Kambing();
    $kambing2 = new Kambing();
    $harimau = new Harimau();
    $singa = new Singa();


    $sapi = new Sapi(); // class Sapi ini sudah mewarisi class Mamalia -> Hewan

    // panggil function setjenis pada class hewan yang diwarisi oleh masing2 class anaknya

    $kambing->setJenis("Herbivora");
    $harimau->setJenis("Karnivora");
    $singa->setJenis("Karnivora Juga");

    // memanggil fungsi inisial pada class Hewan 
    echo $hewan->inisial();
    echo PHP_EOL;
    // mencetak isi function getJenis
    echo 'Kambing adalah Hewan' . $kambing->getJenis();
    echo PHP_EOL;

    echo 'Harimau adalah Hewan' . $harimau->getJenis();
    echo PHP_EOL;

    echo 'Singa adalah Hewan' . $singa->getJenis();
    echo PHP_EOL;

    echo "Memanggil function berjalan yang ada di class Mamalia" . $sapi->berjalan();
    echo PHP_EOL;
    // setJenis
    $sapi->setJenis("Mamalia, Herbivora");
    // memanggil funtion getJenis Yang ada di class Hewan 
    echo "Memanggil function getJenis yang ada di class Hewan" . $sapi->getJenis();

    echo " panggil atribut/ property jenis yang ada di class Hewan" . $sapi->getJenis();

?>