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
        
      
      

 
       

    </head>

    
    <body>
    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
     <!-- Begin page -->
       <div id="layout-wrapper">
       <?php echo view('header');?>
       <?php echo view('menu');?>    <!-- Sidebar -->
       </div>

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row mb-4">
                            <div class="col-xl-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="dropdown float-end">
                                                
                                              
                                               
                                            </div>
                                            <div class="clearfix"></div>
                                            <h5 class="mt-3 mb-1"> <p class="mb-1"> <?php echo $users['nom']; ?></h5> <?php echo $offre['titre']; ?></p></h5>
                                         </div>

                                        <hr class="my-4">

                                        <div class="text-muted">
                                           
                                            <div class="table-responsive mt-4">
                                            <div>
                                                   <p class="mb-1">Name :    <?php echo $users['nom']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">AGE : <?php echo $users['age']; ?></p> 
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1"> Gender : <?php echo $users['sexe']; ?></p>  
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">Mobile :<?php echo $users['num_tel']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">E-mail :<?php echo $users['email']; ?></p>   
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">linkedin :  <?php echo $users['linkedin']; ?></p>   
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">Location : <?php echo $users['adresse']; ?></p>  
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card mb-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                                                <i class="uil uil-user-circle font-size-20"></i>
                                                <span class="d-none d-sm-block">About</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                                                <i class="uil uil-clipboard-notes font-size-20"></i>
                                                <span class="d-none d-sm-block">score</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                                <i class="uil uil-envelope-alt font-size-20"></i>
                                                <span class="d-none d-sm-block">test </span>   
                                            </a>
                                        </li>
                                       
                                    </ul>
                                    <!-- Tab content -->
                                    <div class="tab-content p-4">
                                        <div class="tab-pane active" id="about" role="tabpanel">
                                            <div>
                                            <div>
    <p class="mb-1">Speciality :  <?php echo $users['specialite']; ?></p>
     </div>



 <p class="mb-1">language :
<?php if(isset($langue)): ?>
<?php foreach($langue as $langue ): ?>
 <th id="<?php echo $langue['id_offre']; ?>"> 
 <label class="checkbox-wrap">  <?php echo $langue['namelang']; ?>
 <input type="checkbox" checked="checked" value='<?php echo $langue['id_langue'];?>' name='langue[]'>
 <span class="checkmark"></span>
</label> 
 <?php endforeach; ?>
<?php endif; ?></p>
                                  
<p class="mb-1">competence :
 <?php if(isset($competence)): ?>
<?php foreach($competence as $competence ): ?>
<th id="<?php echo $competence['id_offre']; ?>"> 
<label class="checkbox-wrap" >  <?php echo $competence['namecomp']; ?>
<input class="form-check-input mt-0" aria-label="Checkbox for following text input" type="checkbox" checked="checked" value='<?php echo $competence['id_competence'];?>' name='competence[]'><br>
<p class="mb-1">experience :<?php echo $competence['experience']; ?>ans</p> 
<span class="checkmark"></span>  
<?php endforeach; ?>
<?php endif; ?></p>                                          
<p class="mb-1">Diplome :                          
<?php if(isset($diplome)): ?>
<th id="<?php echo $diplome['id_offre']; ?>"> 
<?php foreach( $diplome as $diplome):?>
<option value="<?php echo $diplome['id']?>"> <?php echo $diplome['titre'];?></option>
<?php endforeach; ?>
<?php endif; ?> </p>    

                                              
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tasks" role="tabpanel">
                                            <div>
                                                <h5 class="font-size-16 mb-3">Score</h5>
                                                <div class="mt-4">
                                                    <p class="mb-1">Score age : <?php echo $score['page']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">Score langue : <?php echo $score['plangue']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">Score sexe : <?php echo $score['psexe']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">Score etude : <?php echo $score['petude']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">Score competence : <?php echo $score['pcompetence']; ?></p>
                                                </div>
                                                <div class="mt-4">
                                                <h5 class="font-size-16 mb-3">Score Total: <?php echo $score['scoretotal']; ?></h5>
                                                </div>
                                             </div>
                                        </div>
                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <div>
                                                <div data-simplebar style="max-height: 430px;">
                                                <div><h5 class="font-size-16 mb-3">Test technique :</h5> </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">test : <?php echo $testtechi['test']; ?></p>  
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">note : <?php echo $restechnique['note']; ?></p>  
                                                </div>
                                                <div><h5 class="font-size-16 mb-3">Test psycologique :</h5> </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">test : <?php echo $testpsych['test']; ?></p>  
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-1">note : <?php echo $respsy['note']; ?></p>  
                                                </div>
                                                <div class="border rounded mt-4">
                                                </div> <!-- end .border-->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <div class="rightbar-overlay"></div>


        <script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/node-waves/waves.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>

        <script src="<?php echo base_url('assets/js/app.js')?>"></script>

<!--delete-->
</body>
</html>