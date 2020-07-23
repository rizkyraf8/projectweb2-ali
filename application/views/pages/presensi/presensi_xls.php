<table border="1"  width="100%">
    <thead>
        <tr align="center">
            <td colspan="9"><h1>Report View Presensi Online</h1></td>
        </tr>
        <tr align="center" >
            <td width="30" bgcolor="#CCCCCC"><b>No</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>Tanggal</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>NIK</b></td>
            <td width="250" bgcolor="#CCCCCC"><b>Nama</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>IP Addr.</b></td>
            <td width="80" bgcolor="#CCCCCC"><b>Jam Masuk</b></td>
            <td width="80" bgcolor="#CCCCCC"><b>Login</b></td>
            <td width="80" bgcolor="#CCCCCC"><b>Jam Pulang</b></td>
            <td width="80" bgcolor="#CCCCCC"><b>Logout</b></td>
        </tr>
    </thead>     
    <tbody>
    <?php
        $no = 1;
        foreach($data as $data) {
    ?>
        <tr>
            <td align="center"><?= $no ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td align="center"><?= $data['nik'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td align="center"><?= $data['ip_addr'] ?></td>
            <td align="center"><?php echo "08:00:00" ?></td>
            <td align="center"><?= $data['jam_login'] ?></td>
            <td align="center"><?php echo "17:00:00" ?></td>
            <td align="center"><?= $data['jam_logout'] ?></td>
        </tr>
    <?php
        $no++;
        }
    ?>
    </tbody>
</table>