<?php

include 'database.php';

$result = mysqli_query($connect, 'SELECT * FROM pemesanan');

//$result = mysqli_fetch_array($result);
//var_dump ($result);
?>
<table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tgl Masuk</th>
                <th>Tgl Keluar</th>
                <th>Nomer</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Gambar</th>
            </tr>
        </thead>
        </tbody>
        <?php while ($result = mysqli_fetch_array($db)) { ?>
            <tr>
                <td><?=$result['id']?></td>
                <td><?=$result['tgl_masuk']?></td>
                <td><?=$result['tgl_keluar']?></td>
                <td><?=$result['no.hp']?></td>
                <td><?=$result['alamat']?></td>
                <td><?=$result['id_kategori']?></td>
                <td><?=$result['gambar']?></td>
            </tr>
        <?php  } ?>
            </tbody>
        </table>