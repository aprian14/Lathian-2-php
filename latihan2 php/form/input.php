<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <!-- CDN CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Panjang</label>
                <input type="number" name="panjang" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Lebar</label>
                <input type="number" name="lebar" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" required>
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
            include 'class/PersegiPanjang.php';

            // buat variabel utk menampung nilai inputan panjang dan lebar
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            // buatkan object untuk class PersegiPanjang
            $persegi_panjang = new PersegiPanjang();
            // panggil function hitungLuas yg ada di class PersegiPanjang
            $luas = $persegi_panjang->hitungLuas($panjang, $lebar);

            $data = $persegi_panjang->cetak();
        ?>
            <!-- apit tag html di antara if php -->
            <table class="table table-bordered">
                <tr>
                    <td>Data Message</td>
                    <td>:</td>
                    <td><?= $data['message'] ?></td>
                </tr>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><?= $panjang ?></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><?= $lebar ?></td>
                </tr>
                <tr>
                    <td>Luas</td>
                    <td>:</td>
                    <td><?= $luas ?></td>
                </tr>
            </table>
        <?php
        }
        ?>
    </div>
</body>

</html>