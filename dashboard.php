<?=$this->extend('template_dashboard')?>

<?=$this->section('konten')?>

    <div class="card-body">    

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?=base_url('/assets/images/news/slide11.png')?>" class="d-block w-100 h-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?=base_url('/assets/images/news/slide3.jpg')?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?=base_url('/assets/images/news/slide4.jpg')?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <li class="carousel-control-prev" type="" data-bs-target="carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </li>
                <li class="carousel-control-next" type="" data-bs-target="carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </li>
            </div>  


            <div class="card-group mt-3">
            <div class="card ml-3">
                <img src="../assets/images/users/22.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Card title</h5>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Merek laptop : <?=$nama_merk?></li>
                        <li class="list-group-item">Warna yang tersedia : <?=$warna?></li>
                        <li class="list-group-item">Spesifikasi laptop : <?=$ram?></li>
                        <li class="list-group-item"> Stok yang tersedia : <?=$processor?></li>
                        <li class="list-group-item">Harga laptop :  <?=$harga?></li>                   
                    </ul>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="../assets/images/users/33.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Card title</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Merek laptop : <?=$nama_merk?></li>
                        <li class="list-group-item">Warna yang tersedia : <?=$warna?></li>
                        <li class="list-group-item">Spesifikasi laptop : <?=$ram?></li>
                        <li class="list-group-item"> Stok yang tersedia : <?=$processor?></li>
                        <li class="list-group-item">Harga laptop :  <?=$harga?></li>
                    </ul>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="../assets/images/users/44.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Card title</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Merek laptop : <?=$nama_merk?></li>
                        <li class="list-group-item">Warna yang tersedia : <?=$warna?></li>
                        <li class="list-group-item">Spesifikasi laptop : <?=$ram?></li>
                        <li class="list-group-item"> Stok yang tersedia : <?=$processor?></li>
                        <li class="list-group-item">Harga laptop :  <?=$harga?></li>
                    </ul>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>


<?=$this->endSection()?>
