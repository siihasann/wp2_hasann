<html>

<head>
    <title>Form Input Data Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table border="0" style="margin-left : auto; margin-right:auto; border: 4px solid black; background-color: springgreen; font-family: courier new">;
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                        <?= form_error('NIS', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                        <?= form_error('Kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tglahir" id="tglahir">
                        <?= form_error('Tanggal Lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="templahir" id="templahir">
                        <?= form_error('Tempat Lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('Alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="laki-laki">Laki-Laki
                        <input type="radio" name="gender" value="perempuan">Perempuan

                        <?= form_error('Tempat Lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td><select name="agama">
                            <option value="pilih">--Agama--
                            <option value="islam">Islam
                            <option value="kristen">Kristen
                            <option value="katolik">Katolik
                            <option value="budha">Budha
                            <option value="hindu">Hindu
                            <option value="protestan">Protestan
                            <option value="konghucu">Konghucu
                        </select></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>