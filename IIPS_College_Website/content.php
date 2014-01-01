<!-- This page serves the content for Home page. It includes
slider, notice, news_events box, Link to quicklink file
and testimonial section -->

<div class="container" style=" background-color:#FFFFFF; ">
	<br><br>
	<!-- 1st span12 started "slider + notices" ended 
	-->
	<div class="row">
        <div class="col-md-9">
		  <div id="wrapper">

			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="images/slider/iips2.jpg" />
					<img src="images/slider/iips8.jpg" title="This is an example of a caption" /></a>
					<img src="images/slider/iips6.jpg" data-transition="slideInLeft" />
					<img src="images/slider/iips1.jpg" title="#htmlcaption" />
					<img src="images/slider/iips5.jpg" title="#htmlcaption" />
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
				</div>
			</div>
		   </div>
        </div>
     <!-- notice  block start -->
     <div class="col-md-3 text-center">
     	   <div class="panel panel-primary boxShadow" style="margin-top:-20px; font-size:15px">
				<div class="panel-heading">
					<h3 class="panel-title">Notice/Announcements</h3>
				</div>
				<div class="panel-body" align="left">
				  <a href="#"> <i class="icon-pushpin"></i> NAAC - Arrival in New Year 2014 !  </a><br>
				  <a href="#"> <i class="icon-pushpin"></i> College reopen date has been decided ! </a><br>
				  <a href="#"> <i class="icon-pushpin"></i> Guest Lecture on "Artificial Intelligence" </a><br>
				  <a href="#"> <i class="icon-pushpin"></i> Download admit card from MPOnline </a><br>
				  <a href="#"> <i class="icon-pushpin"></i> Last Date of Scholarship Form is 22nd Sept 2013 </a><br>
				  <a href="#"> <i class="icon-pushpin"></i> NAAC Coming Soon </a>
				</div>
				<div class="panel-footer">
					<a href="notice_announcement.php"><b>View All &raquo;</b></a>
				</div>
		  </div><!--Panel for Annoucements End -->
     </div><!--Col-md-3 End -->
     <!-- Notice block end -->
   </div>
		<!-- span9 "slider" part ended -->
		<!-- news/event section started -->
	<div class="row">
			 
		<div class="col-md-12">
		   <div class="panel panel-primary boxShadow" style="overflow:hidden;">
			  <div class="panel-heading">
				 <h3 class="panel-title">News & Events</h3>
			  </div>
			  <div class="panel-body">
				 <ul class="nav nav-tabs" id="myTab">
					<li class="active">
					   <a href="#news">News</a>
					</li>
					<li class="disabled">
						<a href="#">Events</a><!-- insert '#events' in href to enable event tab -->
					</li>
				  </ul>
				  <div class="tab-content">
					 <div class="tab-pane active" id="news" >
						<ul class="media-list">
						   <li class="media">
							  <div class="media-body"><br>
							  
								    <div class="row">
										<div class="col-md-1">
										  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/60x60/auto" alt="Generic placeholder image">
										</div>
										<div class="col-md-11">
											<h5>IIPS Organizing Music Concert <span class="text-muted"><a href="news.php#music">Click Here</a> for details</span> <span class="pull-right">Posted - 31st Dec 2013</span></h5>	
										</div>
									</div><br><!-- end of row class -->
									
									<div class="row">
										<div class="col-md-1">
										  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/60x60/auto" alt="Generic placeholder image">
										</div>
										<div class="col-md-11">
											<h5>Students Preparing for Synergy 2014 Event <span class="text-muted"><a href="news.php#synergy">Click Here</a> for details</span><span class="postDate pull-right">Posted - 28th Dec 2013</span></h5>	
										</div>
									</div><!-- end of row class -->
							   </div>
							</li>
						</ul>
	                  </div>
	
				      <div class="tab-pane" id="events">
						<ul class="media-list">
						   <li class="media">
							  <a class="pull-left" href="#"> <img class="media-object" src="..." alt="..."> </a>
							  <div class="media-body">
								 <br /><h4 class="media-heading">Expressions</h4>
									 Expression Coming Soon
							  </div>
							</li>
						  </ul>
					   </div>
				   </div><!--.tab-content -->
				</div><!--Panel body -->
				<div class="panel-footer  text-center">
					<a href="news.php"><b>View All &raquo;</b></a>
				</div>
			</div><!--End of Panel -->
		</div><!--End of col-md-12 -->
	</div><!--End of Row -->
	<!-- News/event section end -->
	

	<div class="row">
   	   <div class="col-md-9 quicklist">
     	 <?php include('quicklinks.php') ?><br>
  	 </div><!--col-md-8 class ended -->
  
  	 <div class="col-md-3 testimonial text-center">
  		<!-- testimonial started -->
		<div class="panel panel-primary  boxShadow" style="height:180px;">
			<div class="panel-heading">
				<h3 class="panel-title">Testimonials</h3>
			</div>
			<div class="panel-body">

			  <ul id="button_quotes" style=" list-style-type:none;  margin-left:-20px;">
				<li>
					" We Can't wait to see this
					Website on internet "<br><br>
					<cite>- World</cite></pre>
				</li>
				<li>
					" Finally IIPS website is working FINE !! "<br><br>
					<cite>&mdash; Students</cite>
				</li>
				<li>
					" But still you are far away from
					Professional Website "<br><br>
				 	<cite>&mdash; Testers</cite>
				</li>
				<li>
				   " We will hire those Developers !! "<br><br>
					<cite>&mdash; Google</cite>
				</li>
			  </ul>
		    </div><!--panel body Ended -->
  	    </div><!--Panel Ended -->
	  </div><!--col-md-4 ended -->
  </div><!--row Class ended --><br>
</div>
<!-- container class ended -->