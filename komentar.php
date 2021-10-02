<?php
class Komentar extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datakomentar = mysqli_query($this->koneksi, "SELECT komentar.*, admin.wisata as nama_wisata
                                    FROM komentar JOIN admin
                                    ON komentar.id_admin = admin.id ORDER BY komentar.id DESC"
        );
        return $datakomentar;
    }

    // Menambah Data
    public function create($nama, $komen, $id_admin)
    {
        mysqli_query(
            $this->koneksi,
            "insert into komentar values(null,'$nama','$komen','$id_admin')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datakomentar = mysqli_query(
            $this->koneksi,
            "SELECT komentar.*, admin.wisata as nama_wisata
            FROM komentar JOIN admin
            ON komentar.id_admin = admin.id where komentar.id='$id'"
        );
        return $datakomentar;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datakomentar = mysqli_query(
            $this->koneksi,
            "select * from komentar where id='$id'"
        );
        return $datakomentar;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $komen, $id_admin)
    {
        mysqli_query(
            $this->koneksi,
            "update komentar set nama='$nama', komentar='$komen', id_admin='$id_admin' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from komentar where id='$id'");
    }
}
?>