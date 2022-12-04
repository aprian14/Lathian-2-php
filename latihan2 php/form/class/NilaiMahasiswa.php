
<?php
    // class persegi
    class NilaiMahasiswa{
        public $keterangan = "";
        public $message = "";
        public $nilai_rata = 0;

        // method function
        // public function nilai ($nilai_UTS, $nilai_UAS)
        // {

        
        // $nilai_rata = ($nilai_UTS, $nilai_UAS) / 2;
        // return $nilai_rata;
        // }
    
    
    public function cetak($nilai_uas, $nilai_uts){

        $nilaiRata = ($nilai_uas + $nilai_uts) / 2;
    
    if($nilaiRata >= 81 AND $nilaiRata <= 100 ) { // 81 - 100
        $keterangan = "A";
        $message = "Excelent!";
    } elseif($nilaiRata >= 78 && $nilaiRata <= 80.99 ) { // 78 - 80.99
        $keterangan = "A-";
        $message = "Good!";
    } elseif($nilaiRata >= 75 && $nilaiRata <= 77.99 ) { // 75 - 77.99
        $keterangan = "B+";
        $message = "Not Bad!";
    } elseif($nilaiRata < 75){ // < 75
        $keterangan = "Tidak Lulus";
        $message = "Keep Spirit!";
    } else {
        $keterangan = "Tidak terdefinisi";
        $message = "Undefined!";
    }
   
    // return $keterangan;
    // tampung nilai apa saja yg ingin direturn ke dalam satu variabel yg bertipe data array
    $data = [
        'nilaiRata' => $nilaiRata,
        'keterangan' => $keterangan,
        'message' => $message
    ];

    return $data;
}
}
?>