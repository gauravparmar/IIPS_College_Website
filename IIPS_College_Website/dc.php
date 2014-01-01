<!-- Called from main_menu.php,  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Developer Center | IIPS </title>

      
		<?php
		 include('cssLinks.php');
		?>

	<style type"text/css">
		.dcMembers{
			background-color:white;
			padding: 10px 10px 10px 10px;
			margin-left:15px;
			margin-right:15px;
			margin-bottom: 20px;
		}

		.blocks{
			background-color:white;
			padding: 10px 10px 10px 10px;
			margin-left:15px;
			margin-right:15px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<?php
			include 'header.php';
			
			include('readTextFilesScript.php');
	?>

	<!-- wrapper start-->
		<div id="wrap">
			<!-- container start below -->
			<div class="container" style="background-color:#FFFFFF;">
				<br><h3> Development Center </h3><br>
				<!-- row start below-->
				<div class = "row">
					<div class="col-md-3">
						<ul class="nav side-tabs nav-pills">
							<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> About DC</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Current Projects</a></li>
			                <!-- <li ><a class="icon-chevron-sign-right" href="#tab3"> Open Projects</a></li> -->
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Open Source Initiatives</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> Past Projects</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> Team</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab6"> Entrance</a></li>
			                
						</ul>
					</div>


					<div class="col-md-9 text-justify">
						<div id="tab1"  class="tab-content active">
	                      <?php 
							$aboutDC ="textFiles/DC/about_dc.txt";  
							readTextFiles($aboutDC);
					     ?>
	                   </div>
 						
	                   <div id="tab2"  class="tab-content hide">
	                      <?php 
							$currentProjects ="textFiles/DC/current_projects.txt";  
							readTextFiles($currentProjects);
					     ?>
	                   </div>

	                   <!-- <div id="tab3"  class="tab-content hide">
	                      <?php 
							$openInitiatives /*="textFiles/DC/open_projects.txt"*/;  
							readTextFiles($openInitiatives);
					     ?>
	                   </div> -->

	                   <div id="tab3"  class="tab-content hide">
	                      <?php 
							$openProjects ="textFiles/DC/open_initiatives.txt";  
							readTextFiles($openProjects);
					     ?>
	                   </div>

	                   <div id="tab4"  class="tab-content hide">
	                      <?php 
							$pastProjects ="textFiles/DC/past_projects.txt";  
							readTextFiles($pastProjects);
					     ?>
	                   </div>

	                   <div id="tab5"  class="tab-content hide">
	                      <?php 
							$team ="textFiles/DC/team.txt";  
							readTextFiles($team);
					     ?>
	                   </div>

	                   <div id="tab6"  class="tab-content hide">
	                      <?php 
							$entrance ="textFiles/DC/entrance.txt";  
							readTextFiles($entrance);
					     ?>
	                   </div>

					</div>
				</div>
				<!-- row end above-->

			</div>
			<!-- container end above -->

		</div>
	<!-- wrapper end -->
	<?php
	        include('footer.php');
			include('jsLinks.php');
	?>
	<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>


</body>

</html>
