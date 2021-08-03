<?php
// convert file ke bentuk excel
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap.xls");
?>

<h3>Data Rekap</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>Tanggal Nota</th>
        <th>No Hp Customer</th>
        <th>Catatan</th>
        <th>Kode Nota</th>
        <th>Total Harga</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dbbajawacoffe");
    $data = mysqli_query($conn, "SELECT * FROM tb_nota WHERE statusOrder = 'orderDiterima' ");
    $no = 0;
    while ($dt = mysqli_fetch_array($data)) {
        $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $dt['namaCustomer'] ?></td>
            <td><?php echo $dt['tanggalNota'] ?></td>
            <td><?php echo $dt['nohpCustomer'] ?></td>
            <td><?php echo $dt['note'] ?></td>
            <td><?php echo $dt['kodeNota'] ?></td>
            <td><?php echo $dt['totalHarga'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>