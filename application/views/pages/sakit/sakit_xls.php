<table border="1"  width="100%">
    <thead>
        <tr align="center">
            <td colspan="5"><h1>Report View Sakit Online</h1></td>
        </tr>
        <tr align="center" >
            <td width="30" bgcolor="#CCCCCC"><b>No</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>Tanggal Sakit</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>NIK</b></td>
            <td width="250" bgcolor="#CCCCCC"><b>Nama</b></td>
            <td width="300" bgcolor="#CCCCCC"><b>Alasan</b></td>
        </tr>
    </thead>     
    <tbody>
    <?php
        $no = 1;
        foreach($data as $data) {
    ?>
        <tr>
            <td align="center"><?= $no ?></td>
            <td><?= $data['start_date'] ?></td>
            <td align="center"><?= $data['nik'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alasan'] ?></td>
        </tr>
    <?php
        $no++;
        }
    ?>
    </tbody>
</table>