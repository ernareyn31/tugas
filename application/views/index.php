<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Merek</th>
            <th scope="col">Model</th>
            <th scope="col">Warna</th>
            <th scope="col">Serial Number</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Status</th>
            <th scope="col">Lokasi</th>
            <th scope="col"><a href="<?= site_url('Inventaris/tambah') ?>">Tambah Data</a></th>
        </tr>
        <?php $i = 1;
        foreach ($barang as $row) { ?>
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td scope="row"><img src="<?= base_url('assets/img/barang/') . $row->gambar ?>" width="50px"></td>
                <td scope="row"><?= $row->kode ?></td>
                <td scope="row"><?= $row->jenis ?></td>
                <td scope="row"><?= $row->merek ?></td>
                <td scope="row"><?= $row->model ?></td>
                <td scope="row"><?= $row->warna ?></td>
                <td scope="row"><?= $row->serial ?></td>
                <td scope="row"><?= $row->deskripsi ?></td>
                <td scope="row"><?= $row->status ?></td>
                <td scope="row"><?= $row->lokasi ?></td>
                <td scope="row">
                    <a href="<?= site_url('Inventaris/edit/') . $row->id ?>">Edit</a>
                    <a href="<?= site_url('Inventaris/Hapus/') . $row->id ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>