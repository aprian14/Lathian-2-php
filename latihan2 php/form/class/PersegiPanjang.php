<?php

    class PersegiPanjang {

        public function hitungLuas($panjang, $lebar) {
            $luas = $panjang * $lebar;

            return $luas;

        }

        public function cetak() {
            $data = [
                'message' => "Success",
                'status' => "true",
            ];

            return $data;
        }

    }

?>