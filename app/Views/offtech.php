<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
        <title>Datatables | Minible - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
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
    </head>

<body>
    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
     <!-- Begin page -->
       <div id="layout-wrapper">
       <?php echo view('header');?>
       <?php echo view('menutech');?>    <!-- Sidebar -->
       </div>

 <div class="main-content">
 <div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Offre</h4>
                     <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('rhtech/dachbourd')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">offre</li>
                        </ol>
                    </div>
                 </div>
            </div>
        </div>
    </div>
         <!-- end page title -->
        <div class="row">
            <div class="col-12">
                 <div class="card">
                        <div class="card-body">
                          <!-- Left Sidebar End -->
                            
                             <div class="rightbar-overlay"></div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>title</th>
                                                <th>date</th>
                                                
                                               
                                            </tr>
                                            </thead>
                                 <tbody>
                                    <?php if($offre): ?>
                                    <?php foreach($offre as $users ): ?>
                                    <tr id="<?php echo $users['id_offre']; ?>"> 
                                        <td> <?php echo $users['id_offre']; ?></td>
                                        <td> <?php echo $users['titre']; ?></td>
                                        <td> <?php echo $users['duree']; ?></td>
                                        <td> <button type="button" class="btn btn-primary waves-effect waves-light edit" data-bs-toggle="modal" data-bs-target="#idModal">update</button></td>
                                        <td><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><a href="<?php echo base_url('rhtech/candidattesttech/'.$users['id_offre'])?>">candidat</a></button> </td>
                                    
                                        
                                    </tr>
                                   <?php endforeach; ?>
                                   <?php endif; ?>
                                 </tbody>
                                </table>
                                <form action="<?php echo base_url("rhtech/offre")?>" method="post">
                                        <div>  <input type="hidden" id="id" name="id_offre" value='' ></div>
                                                <div id="idModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0"  id="myModalLabel">test </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <label for="fname">test technique:</label><br>
                                                               <div class="row">
                                                               <div class="row">
                                        <div class="col-12">
                                               <div class="card-body">
                                                   <form method="post">
                                                             <textarea id="elm1" name="test"></textarea>
                                                   </form>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                                            </div> 
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light ">update</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                     
                                        </div>
                               
                        
                        </form>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
         </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>
</div>
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

         <!-- form repeater js -->
<script src="<?php echo base_url('assets/libs/jquery.repeater/jquery.repeater.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/pages/form-repeater.int.js')?>"></script>
<script src="<?php echo base_url('assets/js/app.js')?>"></script>






<script type="text/javascript">
        $(".edit").click(function(){var id = $(this).parents("tr").attr("id");
                    $.ajax({url: "<?php echo base_url('/rhtech/offreget/').'/'?>"+id,
               type: 'POST',
               error: function() { alert('Something is wrong'); },
               success: function(test) {
                tinyMCE.get('elm1').setContent(test);
                document.getElementById("id").setAttribute("value", id);
             }
            });
        });
</script>
</body>
</html>