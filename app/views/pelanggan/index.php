<h2>Data Pelanggan</h2>

<div class="info">
        <h1>Data Pelanggan Perusahaan Listrik Negara (PLN)</h1>
        <p>Data pelanggan PLN (Perusahaan Listrik Negara) adalah kumpulan informasi yang terkait dengan para pelanggan layanan listrik yang diberikan oleh PLN. Data pelanggan ini mencakup berbagai detail yang diperlukan untuk mengelola dan menyediakan layanan listrik dengan baik.</p>
        <a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>
    </div>

<table id="dtb">
    <thead>
        <tr>
            <th>NO</th>
            <th>GOLONGAN</th>
            <th>NOMOR PELANGGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NOMOR HP</th>
            <th>NOMOR KTP</th>
            <th>NOMOR SERI</th>
            <th>NOMOR METERAN</th>
            <th>STATUS AKTIF</th>
            <th>PENGINPUT</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($data['rows'] as $row) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['gol_nama']; ?></td>
                    <td><?php echo $row['pel_no']; ?></td>
                    <td><?php echo $row['pel_nama']; ?></td>
                    <td><?php echo $row['pel_alamat']; ?></td>
                    <td><?php echo $row['pel_HP']; ?></td>
                    <td><?php echo $row['pel_ktp']; ?></td>
                    <td><?php echo $row['pel_seri']; ?></td>
                    <td><?php echo $row['pel_meteran']; ?></td>
                    <td><?php echo $row['pel_aktif']; ?></td>
                    <td><?php echo $row['user_nama']; ?></td>
                    <td>
                        <a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a>
                        <a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
        <?php 
            $no++;
        } ?>
    </tbody>
</table>