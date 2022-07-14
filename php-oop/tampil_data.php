<?php

include 'config.php';

$db = new Database();
$dataMhs = $db->tampil_data();

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah_data.php">Tambah Data</a>
    <table border="1px solid">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Angkatan</th>
                <th>Kode Prodi</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dataMhs as $row) :
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama_mhs']; ?></td>
                    <td><?= $row['angkatan']; ?></td>
                    <td><?= $row['kode_prodi']; ?></td>
                    <td>
                        <a href="edit_data.php?id=<?= $row['id']; ?>">Update</a>
                        <a href="proses_mhs.php?action=delete&id=<?= $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>