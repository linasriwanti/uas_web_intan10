<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ATLET</title>
</head>

<body>
    <div class="container">
        <?php include 'navbar.php'; ?>
        <div id="carouselExampleControlsNoTouching" class="carousel slide mb-5" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Image/S1.jpg" class="d-block w-100" alt="..." style="height: 70vh;">
                </div>
                <div class="carousel-item">
                    <img src="Image/S2.jpeg" class="d-block w-100" alt="..." style="height: 70vh;">
                </div>
                <div class="carousel-item">
                    <img src="Image/S3.jpeg" class="d-block w-100" alt="..." style="height: 70vh;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mb-5">
            <h2>DAFTAR TERBARU ATLET</h2>
            <hr>
            <?php
            require 'Admin/koneksi.php';
            $sql = "SELECT * FROM tbl_atlet";
            $query = mysqli_query($koneksi, $sql);
            $no = 1;
            while ($data = mysqli_fetch_object($query)) {
            ?>
                <div class="col-md-3" style="width: 20rem;">
                    <div class="card-header">
                        <img src="Image/<?= $data->gambar; ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-header">
                        <h5>Nama : <?= $data->nama; ?></h5>
                        <p>Prestasi : <?= $data->prestasi; ?></p>
                        <p>Cabang Olahraga :<?= $data->cabang_olahraga; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>