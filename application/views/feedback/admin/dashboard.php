<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel | Feedback System | Home</title>
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
<div class="inner-block">


</div>
<!--inner block end here-->
<!--copy rights start here-->
				<?php 
              include_once "footer.php"
				?>
</body>
</html>