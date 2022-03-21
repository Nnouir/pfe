<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
        <title>Datatables | Minible - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
        

 <!--<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">formulaire</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('rh/offre')?>">formulaire</a></li>
                            <li class="breadcrumb-item active">forms</li>
                        </ol>
                    </div>
                 </div>
            </div>
        </div>-->
        <!-- end page title -->


<form method="get" action="<?php echo base_url('rh/users')?>" >
<div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            
                                        </h4>
                                        <p class="card-title-desc"></p>
                                        <form class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01"> name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">age</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">email</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="email" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid mail.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">linkedin</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="linkedin" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid linkedin.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">num_tel</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="tel" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid num.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Diplome</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="last Diplome" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid Diplome.
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                        
                                                <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                <div class="table-responsive mb-4">
                                    
                                                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                        <thead>
                                        <th>competence</th>
                                            <tr class="bg-transparent">
                                                <th style="width: 20px;">
                                                
                                                <?php if(isset($offre)): ?>

                                   <?php foreach($offre as $users ): ?>
                                    <th id="<?php echo $users['id_offre']; ?>"> 
                                                <tbody> 
                                    
                                            <tr>
                                           
                                                <td>
                                                    <div class="form-check text-center font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                        <td> <?php echo $users['titre']; ?></td>
                                                        <label class="form-check-label" for="ordercheck1"></label>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid competence.
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                   
                                                </tr>
                                        </thead>
                                                
        <!-- end page title -->         

                                 

        </tr>
                                 
                              
                                 </td>
                                 <div class="row">
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                  <div class="table-responsive mb-4">
                      
                                  <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                          <thead>
                          <th>langue</th>
                              <tr class="bg-transparent">
                                  <th style="width: 20px;">
                                  
                                  <?php if($lag): ?>

                     <?php foreach($lag as $users ): ?>
                      <th id="<?php echo $users['id_offre']; ?>"> 
                                  <tbody> 
                      
                              <tr>
                             
                                  <td>
                                      <div class="form-check text-center font-size-16">
                                          <input type="checkbox" class="form-check-input" id="ordercheck1">
                                          <td> <?php echo $users['titre']; ?></td>
                                          <label class="form-check-label" for="ordercheck1"></label>
                                          <div class="invalid-feedback">
                                                            Please check a valid langue.
                                                        </div>
                                      </div>
                                      <?php endforeach; ?>
                    <?php endif; ?>
                     
                                  </tr>
                          </thead>
                                  
                                 
                                
                     
                        
                        
                         
             
                     </tr>
                   
                
                                 </td>
                                
                                  <div class="mb-2">
                                          <label class="form-label d-block mb-3">Gender :</label>
                                          <div class="custom-radio form-check form-check-inline">
                                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input">
                                              <label class="form-check-label" for="customRadioInline1">Male</label>
                                          </div>
                                          <div class="custom-radio form-check form-check-inline">
                                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                                              <label class="form-check-label" for="customRadioInline2">Female</label>
                                          </div>
                                      </div>
                                      <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                       
                                <!-- end card -->
                            </div> <!-- end col --> 
                                      
                        <!-- end row -->
                        

     
</form>
</div> 
</div> 
</div>
</div>


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

        <script>
        ClassicEditor
        .create( document.querySelector( '#classic-editor' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>
         <!-- form repeater js -->
<script src="<?php echo base_url('assets/libs/jquery.repeater/jquery.repeater.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/pages/form-repeater.int.js')?>"></script>

<script src="<?php echo base_url('assets/js/app.js')?>"></script>
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src=<?php echo base_url("assets/libs/jquery/jquery.min.js")?>></script>
<script src=<?php echo base_url("assets/libs/bootstrap/js/bootstrap.bundle.min.js")?>></script>
<script src=<?php echo base_url("assets/libs/metismenu/metisMenu.min.js")?>></script>
<script src=<?php echo base_url("assets/libs/simplebar/simplebar.min.js")?>></script>
<script src=<?php echo base_url("assets/libs/node-waves/waves.min.js")?>></script>
<script src=<?php echo base_url("assets/libs/waypoints/lib/jquery.waypoints.min.js")?>></script>
<script src=<?php echo base_url("assets/libs/jquery.counterup/jquery.counterup.min.js")?>></script>

<!-- parsleyjs -->
<script src=<?php echo base_url("assets/libs/parsleyjs/parsley.min.js")?>></script>

<script src=<?php echo base_url("assets/js/pages/form-validation.init.js")?>></script>

<script src=<?php echo base_url("assets/js/app.js")?>></script>
     </body>
</html>