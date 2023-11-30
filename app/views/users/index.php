<h2>Data User</h2>

<div class="info">
        <h1>PERHATIAN!</h1>
        <p>Password WajiB Benar & Diingat!</p>
        <a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>
</div>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NOMOR HP</th>
            <th>KODE POS</th>
            <th>AKSI</th>
      </tr>

      <?php 
      $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td>
                        <a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a>
                        <a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a>
                  </td>
            </tr>
      <?php 
            $no++;
      } ?>

</table>