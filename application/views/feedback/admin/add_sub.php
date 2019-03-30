<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel | Feedback System | Home</title>
edback System | Home</title>
<?php
include_once"header.php";
?>
<!--heder end here-->
				<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="container">
	<div class="col-lg-6" style="float: right; margin-right: 100px;">
		<?php if( $error = $this->session->flashdata('login_failed')):?>
    <div class="row ">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-success">
  <h4 class="alert-heading">Thank you</h4>
  <?= $error ?>

</div>
      </div>
    </div>
    <?php endif;?>
<div class="inner-block">
	
		<?php echo form_open('addfaculty_controller/add_subcon')?>
		<ol class="breadcrumb">
  <li class="breadcrumb-item active">Subject name</li>
</ol>
  <div class="form-group">
  <?php echo form_input(['type'=>'text', 'name'=>'sname', 'class'=>'form-control', 'placeholder'=>'Enter Subjects'])?>
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item active">Branch</li>
</ol>
	<div class="form-group">
      <?php 
                              

                                                  $Branch=array(

                                                  '' =>'Select Branch',
                                                  'Computer Science Engineering'=>'Computer Science Engineering',
                                                  'Electrical Engineering'=>'Electrical Engineering',
                                                  'Electrical And Electronics Engineering'=>'Electrical And Electronics Engineering',
                                                  'Civil Engineering'=>'Civil Engineering',
                                                  'Mechnical Engineering'=>'Mechnical Engineering',
                                                  'Information Technology'=>'Information Technology',
                                                  'Electronic and communication'=>'Electronic and communication' 
                                                
                                                );

                                   echo form_dropdown('branch',$Branch,'','class="custom-select"');

                ?>   
                </div> 
                <ol class="breadcrumb">
  <li class="breadcrumb-item active">Semester</li>
</ol>
	<div class="form-group">
                <?php 
                                  $Semester=array(

                                  	              '' =>'Select Semester',
                                  	              '1st Semester'=>'1st Semester',
                                  	              '2nd Semester'=>'2nd Semester',
                                  	              '3rd Semester'=>'3rd Semester',
                                  	              '4th Semester'=>'4th Semester',
                                  	              '5th Semester'=>'5th Semester',
                                  	              '6th Semester'=>'6th Semester',
                                  	              '7th Semester'=>'7th Semester',
                                  	              '8th Semester'=>'8th Semester' 
                                                  );

                                  echo form_dropdown('semester',$Semester,'','class="custom-select"');

								?>
							</div>
  


						<?php echo form_submit(['type'=>'submit','value'=>'submit','class'=>'btn btn-primary']);?>
					
</div>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
				<?php
				include_once "footer.php"
				?>
</body>
</html>