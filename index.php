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
    <div class="d-flex flex-column justify-content-center align-items-center bg-secondary bg-opacity-50%" style="height: 100vh;">
        <div class="container rounded-2 p-5 shadow p-3 border border-white" style="max-width: 750px;">

            <div class="container d-flex justify-content-center gap-2 mb-3">
                <a class="btn btn-primary btn-lg m text-align-center" style="width: 290px;" href="?shape=segitiga">Luas Segitiga</a>
                <a class="btn btn-light btn-lg m" style="width: 290px;" href="?shape=rectangle">Luas Persegi Panjang</a>
            </div>

            <?php $shape = isset ($_GET['shape']) ? $_GET['shape'] : '';
            switch ($shape) {
                case 'segitiga':
                    include 'segitiga.php';
                    break;
                case 'rectangle':
                    include 'rectangle.php';
                    break;
                default:
                    break;
            }
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>