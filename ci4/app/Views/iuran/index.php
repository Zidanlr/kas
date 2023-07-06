<?= $this->include('template/header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th> <!-- Ubah label kolom menjadi "No" -->
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
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
                </tr>
            <?php
            endforeach;
        else :
            ?>
            <tr>
                <td colspan="5">Belum ada data.</td>
            </tr>
        <?php
        endif;
        ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>