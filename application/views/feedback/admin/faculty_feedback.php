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
<div class="inner-block">
	<ol class="breadcrumb">
		<?php echo form_open('addfaculty_controller/feedback')?>
  <li class="breadcrumb-item active">Select Faculty</li>
</ol>
	<div class="form-group">
    <select class="custom-select" name="teachers">
      <option selected="">Select Faculty</option>
      <?php if(count($b)): ?>
      <?php foreach($b->result() as $feedteachers): ?>

      <option value="<?= $feedteachers->name ?>"><?php echo $feedteachers->name ?></option>
      <?php  endforeach;?>
      <?php endif;?>
    </select>
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