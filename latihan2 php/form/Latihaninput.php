<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nilai Mahasiswa Input</title>
    <!-- CDN CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">

<form action="" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">nilai uas</label>
                <input type="number" name="nilai_uas" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">nilai uts</label>
                <input type="number" name="nilai_uts" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" name="proses" type="submit">Proses</button>
            </div>
        </form>


        <hr>
        <!-- aksi saat button proses diklik -->
        <?php
        if (isset($_POST['proses'])) {

            // panggil file PersegiPanjang.php agar bisa membuatkan object dari class PersegiPanjang
            include 'class/NilaiMahasiswa.php';

            // buat variabel utk menampung nilai inputan panjang dan lebar
            
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            // buatkan object untuk class 
            $mahasiswa = new NilaiMahasiswa();
            // panggil function hitungLuas yg ada di class 
            

            $nilai = $mahasiswa->cetak($nilai_uas, $nilai_uts);
        ?>
            <!-- apit tag html di antara if php -->
            
                <h1>Nilai Rata-Rata Siswa</h1>
            <table class="table table-light">
                
                <tr>
                    <td>Nilai uas</td>
                    <td>:</td>
                    <td><?= $nilai_uas?></td>
                </tr>
                <tr>
                    <td>Nilai Uts</td>
                    <td>:</td>
                    <td><?= $nilai_uts ?></td>
                </tr>
                <tr>
                    <td>Nilai rata - rata</td>
                    <td>:</td>
                    <td><?= $nilai['nilaiRata'] ?></td>
                </tr>
                <tr>
                    <td>keterangan </td>
                    <td>:</td>
                    <td><?= $nilai['keterangan'] ?></td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td>:</td>
                    <td><?= $nilai['message'] ?></td>
                </tr>
            </table>
        <?php
        }
        ?>
        </div>
    </div>
</body>

</html>