<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form class="container bg-body rounded-2" style="max-width:600px; height: auto;" action="" method="post">
        <div class="row">
            <p class="fs-5 fw-bold mt-3 mb-3">Hitung Luas Persegi Panjang</p>
            <div class="col">
                <label class="form-label fw-semibold" for="panjang">Nilai Panjang</label>
                <input type="number" class="form-control" name="panjang" id="panjang" placeholder="Panjang">
            </div>
            <div class="col">
                <label class="form-label fw-medium" for="lebar">Nilai Lebar</label>
                <input type="number" class="form-control" name="lebar" id="lebar" placeholder="Lebar">
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-lg mb-3 mt-3" style="width: 300px; margin-left: 12px;"
                    name="submit">Kirim</button>
            </div>
        </div>
    </form>

    <?php
    if (isset ($_POST['submit'])) {
        if ($_POST['panjang'] == '' || $_POST['lebar'] == '') {
            echo "<p class='container text-center fw-bold fs-5 bg-body rounded-2 mt-3' style='max-width:600px;'> ISI KEDUA FORM TERSEBUT !</p>";
        } else {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $hasil = $panjang * $lebar;
            echo "<p class='container text-center fw-bold fs-5 bg-body rounded-2 mt-3' style='max-width:600px;'>Luas : $panjang x $lebar = $hasil (cm2)</p>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>