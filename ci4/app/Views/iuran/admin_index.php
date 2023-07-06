<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th> <!-- Ubah label kolom menjadi "No" -->
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $counter = 1; // Inisialisasi variabel counter
        if ($iuran) :
            foreach ($iuran as $row) :
        ?>
                <tr>
                    <td><?= $counter++; ?></td> <!-- Tambahkan penomoran urut menggunakan variabel counter -->
                    <td><?= $row['keterangan']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td>
                        <a class="btn" href="<?= base_url('/admin/iuran/edit/' . $row['id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/iuran/delete/' . $row['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            endforeach;
        else :
            ?>
            <tr>
                <td colspan="8">Belum ada data.</td>
            </tr>
        <?php
        endif;
        ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>