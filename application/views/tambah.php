<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="<?= site_url('Inventaris/tambah_data') ?>" method="POST" enctype="multipart/form-data">
        <div>
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar">
        </div>
        <div>
            <label for="kode">Kode Barang</label>
            <input type="text" name="kode" id="kode" required>
        </div>
        <div>
            <label for="jenis">Jenis Barang</label>
            <input type="text" name="jenis" id="jenis" required>
        </div>
        <div>
            <label for="merek">Merek</label>
            <input type="text" name="merek" id="merek" required>
        </div>
        <div>
            <label for="warna">Warna</label>
            <input type="text" name="warna" id="warna" required>
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text" name="model" id="model" required>
        </div>
        <div>
            <label for="serial">Serial Number</label>
            <input type="text" name="serial" id="serial" required>
        </div>
        <div>
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" required>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" id="status" required>
        </div>
        <div>
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" required>
        </div>
        <button type="submit">Tambah</button>
        <a href="<?= site_url('Inventaris') ?>">Kembali</a>
    </form>

</body>

</html>