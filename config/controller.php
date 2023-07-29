<?php

// fungsi menampilkan
function select($query)
{
    // panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// fungsi menambahkan data penjualan
function create_penjualan($post)
{
    global $db;

    $penjualan       = strip_tags($post['penjualan']);

    // query tambah data
    $query = "INSERT INTO tb_penjualan VALUES(null, '$penjualan')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi mengubah data penjualan
function update_penjualan($post)
{
    global $db;

    $id_penjualan   = $post['id_penjualan'];
    $penjualan      = strip_tags($post['penjualan']);

    // query ubah data
    $query = "UPDATE tb_penjualan SET penjualan = '$penjualan' WHERE id_penjualan = $id_penjualan";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data penjualan
function delete_penjualan($id_penjualan)
{
    global $db;

    // query hapus data penjualan
    $query = "DELETE FROM tb_penjualan WHERE id_penjualan = $id_penjualan";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menambah data pelanggan
function create_pelanggan($post)
{
    global $db;

    $nama_pelanggan       = strip_tags($post['nama_pelanggan']);
    $alamat               = strip_tags($post['alamat']);

    // query tambah data
    $query = "INSERT INTO tb_pelanggan VALUES(null, '$nama_pelanggan', '$alamat')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi mengubah data pelanggan
function update_pelanggan($post)
{
    global $db;

    $id_pelanggan         = strip_tags($post['id_pelanggan']);
    $nama_pelanggan       = strip_tags($post['nama_pelanggan']);
    $alamat               = strip_tags($post['alamat']);

    // query ubah data
    $query = "UPDATE tb_pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat' WHERE id_pelanggan = $id_pelanggan";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data pelanggan
function delete_pelanggan($id_pelanggan)
{
    global $db;

    // query hapus data pelanggan
    $query = "DELETE FROM tb_pelanggan WHERE id_pelanggan = $id_pelanggan";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi tambah akun
function create_akun($post)
{
    global $db;

    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level      = strip_tags($post['level']);

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // query tambah data
    $query = "INSERT INTO tb_akun VALUES(null, '$nama', '$username', '$email', '$password', '$level')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi ubah akun
function update_akun($post)
{
    global $db;

    $id_akun    = strip_tags($post['id_akun']);
    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level      = strip_tags($post['level']);

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // query ubah data
    $query = "UPDATE tb_akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id_akun";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data akun
function delete_akun($id_akun)
{
    global $db;

    // query hapus data akun
    $query = "DELETE FROM tb_akun WHERE id_akun = $id_akun";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menambah data promosi
function create_promosi($post)
{
    global $db;

    $periklanan             = strip_tags($post['periklanan']);
    $pemasaran_langsung     = strip_tags($post['pemasaran_langsung']);
    $penjualan_personal     = strip_tags($post['penjualan_personal']);
    // query tambah data
    $query = "INSERT INTO tb_promosi VALUES(null, '$periklanan', '$pemasaran_langsung', '$penjualan_personal')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi mengubah data promosi
function update_promosi($post)
{
    global $db;

    $id_promosi         = strip_tags($post['id_promosi']);
    $periklanan             = strip_tags($post['periklanan']);
    $pemasaran_langsung     = strip_tags($post['pemasaran_langsung']);
    $penjualan_personal     = strip_tags($post['penjualan_personal']);

    // query ubah data
    $query = "UPDATE tb_Promosi SET periklanan = '$periklanan', pemasaran_langsung = '$pemasaran_langsung', penjualan_personal = '$penjualan_personal' WHERE id_promosi = $id_promosi";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data promosi
function delete_promosi($id_promosi)
{
    global $db;

    // query hapus data promosi
    $query = "DELETE FROM tb_promosi WHERE id_promosi = $id_promosi";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menambah data kritik saran
function create_kritiksaran($post)
{
    global $db;

    $id_pelanggan   = strip_tags($post['id_pelanggan']);
    $kritik         = strip_tags($post['kritik']);
    $saran          = strip_tags($post['saran']);
    // query tambah data
    $query = "INSERT INTO tb_kritiksaran VALUES(null, '$id_pelanggan', '$kritik', '$saran')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}