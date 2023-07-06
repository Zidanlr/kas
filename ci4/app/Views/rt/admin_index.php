<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Rumah</th>
            <th>ID</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1; // Variabel untuk penomoran urut
        if ($rt) : foreach ($rt as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_rumah']; ?></td>
                    <td><?= $row['warga_id']; ?></td>
                    <td>
                        <a class="btn" href="<?= base_url('/admin/data_warga/edit/' . $row['warga_id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/data_warga/delete/' . $row['warga_id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="7">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>