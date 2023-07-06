<?= $this->include('template/header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Warga</th>
            <th>NIK</th>
            <th>Tanggal</th>
            <th>Jumlah Kas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1; // Variabel untuk penomoran
        if ($iuran) : foreach ($iuran as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="5">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>