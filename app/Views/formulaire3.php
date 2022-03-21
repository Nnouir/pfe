<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Form Validation | Minible - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="description" content="Institut Supérieur d\&#39;Informatique de Mahdia ">  

<meta name="keywords" content="institut , supérieur , informatique , mahdia , tunisie">

<meta name="language" content="fr">

<meta name="subject" content="">

<meta name="author" content="">

<meta name="abstract" content="">
<!-- fin meta -->
<link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url("http://www.isima.rnu.tn/front/images/favicon.ico")?>>

        <!-- App favicon -->
        <link rel="shortcut icon" href=<?php echo base_url("assets/images/favicon.ico")?>

        <!-- Bootstrap Css -->
        <link href=<?php echo base_url("assets/css/bootstrap.min.css")?> id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href=<?php echo base_url("assets/css/icons.min.css")?> rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href=<?php echo base_url("assets/css/app.min.css")?> id="app-style" rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url("assets/css/style.bundle.css")?> rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" media="screen" href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/superfish.css")?>> 
	<!-- EOF Topnav JS & CSS -->
	
	<!-- Accordion -->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/liteaccordion.css")?>>
	<!-- EOF Accordion -->
	
	<!-- Included CSS Files -->
	<link href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/css")?> rel="stylesheet" type="text/css">
	<link rel="stylesheet" href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/foundation.css")?>>
	<link rel="stylesheet" href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/app.css")?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/common.css")?>>
	<link type="text/css" href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/jquery-ui-1.8.16.custom.css")?> rel="stylesheet">
    <link href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/jquery.dataTables.css")?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/ColVis.css")?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/TableTools.css")?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/TableTools_JUI.css")?> rel="stylesheet" type="text/css">

    </head>

    
    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
       

            <!-- Left Sidebar End -->

            <div id="layout-wrapper">

            


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            
            <div class="main-content">
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
        </div>

                        <!-- start page title -->
                      
                        <!-- end page title -->
                      
   
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            
                                        </h4>
                                        <div id="profile-container">
                                       
   <image id="profileImage" src=<?php echo base_url("http://lorempixel.com/100/100")?> />

</div>
<input id="imageUpload" type="file" 
       name="profile_photo" placeholder="Photo" required="" capture>
                                        <div class="image-input image-input-empty" data-kt-image-input="true" style=<?php echo base_url("background-image: url(/assets/media/svg/avatars/blank.svg)")?>>
     <!--begin::Image preview wrapper-->
     <div class="image-input-wrapper w-125px h-125px"></div>
     <!--end::Image preview wrapper-->
     <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="change"
        data-bs-toggle="tooltip"
        data-bs-dismiss="click"
        title="Change avatar">
         <i class="bi bi-pencil-fill fs-7"></i>
         <div class="image-input image-input-outline" data-kt-image-input="true" style=<?php echo base_url("background-image: url(/assets/media/svg/avatars/blank.svg)")?>>
     <!--begin::Image preview wrapper-->
     <div class="image-input-wrapper w-125px h-125px" style=<?php echo base_url("background-image: url(/assets/media/avatars/300-1.jpg)")?>></div>
     <!--end::Image preview wrapper-->
     </label>
     <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
				<div style="float:left">
					<img src=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/06999103.jpg")?> alt="Image profile" width="100" height="100" style="border:1px dashed #aaa">
				</div>
				<div style="float:right;width:80%">
					<form name="imageProfil" id="imageProfil" method="post" action=<?php echo base_url("http://www.isima.rnu.tn/fra/intranet/etudiant/fiche")?> enctype="multipart/form-data">
						
						<br><br>
						<input type="file" name="f_profil_image" id="f_profil_image">
						<br><br>
					
						<input type="hidden" name="imageProfil">
					</form>
				</div>
				<div class="clear"></div>
			</div>

		</div>
</span>
</div>

	             
			</div>
			<div class="clearfix"></div>
					</div>
	</div>
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
                                        <th>language</th>
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
                                                            Please check a language.
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                   
                                                </tr>
                                        </thead>
                                                
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
                                                    </div>
                                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                   
                                                </tr>
                                        </thead>
                                                
                                               
                                              
                                   
                                      
                                      
                                       
                           
                            
                                              
                                               
                                              
                                   
                                      
                                      
                                       
                           
                                 
                              
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
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
        
                          

                
              
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
      
       
               
        <!-- /Right-bar -->
      
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src=<?php echo base_url("assets/libs/jquery/jquery.min.js")?>></script>
        <script src=<?php echo base_url("assets/libs/bootstrap/js/bootstrap.bundle.min.js")?>></script>
        <script src=<?php echo base_url("assets/libs/metismenu/metisMenu.min.js")?>></script>
        <script src=<?php echo base_url("assets/libs/simplebar/simplebar.min.js")?>></script>
        <script src=<?php echo base_url("assets/libs/node-waves/waves.min.js")?>></script>
        <script src=<?php echo base_url("assets/libs/waypoints/lib/jquery.waypoints.min.js")?>></script>
        <script src=<?php echo base_url("assets/libs/jquery.counterup/jquery.counterup.min.js")?>></script>
        <script type="text/javascript" src=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/jquery.dataTables.min.js.téléchargement")?>></script>
	<script type="text/javascript" src=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/ColVis.min.js.téléchargement")?>></script>
	<script type="text/javascript" src=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/ZeroClipboard.js.téléchargement")?>></script>
	
        <!-- parsleyjs -->
        <script src=<?php echo base_url("assets/libs/parsleyjs/parsley.min.js")?>></script>

        <script src=<?php echo base_url("assets/js/pages/form-validation.init.js")?>></script>
        <script src=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/jquery.min.js.téléchargement")?>></script>
	
		<script src=<?php echo base_url("./ISI Mahdia - ISI Mahdia - Profile_files/jquery-ui-1.8.16.custom.min.js.téléchargement")?>></script>
        <script src=<?php echo base_url("https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js")?>></script>
        <script src=<?php echo base_url("assets/js/app.js")?>></script>
        <script src=<?php echo base_url("assets/js/scripts.bundle.js")?>></script>
        <script type="text/javascript">
            $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
$('#tabs').tabs({selected: 0});
<script async="" src="./ISI Mahdia - ISI Mahdia -"<?php echo base_url(" Profile_files/analytics.js.téléchargement")?>></script><script type="text/javascript">  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  }
  
  
  
  
  
  </script>
</script>
    </body>
</html>
