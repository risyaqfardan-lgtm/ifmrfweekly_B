<?php

    $koneksi = mysqli_connect("localhost", "root", "root", "ifmrfweekly_B");

    // if ($koneksi) {
    //     echo "Koneksi Berhasil";
    // } 
    // else {
    //     echo "Koneksi Gagal";
    // }

   require "fungsi.php";
   $qmahasiswa = "SELECT * FROM mahasiswa";
   $mahasiswas = tampildata($qmahasiswa);

    //    var_dump($mahasiswas);
    //    die();

    // ambil data (fetch) dari lemari mahasiswa
    // mysqli_fetch_row() -> mengembalikan data dalam bentuk array numerik (array dengan index berupa angka)
    // mysqli_fetch_assoc() -> mengembalikan data dalam bentuk array associative
    // mysqli_fetch_array() -> mengembalikan data dalam bentuk array numerik dan associative
    // mysqli_fetch_object() -> mengembalikan data dalam bentuk object

    // while ($mahasiswa = mysqli_fetch_assoc($result)) 
    // {
    //     var_dump($mahasiswa["nama"]);
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika</title>
</head>
<body>

    <h1>INFORMATIKA 2026</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th><a href="index.php">Home</a></th>
            <th><a href="profile.php">Profile</a></th>
            <th><a href="contact.php">Contact</a></th>
            <th><a href="mahasiswa.php">Mahasiswa</a></th>
        </tr>
    </table>

    <br>
    <hr>

    <h2>Data Mahasiswa</h2>

    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. Hp</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        
        <?php
            $i = 1;
            foreach ($mahasiswas as $mahasiswa)
            {
                
        ?>

        <tr>
            <td align="center"><?php echo $i++; ?></td>
            <td><?php echo $mahasiswa['nama']; ?></td>
            <td><?php echo $mahasiswa['nim']; ?></td>
            <td><?php echo $mahasiswa['jurusan']; ?></td>
            <td><?php echo $mahasiswa['email']; ?></td>
            <td><?php echo $mahasiswa['no_hp']; ?></td>
            <td><img src="aset/Foto/<?php echo $mahasiswa['foto']; ?>" alt="<?php echo $mahasiswa['nama']; ?>" width="60"></td>
            <td>
                <a href="editdata.php?id=<?php echo $mahasiswa['id']; ?>"><button>Edit</button></a>
                <a href="deletedata.php?id=<?php echo $mahasiswa['id']; ?>"><button>Hapus</button></a>
            </td>
        </tr>

        <?php

            }
        ?>
    </table>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td align="center" rowspan="2" colspan="2">?</td>
            <td>2,4</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>

        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</body>
</html>