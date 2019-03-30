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
	<div class="col-lg-4" style="float: left; margin-left: 100px;">
<div class="inner-block">
	
	<?php foreach($l->result() as $list_feed): ?>
	 

	<?php  endforeach;?>
  
	 <h3 class="card-header">Teaching Name: <?php echo $list_feed->teacher?>
	 	
</h3>

 	
	<ol class="breadcrumb">
		
  <li class="breadcrumb-item active">feedback from students</li>
</ol>
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">subject</th> 
      <th scope="col">Teaching_skill</th>
      <th scope="col">Clarification_of<br>doubts</th>
      <th scope="col">Class<br>management</th>
      <th scope="col">Guidance</th>
      <th scope="col">Regularity</th>
      <th scope="col">Additional<br>comments</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
    	<?php if(count($l)): ?>
    	
      <?php foreach($l->result() as $list_feed): ?>

      <td><?php echo $list_feed->sno?></td> 
      <td><?php echo $list_feed->subject?></td>
      <td><?php echo $list_feed->Teaching_skill?></td>
      <td><?php echo $list_feed->Clarification_of_doubts?></td>
      <td><?php echo $list_feed->Class_management?></td>
      <td><?php echo $list_feed->Guidance?></td>
      <td><?php echo $list_feed->Regularity?></td>
      <td><?php echo $list_feed->additional?></td>

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