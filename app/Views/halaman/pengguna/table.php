<?=$this->extend('template_dashboard')?>

<?=$this->section('konten')?>
    <div class="container">
        <div class="card">
            <div class="card_header">
                <h2 class="card-title">Daftar Pelanggan</h2>
            </div>
            <div class="card-body">

                <?php if($error):?>
                    <div class="alert alert-danger">
                        <?=$error?>
                    </div>
                 <?php endif;?>   

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NAMA</th>
                            <th>PASSWORD</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        <?php foreach($DB as $d): ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$d->nama?></td>
                                <td><?=$d->password?></td>
                                <td>
                                    <a  href="<?=base_url("/pengguna/{$d->id}")?>"
                                        class="btn btn-sm btn-warning"> Edit </a>
                                        
                                    <form method="post" 
                                         onsubmit="return confirm('Apakah anda yakin akan hapus data ini?')"
                                         action='/pengguna'>
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="id" value="<?=$d->id?>" />
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?=$this->endSection()?>