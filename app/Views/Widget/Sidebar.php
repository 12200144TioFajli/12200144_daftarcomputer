 <!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.png" alt="user-img" class="img-circle"><span class="hide-menu">Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url('/beranda')?>"><i class="ti-user"></i> Profilku </a></li>
                                <li><a href="<?=base_url('/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- DATA PERSONAL</li>
                        <li> <a class="waves-effect waves-dark" href="<?=base_url('/dashboard')?>"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Kategori</span></a>
                                <ul aria-expanded="false" class="collapse"><li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" "></i><span class="hide-menu">Pengguna</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url('/pengguna-list')?>">Daftar Pengguna</a></li>
                                        <li><a href="<?=base_url('/pengguna')?>">Tambah Pengguna</a></li>
                                    </ul>
                                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" "></i><span class="hide-menu">Computer</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url('/computer-list')?>">Daftar Computer</a></li>
                                        <li><a href="<?=base_url('/computer')?>">Tambah Computer</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?=base_url('/logout')?>"><i class="fa fa-power-off"></i> Keluar </></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->