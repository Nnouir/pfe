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

    </head>

    
<body>
    <div id="layout-wrapper">
      <?php echo view('header');?>
       <?php echo view('menu');?>    <!-- Sidebar -->
    </div>
             <div class="main-content">
                <div class="page-content">
                   <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                 <h4 class="mb-0">Langue</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo base_url('rh/dachbourd')?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Langue</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                         <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                     <div>
                                       <?php if(isset ($ajout)) echo $ajout->listErrors()?>
                                          <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">language</button>
                                                <!-- sample modal content -->
                                                <form action="<?php echo base_url("rh/langue")?>" method="post">
                                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myModalLabel">create language</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <label for="fname">title:</label><br>
                                                              <input type="text" class= "form-control"id="fname" name="titre"><br>
                                                            </div> 
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                             </form>
                                            </div>
                                           
                                       
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>action</th>
                                            </tr>
                                            </thead>
        <tbody>
        <?php if($lang): ?>
        <?php foreach($lang as $user): ?>
        <tr id="<?php echo $user['id']; ?>"> 
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['titre']; ?></td>
             <td>  <button type="button" class="btn btn-danger remove"> Delete</button>
             <button type="button" class="btn btn-primary waves-effect waves-light edit" data-bs-toggle="modal" data-bs-target="#idModal">update</button></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
        </table>

                                        <form action="<?php echo base_url("rh/langueup")?>" method="post">
                                                <div id="idModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0"  id="myModalLabel">Update </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <label for="fname">title:</label><br>
                                                              <input type="text"class= "form-control" id="titre_id" name="titre2" > <br>
                                                              <input type="hidden" id="titre_id_id" name="tire" > <br>
                                                            </div> 
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light ">update</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </form>
                                        </div>
                                <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                                </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
         </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        

      
        </div>
        <!-- /Right-bar -->
         <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
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
       
       
       
       <script type="text/javascript">
        $(".remove").click(function(){ var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record ?'))
        { $.ajax({
               url: "<?php echo base_url('/rh/langue/').'/'?>"+id,
               type: 'POST',
               error: function() {alert('Something is wrong'); },
               success: function(data) { $("#"+id).remove(); alert("Record removed successfully");  }
                   });
        }
        });
        </script>
        <script type="text/javascript">
        $(".edit").click(function(){var id = $(this).parents("tr").attr("id");
         $.ajax({url: "<?php echo base_url('/rh/langueget/').'/'?>"+id,
               type: 'POST',
               error: function() {
                  alert('Something is wrong'); },
               success: function(titre) {
                document.getElementById("titre_id").setAttribute("value", titre);
                document.getElementById("titre_id_id").setAttribute("value", id); }
            });
        
        });
         </script>
    
    </body>
</html>