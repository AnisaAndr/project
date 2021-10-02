<?php
class Admin extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataadmin = mysqli_query($this->koneksi, "select * from admin");
        return $dataadmin;
    }

    // Menambah Data
    public function create($nama, $alamat, $wisata)
    {
        mysqli_query(
            $this->koneksi,
            "insert into admin values(null,'$nama','$alamat', '$wisata')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $dataadmin = mysqli_query(
            $this->koneksi,
            "select * from admin where id='$id'"
        );
        return $dataadmin;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataadmin = mysqli_query(
            $this->koneksi,
            "select * from admin where id='$id'"
        );
        return $dataadmin;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $wisata)
    {
        mysqli_query(
            $this->koneksi,
            "update admin set nama='$nama', alamat='$alamat', wisata='$wisata' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from admin where id='$id'");
    }
}
?>