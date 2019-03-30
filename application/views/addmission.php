
<!DOCTYPE html>
<html>
<head>
<title>Admission Enquiry Form</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Admission Enquiry Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
</head>
<body>
		<div class="content-w3ls">
			<h1 class="agile-head text-center">Admission Enquiry</h1>
			<div class="form-w3layouts">					
				<?php echo form_open('main_controller/Admission')?>
					<div class="form-control"> 
						<label class="header">Your Name <span>:</span></label>
						<?php echo form_input(['name'=>'name','id'=>'name','placeholder'=>'Full name'])?>
						<div class="clear"></div>
					</div>
				
					<div class="form-control">	
						<label class="header">Email Address <span>:</span></label>
						<?php echo form_input(['type'=>'email','name'=>'email','id'=>'email','placeholder'=>'Mail@example.com'])?>
						<div class="clear"></div>
					</div>
				
					<div class="form-control">	
						<label class="header">Phone Number <span>:</span></label>	
						<?php echo form_input(['name'=>'phone_number','id'=>'usrtel','placeholder'=>'Phone Number'])?>
						<div class="clear"></div>
					</div>	
					<div class="form-control">
							<label class="header">course intrested in?</label>
							<?php 
                                   $branch=array(

                                                  '' =>'Course intrested',
                                                  'Computer Science Engineering'=>'Computer Science Engineering',
                                                  'Electrical Engineering'=>'Electrical Engineering',
                                                  'Electrical And Electronics Engineering'=>'Electrical And Electronics Engineering',
                                                  'Civil Engineering'=>'Civil Engineering',
                                                  'Mechnical Engineering'=>'Mechnical Engineering',
                                                  'Information Technology'=>'Information Technology',
                                                  'Electronic and communication'=>'Electronic and communication' 
                                                
                                                );
                                  echo form_dropdown('course',$branch);

								?>
							<div class="clear"></div>
					</div>
					<div class="form-control">
						<label class="enquiry">Query <span>:</span></label>
						<?php echo form_textarea(['name'=>'query','id'=>'message','placeholder'=>'Enter your query'])?>
						<div class="clear"></div>
					</div>
					
					<div class="form-control w3ls-end">
						<input type="reset" class="reset" value="Reset">
						<?php echo form_submit(['type'=>'submit','class'=>'register','value'=>'submit']);?>

						<div class="clear"></div>
					</div>	
				<?php form_close();?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="agileits-w3layouts-copyright text-center">
		</div>	
</body>
</html>

