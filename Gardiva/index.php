<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Selamat Datang " . $_SESSION['username'];
        echo " ";
        echo "<a href='logout.php'><button class='btn btn-danger'>Logout</button></a>";
    }

    ?>
<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body class="container">
<br>
<br>
    <a href="tambah.php" class="btn btn-primary">TAMBAH IDENTITAS</a>
    <a href="login.php"><button class='btn btn-success'>Login</button></a>
    <br />
    <br />
    <table border="1"class="table table-dark table-striped">
        <tr>
            <th>NO</th>
            <th>ID Mahasiswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['idmahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['idmahasiswa']; ?>" class="bg-success text-white">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['idmahasiswa']; ?>" class="bg-danger text-white">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>