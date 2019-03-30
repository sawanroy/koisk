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
<div class="container" >
<div class="col-lg-6" style="float: left; margin-left: 100px;">
<div class="inner-block">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">Roll no.</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">semester</th>
      <th scope="col">branch</th>
      <th scope="col">email</th>
      <th scope="col">mobile_number</th>
      <th scope="col">gender</th>
      <th scope="col">Date of birth</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
    	<?php if(count($d)): ?>
      <?php foreach($d->result() as $reg): ?>

      <td><?php echo $reg->sno?></td>
      <td><?php echo $reg->roll?></td>
      <td><?php echo $reg->firstname?></td>
      <td><?php echo $reg->lastname?></td>
      <td><?php echo $reg->semester?></td>
      <td><?php echo $reg->branch?></td>
      <td><?php echo $reg->email?></td>
      <td><?php echo $reg->mobile_number?></td>
      <td><?php echo $reg->gender?></td>
      <td><?php echo $reg->dob?></td>
    </tr>
   <?php  endforeach;?>
      <?php endif;?>
  </tbody>
</table> 

</div>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
				<?php
				include_once "footer.php"
				?>
</body>
</body>
</html>