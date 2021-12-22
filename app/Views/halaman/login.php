<?=$this->extend('dasar_tampilan');?>

<?=$this->section('WebProgramming')?>
<?php

use Config\Services;
$vd = $vd ?? Services::validation();
?>
  <!-- begin::Head -->
  <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>Daftar Computer | Login</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="https://duniadesa.com/metronic/assets/css/pages/login/login-6.css" rel="stylesheet" type="text/css" />
        

        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="https://duniadesa.com/metronic/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="https://duniadesa.com/metronic/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="https://duniadesa.com/img/widget/logo3.png" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
   <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

                    <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                        <div class="kt-login__wrapper">
                            <div class="kt-login__container">
                                <div class="kt-login__body">
                                    <div class="kt-login__logo">
                                        <a href="#">
                                            <img src="https://duniadesa.com/img/widget/logo3.png" style="width: 100px;">
                                        </a>
                                    </div>
                                    <div class="kt-login__signin">
                                        <div class="kt-login__head">
                                            <h3 class="kt-login__title">Login</h3>
                                            <p>Daftar Computer, silakan login</p>
                                        </div>
                                        <div class="kt-login__form">
                                             <form class="kt-form" method='POST' action="<?=base_url('/login')?>" id="kt_login_form">
                                        <input type="hidden" name="_token" value="LWllxpnmdlhJB6DTbtARrKO7ToJxfnmq7aXAeRqq">                                                 
                                        <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Email" name='email' value="" autocomplete="email" autofocus">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" type="password" placeholder="Password" name='sandi' autocomplete="current-password">
                                                </div>
                                                
                                                <div class="kt-login__actions">
                                                    <button type="submit"  class="btn btn-brand btn-pill btn-elevate">Masuk</button>

                                                    <button type="button" onclick="window.location='https://duniadesa.com'"  class="btn btn-brand btn-pill btn-success">Kembali</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(https://duniadesa.com/img/widget/background-login.png); height: 200%; background-color: #58AD5C;">
                       
                    </div>
                </div>
            </div>
        </div>
    </body>

<?=$this->endSection()?>
