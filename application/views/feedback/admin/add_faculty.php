
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
	<ol class="breadcrumb">
		<?php echo form_open('addfaculty_controller/index')?>
  <li class="breadcrumb-item active">Desgination</li>
</ol>
	<div class="form-group">
    <select class="custom-select" name="desgination">
      <option selected="">Select Desgination</option>
      <option value="Asstistant prof.">Asstistant prof.</option>
      <option value="Associate Prof.">Associate Prof.</option>
      <option value="Associate Prof.">Prof.</option>
    </select>
  </div>
  <ol class="breadcrumb">
  <li class="breadcrumb-item active">Faculty name</li>
</ol>
  <div class="form-group">
  <?php echo form_input(['type'=>'text', 'name'=>'name', 'class'=>'form-control', 'placeholder'=>'Enter Faculty name'])?>
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