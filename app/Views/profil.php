<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
        <title>Datatables | Minible - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

        <!-- DataTables -->
        <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />     

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url('assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url('assets/css/app.min.css')?>" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

<!-- Bootstrap Css -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo base_url('assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo base_url('assets/css/app.min.css" id="app-style')?>" rel="stylesheet" type="text/css" />


    </head>

<body>
    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
     <!-- Begin page -->
       <div id="layout-wrapper">
       <?php echo view('header');?>
       <?php echo view('menu');?>    <!-- Sidebar -->
       </div>
       </div>
       <form method="post" action="<?php echo base_url('rh/envoye')?>" >
<div class="main-content">
   <div class="page-content">
       <div class="container-fluid">
       <div class="row">
           <div class="col-12">
               <div class="page-title-box d-flex align-items-center justify-content-between">
                   <h4 class="mb-0">profil</h4>
                  
                </div>
           </div>
       </div>
       <!-- end page title -->




               <div class="row">         
                           <div class="col-12">
                               <div class="card">
                                   <div class="card-body">
                                       <div class="mb-3 row">
                                       <?php if(isset($erros)) echo $erros?>
                                           <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                           <div class="col-md-10">
                                               <input class="form-control" type="email"  id="useremail"name="email"value="<?php echo session()->get('email'); ?>">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                       
                                           <label for="example-search-input" class="col-md-2 col-form-label">Old Password</label>
                                           <div class="col-md-10">
                                               <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                          
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="example-search-input" class="col-md-2 col-form-label">New Password</label>
                                           <div class="col-md-10">
                                               <input type="password" name="newpassword" class="form-control" id="userpassword" placeholder="Enter password">
                                          
                                           </div>
                                       </div>
                                                                                                    
                                       
                                       <div class="mb-3 row">
                                           <label for="example-search-input" class="col-md-2 col-form-label">Confirm Password</label>
                                           <div class="col-md-10">
                                               <input type="password" name="confirmpassword" class="form-control" id="userpassword" placeholder="Enter password">
                                          
                                           </div>
                                       </div>
     
                                       
                                       
                                     
                                                     
                                   
                                       
                                   
                                       
                                  
                                      


                           
                       
                                      
                      
                                          
                              
                       
<br/><input type="submit" />
  
</div>
</div> 

</div>
</div>
</form> 







       










       <!-- JAVASCRIPT -->

       <script src="<?php echo base_url('assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>
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
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/node-waves/waves.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>
<!-- ckeditor -->
<script src="<?php echo base_url('assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')?>"></script>
<!--tinymce js-->
<script src="<?php echo base_url('assets/libs/tinymce/tinymce.min.js')?>"></script>
 <!-- init js -->
<script src="<?php echo base_url('assets/js/pages/form-editor.init.js')?>"></script>
<script src="<?php echo base_url('assets/js/app.js')?>"></script>
</body>
</html>