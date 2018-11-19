 <?php include('header.php');?>
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>Төрсний гэрчилгээ</b>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                       
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /><?php echo $_SESSION['id'];?></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    
                                    <li role="separator" class="divider"></li>
                                
                                    <li><a href="../login.php?logout"><i class="fa fa-power-off"></i> Гарах</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li class="nav-devider"></li>
                     <li>
                      <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-bullseye"></i><span class="hide-menu">Бүртгэл</span>
                      </a>
                            <ul aria-expanded="true" class="collapse">
                                <li><a href="addBirthHospital.php">Төрөх бүртгэл</a></li>
                                <li><a href="listBirthHospital.php">Төрөх эмнэлэгийн жагсаалт</a></li>
                                <li><a href="registerForHospital.php">Регистерийн дугаар</a></li>
                                <li><a href="listRegisterAndHospital.php">Төрөх эмнэлэгийн болон регистерийн дугаар</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>