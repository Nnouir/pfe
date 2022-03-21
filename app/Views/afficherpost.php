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
       <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
  <a class="navbar-brand" href="#"> <span class="text-muted">All posts<i class="mdi mdi-chevron-down ms-1"></i></span></a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading1">First</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading2">Second</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <h4 id="scrollspyHeading1"></h4>
  <p><div class="row">
 
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                               
                  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                    <div class="card-body">
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
                                   
                            </div>                          </p>
 
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