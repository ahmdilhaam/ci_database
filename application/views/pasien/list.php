<div class="container pt-2">
    <div class="col-md-12">
    <h3>Daftar Pasien <a href="<?=base_url('index.php/bmi_pasien/list')?>" class="btn btn-primary">Daftar BMI Pasien</a></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor=1; foreach($pasien->result() as $pasien) { ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$pasien->kode?></td>
                    <td><?=$pasien->nama?></td>
                    <td><?=$pasien->gender?></td>
                    <td><?=$pasien->tmp_lahir?></td>
                    <td><?=$pasien->tgl_lahir?></td>
                    <td><?=$pasien->email?></td>
                    <td><a href="<?=base_url('index.php/pasien/view/'.$pasien->id)?>" class="btn btn-primary">View</a></td>
                </tr><?php $nomor++; }?>
            </tbody>
        </table>
    </div>
</div>