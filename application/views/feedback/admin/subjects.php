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
<div class="col-lg-9" style="float: right; margin-right: 100px;">
<div class="inner-block">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">Subject name</th>
      <th scope="col">branch</th>
      <th scope="col">semester</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
    	<?php if(count($h)): ?>
      <?php foreach($h->result() as $Sub): ?>

      <td><?php echo $Sub->sno?></td>
      <td><?php echo $Sub->sname?></td>
      <td><?php echo $Sub->branch?></td>
      <td><?php echo $Sub->semester?></td>
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
</html>