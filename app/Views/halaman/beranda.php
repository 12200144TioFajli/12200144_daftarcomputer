<?=$this->extend('template_dashboard')?>

<?=$this->section('konten')?>
    <div class="card-body"> 
    <div class="card" style="width: 18rem;">    
            <div class="">
                <h1 class=" "> </h1>
                <h3 class="card-title text-center">DATA USER</h3>
            </div>
            <div class="card" style="width: 18rem;">
            <img src="../assets/images/users/1.png" class="card-img-top" alt="...">
            <div class="">
                <ul class="list-group list-group-flush">  
                    <h1 class=" "> </h1>
                    <h5 class="card-title text-center">Halo ini akun login anda</h5>                    
                </ul>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Email yang diisikan : <?=$email?></li>
                    <li class="list-group-item">Password : <?=$sandi?></li>
                </ul>
            </div>    
        </div>
    </div>

<?=$this->endSection()?>