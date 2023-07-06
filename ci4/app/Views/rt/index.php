<?= $this->include('template/header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Rumah</th>
            <th>ID</th>
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
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>