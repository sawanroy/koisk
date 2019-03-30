
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
      <th scope="col">name</th>
      <th scope="col">place</th>
      <th scope="col">remark</th>
      <th scope="col">branch</th>
      <th scope="col">comments</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
    	<?php if(count($a)): ?>
      <?php foreach($a->result() as $infra): ?>

      <td><?php echo $infra->sno?></td>
      <td><?php echo $infra->sname?></td>
      <td><?php echo $infra->infrastructure?></td>
      <td><?php echo $infra->remark?></td>
      <td><?php echo $infra->branch?></td>
      <td><?php echo $infra->comments?></td>
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