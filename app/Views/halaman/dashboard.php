<?=$this->extend('template_dashboard')?>

<?=$this->section('konten')?>

    <div class="card-body">

            <!-- CAROUSEL -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="container"> <img class="d-block img-fluid center" src="<?=base_url('/assets/images/big/11.jpg')?>" alt="First slide"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="container"><img class="d-block img-fluid center" src="<?=base_url('/assets/images/big/10.jpg')?>" alt="Second slide"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="container"><img class="d-block img-fluid center" src="<?=base_url('/assets/images/big/15.jpg')?>" alt="Third slide"></div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!-- End CAROUSEL -->                                              

            <div class="card-group mt-3">
            <div class="card ml-3">
                <img src="../assets/images/riview/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Spesifikasi</h5>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama       : Asus Zenbook 13 OLED-UX325</li>
                    <li class="list-group-item">Warna      : Pine Grey & Lilac Mist </li>
                    <li class="list-group-item">RAM        : 16GB LPDDR4X on board </li>
                    <li class="list-group-item"> Penyimpan : 512GB M.2 NVMe™ PCIe® 3.0 SSD </li>
                    <li class="list-group-item"> Processor : Intel® Core™ i7-1165G7 </li>
                    <li class="list-group-item">Harga      : Rp 19.299.000 </li>                   
                    </ul>
                </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <a href="<?=base_url('/riview')?>" class="text-primary m-l-5"><button>OVERVIEW</button></a>
                        </div>
                    </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="../assets/images/riview/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Spesifikasi</h5>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama      : MSI GS76 Stealth 11UH</li>
                    <li class="list-group-item">Warna     : Core Black</li>
                    <li class="list-group-item">RAM       : 32GB DDR4 3200MHZ</li>
                    <li class="list-group-item">Penyimpan : 2TB NVMe PCIe SSD</li>
                    <li class="list-group-item">Processor : Intel® Core™ i9 generasi ke-11</li>
                    <li class="list-group-item">Harga     : Rp 53.999.000</li>   
                    </ul>
                </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <a href="<?=base_url('/riview2')?>" class="text-primary m-l-5"><button>OVERVIEW</button></a>
                        </div>
                    </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="../assets/images/riview/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center">Spesifikasi</h5>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama      : OMEN by HP Gaming Laptop 16-c0099AX </li>
                    <li class="list-group-item">Warna     : Mica silver cover and base, mica silver aluminum keyboard frame</li>
                    <li class="list-group-item">RAM       : 16 GB DDR4-3200 MHz RAM (2 x 8 GB)></li>
                    <li class="list-group-item">Penyimpan : 512 GB PCIe® NVMe™ TLC M.2 SSD</li>
                    <li class="list-group-item">Processor : AMD Ryzen™ 9</li>
                    <li class="list-group-item">Harga     : Rp 24.999.000</li>   
                </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <a href="<?=base_url('/riview3')?>" class="text-primary m-l-5"><button>OVERVIEW</button></a>
                        </div>
                    </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>


<?=$this->endSection()?>
