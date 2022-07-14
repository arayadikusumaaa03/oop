<?php

class Database
{
    var $host = 'localhost';
    var $username = 'root';
    var $password = '';
    var $database = 'nilaimahasiswa';
    var $koneksi = '';

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (mysqli_connect_errno()) {
            echo "Koneksi ke database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM mhs");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_data($nim, $nama, $angkatan, $kode_prodi)
    {
        mysqli_query($this->koneksi, "INSERT INTO mhs (nim, nama_mhs, angkatan, kode_prodi) VALUES ('$nim', '$nama', '$angkatan', '$kode_prodi')");
    }

    function get_by_id($id)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM mhs WHERE id = '$id'");
        return $query->fetch_assoc();
    }

    function update_data($id, $nim, $nama, $angkatan, $kode_prodi)
    {
        mysqli_query($this->koneksi, "UPDATE mhs SET nim = '$nim', nama_mhs = '$nama', angkatan = '$angkatan', kode_prodi = '$kode_prodi' WHERE id = '$id'");
    }

    function delete_data($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM mhs WHERE id = '$id'");
    }
}
