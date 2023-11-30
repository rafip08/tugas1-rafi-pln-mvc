<h2>Data Golongan</h2>

<div class="info">
        <h1>Golongan Listrik Pelanggan Perusahaan Listrik Negara (PLN)</h1>
        <p>Golongan PLN merujuk pada kategori atau kelompok tertentu yang digunakan untuk mengklasifikasikan pemakaian listrik pelanggan berdasarkan karakteristik atau kebutuhan tertentu. Klasifikasi golongan ini penting untuk menentukan tarif atau biaya listrik yang dikenakan kepada pelanggan.</p>
        <a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>
</div>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>KODE GOLONGAN</th>
                  <th>NAMA GOLONGAN</th>
                  <th>AKSI</th>
            </tr>
      </thead>
      <tbody>
            <?php 
            $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_kode']; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td>
                              <a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a>
                              <a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                  </tr>
            <?php 
                  $no++;
            } ?>
      </tbody>
</table>