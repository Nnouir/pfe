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

 <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">offres d'emploi</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('rh/offre')?>">offre d'emploi</a></li>
                            <li class="breadcrumb-item active">forms</li>
                        </ol>
                    </div>
                 </div>
            </div>
        </div>
        <!-- end page title -->


<form action="<?php echo base_url("rh/update")?>" method="post">
                     <div>  <input type="hidden" id="id" name="id_offre" value='<?php echo $offre['id_offre']; ?>' ></div>
                <div class="row">         
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="title"  id="titre_id"name="titre" value='<?php echo $offre['titre']; ?>' >
                                                <input type="hidden" id="titre_id_id" name="tire" > 
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">domaine</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="title"  id="titre_id_id2"name="domaine"value='<?php echo $offre['domaine']; ?>'>
                                            </div>
                                        </div>
                                    <div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Psychology Manager</label>
                                            <div class="col-md-10">
                                                <select name="id_resppsych" class="form-select">
                                                <?php if($listrpsy): ?>
                                                       <?php foreach( $listrpsy as $user):?>
                                                       
                                                       <option value="<?php echo $user['id']?>"<?php if($users['id']==$offre['id_resppsych']) echo 'selected'?>> <?php echo $user['name'];?></option>
                                                       
                                                     <?php endforeach; ?>
                                                     <?php endif; ?>
                                                </select>
                                            </div>
                                         </div>
                                    </div>
                                        <div>
                                          <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">technical Manager</label>
                                            <div class="col-md-10">
                                                <select name="id_resptech" class="form-select">
                                                    
                                                  
                                                    <?php if($listrtech): ?>
                                                       <?php foreach( $listrtech as $users):?>
                                                       
                                                       <option value="<?php echo $users['id']?>" <?php if($users['id']==$offre['id_resptech']) echo 'selected'?>> <?php echo $users['name'];?></option>
                                                       
                                                     <?php endforeach; ?>
                                                     <?php endif; ?>
                                                    
                                                 </select>
                                             </div>
                                         </div>
                                        </div>
                                        
                                        
                                        <div class="mb-3 row">
                                            <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date" id="titre_id_id3" name="duree"value='<?php echo $offre['dateD']; ?>'>
                                            </div>
                                        </div>
                                                      
                                    
                                        
                                     <div class="row">
                                        <div class="col-12">
                                          <div class="page-title-box d-flex align-items-center justify-content-between">
                                             <h4 class="mb-0">Description:</h4>
                                          </div>
                                        </div>
                                    </div>
        <!-- end page title -->         

                                    <div class="row">
                                        <div class="col-12">
                                               <div class="card-body">
                                                   <div>
                                                             <textarea id="elm1" name="description" ><?php echo $offre['description']; ?></textarea>
                                                       </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                        
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">niveau d'etude</label>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>diplome</th>
                                                <th>points</th>
                                                
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($listniveau): ?>
                                                       <?php foreach( $listniveau as $user):?>
                                                        <tr id="<?php echo $user['id']; ?>"> 
                                                <td><?php echo $user['id']; ?></td>
                                                <td>  <?php echo $user['titre'];?></td>
                                                <td>   <input class="form-control" type="title"  id="titre_id_id" name="pointdiplome[<?php echo $user['id']; ?>]" value='<?php echo $niv[$user['id']]; ?>'> </td>  
                                                     <?php endforeach; ?>
                                                     <?php endif; ?></label><br> 
                                        </tbody>
                                           
                                        
                                        </table> 
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">language</label>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>language</th>
                                                <th>points</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($listlang): ?>
                                                       <?php foreach( $listlang as $user):?>
                                                        <tr id="<?php echo $user['id']; ?>"> 
                                                <td><?php echo $user['id']; ?></td>
                                                <td> <option  value="<?php echo $user['id']?>"> <?php echo $user['titre'];?></option></td>
                                                <td>   <input class="form-control" type="title"  id="titre_id_id"name="pointslang[<?php echo $user['id']; ?>]"value='<?php echo $lang[$user['id']]; ?>'> </td>  
                                                     <?php endforeach; ?>
                                                     <?php endif; ?></label><br> 
                                         </tbody>
                                        </table> 
                                        </div>


                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title mb-4">competence</h4>
                                        <div class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                            <?php foreach ($compe as $id_competence => $pcom):?>  
                                                <div data-repeater-item class="row">
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="name">competence</label>
                                                        <input type="text" id="name" name="competence_titre" class="form-control"value='<?php echo $pcom['titre']; ?>'/>
                                                    </div>
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="name">Max</label>
                                                        <input type="text" id="name" name="competence-max" class="form-control"value='<?php echo $pcom['max']; ?>'/>
                                                    </div>
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="name">Min</label>
                                                        <input type="text" id="name" name="competence-min" class="form-control"value='<?php echo $pcom['min']; ?>'/>
                                                    </div>
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">points</label>
                                                        <input type="text" id="subject" name='point' class="form-control"value='<?php echo $pcom['points']; ?>'/>
                                                    </div>
                                                    <div class="col-lg-2 align-self-center d-grid">
                                                        <input data-repeater-delete type="button" class="btn btn-primary btn-block" value="Delete"/>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                       </div>
                                    </div>
                                </div>
                            </div>
                            </div><!-- end row -->
                        
                            <div class="row">
                            <div class="col-12">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">sexe</h4>
                                             <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="name">sexe</label><br>
                                                        <label class="form-label" for="name">masculin</label><br>
                                                        <label class="form-label" for="name">femmine</label><br>
                                                    </div>
                                                        <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">points</label>
                                                        <input type="text" id="subject"  name="m" class="form-control"value='<?php echo $sexf['points']; ?>'/>
                                                        <input type="text" id="subject" name="f" class="form-control"value='<?php echo $sexm['points']; ?>' />
                                                        
                                                </div>
                                            </div>
                                    </div>
                             </div>
                        </div>
                        <!-- end row -->
                                       
                        <div class="row">
                            <div class="col-12">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Age</h4>
                                        <div class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                            <?php foreach ($age as $id_age => $page):?> 
                                                <div data-repeater-item class="row">
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="name">Min</label>
                                                        <input type="text" id="name" name="age-min" class="form-control"value='<?php echo $page['min']; ?>'/>
                                                    </div>
        
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="name">Max</label>
                                                        <input type="text" id="name" name="age-max" class="form-control"value='<?php echo $page['max']; ?>'/>
                                                    </div>
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">points</label>
                                                        <input type="text" id="subject"name="point" class="form-control"value='<?php echo $page['points']; ?>'/>
                                                    </div>
                                                    <div class="col-lg-2 align-self-center d-grid">
                                                        <input data-repeater-delete type="button" class="btn btn-primary btn-block" value="Delete"/>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                       </div>
                                    </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><a href="<?php echo base_url('rh/offre')?>">update</a></button> </td>
     
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

     </body>
</html>