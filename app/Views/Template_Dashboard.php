<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?=base_url('/assets/node_modules/morrisjs/morris.css')?>" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?=base_url('/assets/node_modules/toast-master/css/jquery.toast.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('/dist/css/style.min.css')?>" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?=base_url('/dist/css/pages/dashboard1.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sisfo Perpustakaan</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
       <?=$this->include('widget/topbar')?>
       <?=$this->include('widget/sidebar')?>
      
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
              <?=$this->renderSection('konten')?>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('/assets/node_modules/jquery/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?=base_url('/assets/node_modules/popper/popper.min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url('/dist/js/perfect-scrollbar.jquery.min.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('dist/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('dist/js/sidebarmenu.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('dist/js/custom.min.js')?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?=base_url('/assets/node_modules/raphael/raphael-min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/morrisjs/morris.min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')?>"></script>
    <!-- Popup message jquery -->
    <script src="<?=base_url('/assets/node_modules/toast-master/js/jquery.toast.js')?>"></script>
    <!-- Chart JS -->
    <script src="<?=base_url('/dist/js/dashboard1.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/toast-master/js/jquery.toast.js')?>"></script>
</body>

</html>