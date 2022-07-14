<?php
include 'config.php';
$db = new Database();

$action = $_GET['action'];
if ($action == 'add') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $angkatan = $_POST['angkatan'];
    $kode_prodi = $_POST['kode_prodi'];

    $db->tambah_data($nim, $nama, $angkatan, $kode_prodi);
    header('location: tampil_data.php');
} elseif ($action == 'update') {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $angkatan = $_POST['angkatan'];
    $kode_prodi = $_POST['kode_prodi'];

    $db->update_data($id, $nim, $nama, $angkatan, $kode_prodi);
    header('location: tampil_data.php');
} elseif ($action == 'delete') {
    $id = $_GET['id'];
    $db->delete_data($id);
    header('location: tampil_data.php');
} else {
    header('location: tampil_data.php');
}
