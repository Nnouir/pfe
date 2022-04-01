<!DOCTYPE html>
<html lang="en">
<head>
	<title>form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href=<?php echo base_url("ContactFrom_v5/images/icons/favicon.ico")?>/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/bootstrap/css/bootstrap.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/fonts/iconic/css/material-design-iconic-font.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/animate/animate.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/css-hamburgers/hamburgers.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/animsition/css/animsition.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/select2/select2.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/daterangepicker/daterangepicker.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/vendor/noui/nouislider.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/css/util.css")?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("ContactFrom_v5/css/main.css")?>>
    <link href=<?php echo base_url("https://fonts.googleapis.com/checkbox-02/css?family=Poppins:300,400,500,600,700,800,900")?> rel="stylesheet">
		
		<link rel="stylesheet" href=<?php echo base_url("https://stackpath.bootstrapcdn.com/checkbox-02/font-awesome/4.7.0/css/font-awesome.min.css")?>>
		<link rel="stylesheet" href=<?php echo base_url("checkbox-02/css/style.css")?>>
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="<?php echo base_url('rh/form')?>">
				<input type='hidden' name='id_offre' value='<?php echo $id_offre?>'>
				
			<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>
				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Age *</span>
					<input class="input100" type="text" name="age" placeholder="Enter your age">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Adress *</span>
					<input class="input100" type="text" name="adresse" placeholder="Enter Your Adress ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Linkedln *</span>
					<input class="input100" type="text" name="linkedln" placeholder="Enter Your Linkedln ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Diplome *</span>
					<div>
                   
                
						<select class="js-select2" name="service">
                        <?php if(isset($listdip)): ?>
                        <?php foreach( $listdip as $user):?>

                                                       
                 <option value="<?php echo $user['id']?>"> <?php echo $user['titre'];?></option>
                 <?php endforeach; ?>
                                                     <?php endif; ?>
							
						</select>
                      
						<div class="dropDownSelect2"></div>
					</div>
                    
				</div>
				
                <div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
					<span class="label-input100">speciality</span>
					<input class="input100" type="text" name="specialite" placeholder="Enter Your speciality">
				</div>
				<div class="col-md-4">
						<div class="heading-title mb-4">
							<div class="h5"> Gender</div>
						</div>

								  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value='m'>
  <label class="form-check-label" for="flexRadioDefault1">
  Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked value='f'>
  <label class="form-check-label" for="flexRadioDefault2">
  Female
  </label>
</div>          
                <div class="row">
					<div class="col-md-4">
						<div class="heading-title mb-4"  >
							
							<div class="h5"> language</div>
						</div>
                        <?php if(isset($listlang)): ?>

<?php foreach($listlang as $user ): ?>
 <th id="<?php echo $user['id_offre']; ?>"> 
           
						<label class="checkbox-wrap">  <?php echo $user['namelang']; ?>
						  <input type="checkbox" checked="checked" value='<?php echo $user['id_langue'];?>' name='langue[]'>
						  <span class="checkmark"></span>
						</label> 
          
                        <?php endforeach; ?>
                                  <?php endif; ?>
                                       
                                  <div class="row">
                                  <div class="row gy-2 gx-3 align-items-center">         
					<div class="col-md-4">
						<div class="heading-title mb-4">
							<div class="h5"> competence</div>
						</div>
                        <?php if(isset($listcomp)): ?>

							<?php foreach($listcomp as $users ): ?>
 <th id="<?php echo $users['id_offre']; ?>"> 
           
						<label class="checkbox-wrap" >  <?php echo $users['titre']; ?>
						
						  <input class="form-check-input mt-0" aria-label="Checkbox for following text input" type="checkbox" checked="checked" value='<?php echo $users['id_competence'];?>' name='competence[]'>
						  
						  <span class="checkmark"></span>
						 
						</label>  
                               
				</div>
                <div class="form-group form-group-lg">
                <div class="wrap-input100 validate-input bg1">
                    <div>Period of your professional experience</div>
                    <div class="label-input100"></div>
                <input type="text" class="label-input100_lg"aria-label="Text input with checkbox" placeholder=" Period_of_Your_experience " name="experience">  
                            </div>
                            </div>
                <?php endforeach; ?>
                                  <?php endif; ?>  
								
								  <div class="row">
				
                                   
								

				
					
						<div class="contact100-form-range-bar">
							
						</div>
					</div>
				</div>

				

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name='submit'>
						<span>
							Submit
						
						</span>
					</button>
				</div>
				</form>
		</div>
	</div>
							


<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/jquery/jquery-3.2.1.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/animsition/js/animsition.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/bootstrap/js/popper.js")?>></script>
	<script src=<?php echo base_url("ContactFrom_v5/vendor/bootstrap/js/bootstrap.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/select2/select2.min.js")?>></script>
    <script src=<?php echo base_url("checkbox-02/js/jquery.min.js")?>></script>
    <script src=<?php echo base_url("checkbox-02/js/popper.js")?>></script>
    <script src=<?php echo base_url("checkbox-02/js/bootstrap.min.js")?>></script>
    <script src=<?php echo base_url("checkbox-02/js/main.js")?>></script>
	<script>
	
	</script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/daterangepicker/moment.min.js")?>></script>
	<script src=<?php echo base_url("ContactFrom_v5/vendor/daterangepicker/daterangepicker.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/countdowntime/countdowntime.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("ContactFrom_v5/vendor/noui/nouislider.min.js")?>></script>
	<script>
	 
	</script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("js/main.js")?>></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=<?php echo base_url("https://www.googletagmanager.com/gtag/js?id=UA-23581568-13")?>></script>
<script>
 
</script>

</body>
</html>
