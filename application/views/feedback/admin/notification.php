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
<div class="container">
	
		<div class="col-lg-9" style="float: right; margin-right: 100px;">
			<div class="row">
			<a href="<?php echo site_url('admin_controller/add_notification')?>" class="btn  btn-primary" >Add Notification</a>
		</div>

	
	<table class="table">
		<thead>
			<th>S no.</th>
			<th>Title</th>
			<th>Date</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php if(count($a)): ?>
			<?php foreach($a->result() as $noti): ?>
           <tr>
			<td><?= $noti->sno ?></td>
			<td><?= $noti->title ?></td>
			<td><?= $noti->date?></td>
			<td>
				<button type="button" class="btn btn-primary btn-sm ">Edit</button>
				<button type="button" class="btn btn-danger btn-sm ">delete</button>
			</td>
		</tr>
		<?php endforeach; ?>
	         <?php else: ?>
	         <tr>
                   <td colspan="3">
                       No Records Found.
                   </td>
                   </tr>
	      <?php endif;?>
		</tbody>

	</table>
</div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
				<?php
				include_once "footer.php"
				?>
</body>
</html>