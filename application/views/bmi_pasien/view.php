<div class="container-fluid pt-2">
    <h2>Data Pasien #ID : <?=$pasien->id?></h2>
    <div>
        <table class="table table-striped">
            <tr>
                <td>Kode Pasien</td>
                <td>:</td>
                <td><?=$pasien->kode?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$pasien->nama?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?=$pasien->gender?></td>
            </tr>
            <tr>
                <td>Tempat, Tgl Lahir</td>
                <td>:</td>
                <td><?=$pasien->tmp_lahir?>, <?=$pasien->tgl_lahir?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?=$pasien->email?></td>
            </tr>
        </table>
    </div>

    <h2>Data BMI Pasien #ID : <?=$bmi->id?></h2>
    <div>
        <table class="table table-striped">
            <tr>
                <td>Tanggal Periksa</td>
                <td>:</td>
                <td><?=$bmi->tanggal?></td>
            </tr>
            <tr>
                <td>Berat</td>
                <td>:</td>
                <td><?=$bmi->berat?></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><?=$bmi->tinggi?></td>
            </tr>
            <tr>
                <td>BMI</td>
                <td>:</td>
                <td><?=$bmi->bmi?></td>
            </tr>
            <tr>
                <td>Status BMI</td>
                <td>:</td>
                <td><?=$bmi->status_bmi?></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td><?=$bmi->catatan?></td>
            </tr>
        </table>
        <a href="<?=base_url('index.php/bmi_pasien/list')?>" class="btn btn-primary">Kembali</a>
    </div>
</div>