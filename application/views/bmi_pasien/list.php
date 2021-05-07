<div class="container pt-2">
    <div class="col-md-12">
    <h3>Daftar BMI Pasien <a href="<?=base_url()?>" class="btn btn-primary">Daftar Pasien</a></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal Periksa</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status BMI</th>
                <th>Catatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor=1; foreach($bmi->result() as $bmi_pasien) { ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$bmi_pasien->tanggal?></td>
                    <td><?=$bmi_pasien->berat?></td>
                    <td><?=$bmi_pasien->tinggi?></td>
                    <td><?=$bmi_pasien->bmi?></td>
                    <td><?=$bmi_pasien->status_bmi?></td>
                    <td><?=$bmi_pasien->catatan?></td>
                    <td><a href="<?=base_url('index.php/bmi_pasien/view/'.$bmi_pasien->id)?>" class="btn btn-primary">View</a></td>
                </tr><?php $nomor++; }?>
            </tbody>
        </table>
    </div>
</div>