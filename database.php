<?php
class Database{
    public $host = "localhost", $user = "root", $pass = "", $db = "project";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
        $this->host,
        $this->user,
        $this->pass,
        $this->db
        );
        if($this->koneksi){
            //echo "berhasil";
        }else{
            echo "Koneksi Database Gagal";
        }
    }
}

include 'admin.php';
include 'komentar.php';


//koneksi DB
$db = new Database();
?>