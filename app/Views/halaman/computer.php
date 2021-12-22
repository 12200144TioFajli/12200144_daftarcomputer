<?=$this->extend('template_dashboard')?>
<?php

use Config\Services;

$vd = $vd ?: Services::validation();

?>
<?=$this->section('konten')?>
    <div class="container">

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form computer</h3>
                </div>
                <div class="card-body">


                 <?php if($error):?>
                        <div class="alert alert-danger">
                            <?=$error?>
                        </div>
                    <?php endif;?>

                    <form  method="post" action="/computer">
                        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />

                        <?php if(isset($data['id'])): ?>
                            <input type="hidden" name="_method" value="patch" />
                        <?php endif;?>

                        <div> 
                            <label for='txtnama' class="form-label">Nama Merek</label>
                            <input id='txtnama' type="text" name="nama" value="<?=$data['nama_merek'] ?? ''?>" class="form-control" />                      
                        </div>
                        <?php
                            if( $vd->getError('nama') ){?>
                                <div class="alert alert-danger">
                                    <?=$vd->getError('nama')?>
                                </div>
                        <?php }
                        ?>

                        <div> 
                            <label for='txtnama' class="form-label">Warna</label>
                            <input id='txtnama' type="text" name="warna" value="<?=$data['warna'] ?? ''?>" class="form-control" />
                        </div>
                        <?php
                            if( $vd->getError('warna') ){?>
                                <div class="alert alert-danger">
                                    <?=$vd->getError('warna')?>
                                </div>
                        <?php }
                        ?>
                       
                        <div> 
                            <label for='txtnama' class="form-label">ram</label>
                            <input id='txtnama' type="text" name="ram" value="<?=$data['ram'] ?? ''?>" class="form-control" />
                        </div>
                        <?php
                            if( $vd->getError('ram') ){?>
                                <div class="alert alert-danger">
                                    <?=$vd->getError('ram')?>
                                </div>
                        <?php }
                        ?>

                        
                        <div> 
                            <label for='txtnama' class="form-label">processor</label>
                            <input id='txtnama' type="text" name="processor" value="<?=$data['processor'] ?? ''?>" class="form-control" />
                        </div>
                        <?php
                            if( $vd->getError('processor') ){?>
                                <div class="alert alert-danger">
                                    <?=$vd->getError('processor')?>
                                </div>
                        <?php }
                        ?>

                        <div> 
                            <label for='txtnama' class="form-label">harga</label>
                            <input id='txtnama' type="text" name="harga" value="<?=$data['harga'] ?? ''?>" class="form-control" />
                        </div>
                        <?php
                            if( $vd->getError('harga') ){?>
                                <div class="alert alert-danger">
                                    <?=$vd->getError('harga')?>
                                </div>
                        <?php }
                        ?>

                        <br/>
                        <button class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?=$this->endSection()?>