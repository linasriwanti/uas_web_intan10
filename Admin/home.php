<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INDOAPRIL</title>
</head>

<body>
    <?php include 'navbar_backend.php'; ?>
    <div class="container mt-5">
        <a href="tambah.php" class="btn btn-outline-primary">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Atlet</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Prestasi</th>
                    <th scope="col">Cabang Olahraga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'koneksi.php';
                $sql = "SELECT * FROM tbl_atlet";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_object($query)) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $data->nama; ?></td>
                        <td><?= $data->Jenis_Kelamin; ?></td>
                        <td><?= $data->prestasi; ?></td>
                        <td><?= $data->cabang_olahraga; ?></td>
                        <td><a href="../Image/<?= $data->gambar; ?>"><?= $data->gambar; ?></a></td>
                        <td>
                            <a href="edit.php?id=<?= $data->id_atlet; ?>" class=" btn btn-warning mr-1">Edit</a>
                            <a href="hapus.php?id=<?= $data->id_atlet; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>