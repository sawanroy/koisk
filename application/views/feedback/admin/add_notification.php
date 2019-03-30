<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel | Feedback System | Home</title>
<?php 
include_once "header.php"
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
<div class="inner-block">
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
<div class="container">
	
		<div class="col-lg-9" style="float: right; margin-right: 100px;">
<?php echo form_open('admin_controller/submit_notification') ?>

  <fieldset>
    <legend>Add articles</legend>
<div class="col-lg-6">
        <div class="form-group">
      <label for="exampleInputEmail1">Enter notification </label>
      <?php echo form_textarea(['name'=>'title', 'class'=>'form-control','placeholder'=>'articles title','value'=>set_value('title')])?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"></label>
       <?php echo form_input(['name'=>'date', 'type'=>'date' ,'class'=>'form-control'])?>
      
    </div>
    </fieldset>
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-secoundry','value'=>'Reset']);
          echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary','value'=>'submit']);
  ?>
  </fieldset>
</form>
</div>
</div>
</div>
<!--inner block end here-->
<?php 
include_once "footer.php"
?>
</body>
</html>