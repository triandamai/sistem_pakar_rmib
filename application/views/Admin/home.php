<div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Pengguna</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?= $jmlUser;?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">Ok</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Indikator</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?= $jmlIndikator;?></h1>
                                        </div>
                                        <?php if($jmlIndikator != 12){
                                            ?>
                                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light">
                                                    <i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">Invalid</span>
                                                </div>
                                        <?php }else{
                                            ?>
                                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light">
                                                    <i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">Valid</span>
                                                </div>
                                            <?php
                                        }?>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Sub-Indikator</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?= $jmlSubIndikator;?></h1>
                                        </div>
                                        <?php if($jmlSubIndikator != 216){
                                            ?>
                                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light">
                                                    <i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">Invalid</span>
                                                </div>
                                        <?php }else{
                                            ?>
                                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light">
                                                    <i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">Valid</span>
                                                </div>
                                            <?php
                                        }?>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Data Analisa</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?= $jmlAnalisa;?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light bg-success-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">Ok</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Hallo !</h5>
                                    <div class="card-body">
                                        <p>
                                            Selamat datang di aplikasi sistem pakar RMIB
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>