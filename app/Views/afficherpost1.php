<!doctype html>
<html lang="en">

    <head>
        
    <meta charset="utf-8" />
        <title>Dashboard | Minible - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url('assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url('assets/css/app.min.css')?>" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Bootstrap Css -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo base_url('assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo base_url('assets/css/app.min.css')?>" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    </head>

    
    <body >

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
   
        <!-- Begin page -->
        <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">News</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('rh/offre')?>">News</a></li>
                            <li class="breadcrumb-item active">forms</li>
                        </ol>
                    </div>
                 </div>
            </div>
        </div>
       
       
                <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <div class="dropdown">
                                <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">All posts<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                     
                                </div>
                            </div>
                        </div>
                       
                        <?php foreach($offre as $users ): ?>
                                    <div id="<?php echo $users['id_offre']; ?>">
                                    <h4 class="card-title mb-4"> <span class="text-primary">Recent posts </span></h4>
            <div data-simplebar style="max-height: 336px;">
                                    <div class="table-responsive">
                           
                               
                          
                                <table class="table table-borderless table-centered table-nowrap">
                                    <tbody>
                                    
                                        <tr>
                                            
                                            <tr>
                                                <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"> title:</h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> <?php echo $users['titre']; ?></p>
                        </td>
                                                <td><a href="rh/formulaire">open post</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"> date :</h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> <?php echo $users['duree']; ?></p>
                        </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                            <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"> description :</h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> <?php echo $users['description']; ?></p>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                            <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"> domaine :</h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> <?php echo $users['domaine']; ?></p>
                                                </td>   <td></td> 
                                            </tr>
                                        </tr>
                                        <?php endforeach; ?> 
                                    </tbody>
                                </table>
                               
                            </div> 
                            <!-- enbd table-responsive-->
                           
                        </div> <!-- data-sidebar-->
                    </div><!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
                                   
                            </div>                          
                           
</div></div>
</div>
                            </div>
<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/node-waves/waves.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>

        <!-- apexcharts -->
        <script src="<?php echo base_url('assets/libs/apexcharts/apexcharts.min.js')?>"></script>

        <script src="<?php echo base_url('assets/js/pages/dashboard.init.js')?>"></script>

        <script src="<?php echo base_url('assets/js/app.js')?>"></script>

<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/node-waves/waves.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>
<!-- Required datatable js -->
<script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- Responsive examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')?>"></script>
<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js')?>"></script>
<script src="<?php echo base_url('assets/js/app.js')?>"></script> 
<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/node-waves/waves.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>

        <script src="<?php echo base_url('assets/js/app.js')?>"></script>
</body>
</html>