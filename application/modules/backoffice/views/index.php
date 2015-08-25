

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FAI Admin</title>

	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad-retina.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-iphone.png" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- bootstrap -->
    <link href="<?=  base_url()?>assets/lib/css/bootstrap.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?=  base_url()?>assets/lib/font-awesome-4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=  base_url()?>assets/lib/css/jquery-ui.css">    
    <link rel="stylesheet" type="text/css" href="<?=  base_url()?>assets/lib/css/toastr.css">

    <link href="<?=  base_url()?>assets/lib/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/jquery-1.10.2.min.js"></script>
	
</head>
<body>
	
	<div id="loading">
		<div>
			<div></div>
		    <div></div>
		    <div></div>
		</div>
	</div>

	<div id="wrapper">
		<div id="top">
			<div class="container">
				<div class="nav-button">
					<i class="fa fa-bars"></i>
				</div>
				<div class="main-logo"><a href="index.html"> FAI <span>Admin Page</span></a></div>

				<div class="profile">
					<ul>
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;">
								<i class="fa fa-bell"></i>
								<span class="badge badge-profile badge-green">4</span>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="fa fa-bell"></i> You have 4 new notifications</a></li>
							</ul>						
						</li>
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;">
								<i class="fa fa-user"></i>
								<span class="badge badge-profile badge-yellow">10</span>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="fa fa-user"></i> You have 10 new users</a></li>
							</ul>
						</li>
						<li><a href="#" onclick="return false;"><i class="fa fa-bar-chart-o"></i></a></li>
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;">
								<i class="fa fa-envelope"></i>
								<span class="badge badge-profile badge-blue">8</span>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="fa fa-envelope"></i> You have 8 unread messages</a></li>
							</ul>
						</li>
						<li class="user">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;">
								<!--<img src="images/profile.jpg" class="profile-img">-->
                                                            
								<div class="user-info"><?=$this->session->userdata('session_name') ?><br>
								<span class="user-email"><?=$this->session->userdata('session_type') ?></span></div>
								<div class="arrow"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#"><i class="fa fa-user"></i> Edit Profile</a></li>
                                                                <li><a href="#"><i class="fa fa-calendar"></i> My Calendar</a></li>
                                                                <li><a href="<?=  base_url() ?>index.php/frontpage/frontpage/dologout"><i class="fa fa-sign-out"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div> <!-- /container -->
		</div> <!-- /top -->

		<div id="main">
			<div class="container" id="main-container">
				<div class="nav"> <!-- added the class "show" to start with open menu -->
                                    <?php
                                        $controller = $this->uri->segment(2);
                                        $function = $this->uri->segment(3);
                                    ?>
					<ul>
                                            <li class="<?php if($controller=='backoffice'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/backoffice/index/"><i class="fa fa-dashboard"></i> Back Office</a>
                                            </li>
                                            <li class="<?php if($controller=='manageevent'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/manageevent/index/"><i class="fa fa-tags"></i> Manage Events</a>
                                            </li>

                                            <li class="<?php if($controller=='managearticle'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/managearticle/index/"><i class="fa fa-pencil"></i> Manage Articles</a>							
                                            </li>
                                            <li class="<?php if($controller=='managecategory'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/managecategory/index/"><i class="fa fa-th"></i> Manage Categories</a>
                                            </li>
                                            <li class="<?php if($controller=='managegallery'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/managegallery/index/"><i class="fa fa-image"></i> Manage Galleries</a>
                                            </li>
                                            <li class="<?php if($controller=='managepages'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/managepages/index/"><i class="fa fa-copy"></i> Manage Pages</a>
                                            </li>
                                            <li class="<?php if($controller=='managepages'){ echo 'active';}?>">
                                                <a href="<?=  base_url() ?>index.php/backoffice/manageuser/index/"><i class="fa fa-users"></i> Manage Users</a>
                                            </li>
					</ul>
                                    <a href="<?=base_url() ?>" class="btn btn-live"><i class="fa fa-eye"></i> Front Page</a>
					<div class="nav-logo">
						FAI<br>
						<span>Administration.</span>
					</div>
				</div>
				<div class="main-content">
					<div class="header">
                                            
						<h1 class="page-title">
                                                    <i class="fa fa-clipboard"> <?=  strtoupper($controller) ?></i><span><?=  strtolower($function) ?></span>
						</h1>
						<!--<div class="search">
							<input type="text" placeholder="Search...">
                                                        <i class="fa fa-search"></i>
						</div>-->
					</div>
					<!--<div class="intro">
						<ul class="clearfix">
							<li>
								<div class="intro-content">
									<div class="circle">
										<i class="fa fa-calendar"></i>
									</div> <!-- /circle 
									<div class="intro-info">
										<?=date('M d,Y') ?> <br> <span><?=date('l') ?></span>
									</div> <!-- /intro-info 
								</div> <!-- /intro-content 
							</li>
							<li>
								<div class="intro-content">
									<div class="circle">
										<div class="arc" id="arc-2"><div class="arc-in green"></div></div>
										<i class="fa fa-bar-chart-o"></i>
									</div> <!-- /circle 
									<div class="intro-info">
										$754,28 <br> <span>Total balance</span>
									</div> <!-- /intro-info 
								</div> <!-- /intro-content 
							</li>
							<li>
								<div class="intro-content">
									<div class="circle">
										<div class="arc" id="arc-3"><div class="arc-in blue"></div></div>
										<i class="fa fa-tag"></i>
									</div> <!-- /circle 
									<div class="intro-info">
										+364 <br> <span>New orders</span>
									</div> <!-- /intro-info 
								</div> <!-- /intro-content 
							</li>
							<li>
								<div class="intro-content">
									<div class="circle">
										<div class="arc" id="arc-4">
											<div class="arc-in yellow"></div>
											<div class="arc-in arc-sec yellow"></div>
										</div>
										<i class="fa fa-user"></i>
									</div> <!-- /circle 
									<div class="intro-info">
										+1584 <br> <span>New visitors</span>
									</div> <!-- /intro-info 
								</div> <!-- /intro-content 
							</li>
						</ul>
					</div> -->

                                    <?php   $this->load->view($view) ?>
					
					


				</div> <!-- /main-content -->
			</div>
		</div> <!-- /main -->
		
	</div> <!-- /wrapper -->
	<script type="text/javascript" src="<?=  base_url()?>assets/lib/js/prefixfree.min.js"></script>
        
        <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/Chart.js"></script>
        <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/jquery.hashchange.min.js"></script>
        <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/jquery.easytabs.min.js"></script>
        <script type="text/javascript" src="<?=  base_url()?>assets/lib/js/toastr.min.js"></script>
	
	<script type="text/javascript">
		$(window).load(function(){
			var mainW = $(window).height() -70;
			$('.nav').css({ height : mainW })
			$('.nav-logo').hide()
			$('#loading').fadeOut(1000);
			$('.nav-logo').fadeIn()
		})
		$(document).ready(function(){

			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "positionClass": "toast-bottom-right",
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			}

			$('#toastr-success').click(function(){
				toastr.success('Awesome! Could Lorem ipsum more...');

			})
			$('#toastr-info').click(function(){
				toastr.info('Awesome! Could Lorem ipsum more...')
			})
			$('#toastr-error').click(function(){
				toastr.error('Awesome! Could Lorem ipsum more...')
			})
			$('#toastr-warning').click(function(){
				toastr.warning('Awesome! Could Lorem ipsum more...')
			})
			$('#toastr-clear').click(function(){
				toastr.clear();
			})
			
			$(window).resize(function() {
				var mainW = $(window).height() -70;
		        $('.nav').css({ height : mainW })

		  		mQuery();
		    }); // Window resize


			function mQuery() {
				// Same as @media (max-width: 767px) -> hide the navigation
		        if ($('.fluid [class*="grid"]').css('float') == 'none' ){
					$('.nav').removeClass('show');
				} else {
					$('.nav').addClass('show');
				}
			}
			mQuery();

			// $('.nav').hide();
			$('.nav-button').click(function(){
				// $('.nav').toggleClass('show');
				$('.nav').toggleClass('show')
				//$('.nav').fadeToggle(function(){
					
				//})
			})
			$('.collapsible > a').click(function(){
				$(this).parent().toggleClass('open')
			})

			$(".spinner").spinner({
				icons: { down: "ui-icon-carat-1-s", up: "ui-icon-carat-1-n" },
				min:1,
				max:3
			});
			$("#spinner-table").on( "spin", function(event, ui) {
				var val = ui.value;
				if (val == 2) { $('#media-table tbody tr:last-child').fadeOut(); $('#media-table tbody tr:nth-child(2)').fadeIn() };
				if (val == 1) { $('#media-table tbody tr:nth-child(2), #media-table tbody tr:last-child').fadeOut(); };
				if (val == 3) { $('#media-table tbody tr').fadeIn(); };
			});

			$('#eTabs').easytabs();

			$('.slider').slider();

			$('.slider.range').slider({
				range: true,
			    max: 750,
			    values: [ 75, 300 ],
				slide: function( event, ui ) {
			        $( "#amount-min" ).html("$" + ui.values[0]);
			        $( "#amount-max" ).html("$" + ui.values[1]);
			      }
			});
			$( "#amount-min" ).html( "$" + $( ".slider.range" ).slider( "values", 0));
			$( "#amount-max" ).html( "$" + $( ".slider.range" ).slider( "values", 1));

			$('.slider.range-min').slider({
				range: "min",
				min:50,
				slide: function( event, ui ) {
			        $('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + $(".slider.range-min").slider("value") + "</div>")
			      },
			    stop: function( event, ui ) {
			    	$('.range-tooltip').delay(1000).fadeOut();
			    }
			});
			$( "#amount-block" ).html("Min: $" + $(".slider.range-min").slider( "option", "min"));
			$('.slider.range-min > a.ui-slider-handle').hover(function(){
				$('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + $(".slider.range-min").slider("value") + "</div>")
				$('.range-tooltip').delay(1000).fadeOut();
			})

			$( ".progressbar" ).progressbar({
		      value: 37
		    });

		}) // Ready
	</script>
	<script type="text/javascript">
		// Line Chart
		var lineChartData = {
			labels : ["2007","2008","2009","2010","2011","2012","2013"],
			datasets : [
				{
					fillColor : "rgba(143,182,82,0.12)",
					strokeColor : "#90b753",
					pointColor : "#fff",
					pointStrokeColor : "#90b753",
					data : [40,79,61,70,85,58,76]
				},
				{
					fillColor : "rgba(127,176,190,0.3)",
					strokeColor : "7fb0be",
					pointColor : "#fff",
					pointStrokeColor : "#72a9bc",
					data : [5,20,55,23,30,16,21]
				}
			]
			
		}

		var myLine = new Chart(document.getElementById("lineChart").getContext("2d")).Line(lineChartData, {
			bezierCurve : false,
			scaleFontSize : 10,
			scaleFontColor: "#929191",
			animation: false,
			scaleOverride : true,
			scaleSteps : 5,
			scaleStepWidth : 20,
			scaleStartValue : 0,
		});


		// Doughnut Chart
		var doughnutData = [
			{
				value: 40,
				color:"#90b753"
			},
			{
				value : 25,
				color : "#72a9bc"
			},
			{
				value : 14,
				color : "#ff5764"
			},
			{
				value : 21,
				color : "transparent"
			}
		];

		var myDoughnut = new Chart(document.getElementById("doughtChart").getContext("2d")).Doughnut(doughnutData, {
			segmentStrokeColor : "rgba(0,0,0,0.1)",
			percentageInnerCutout : 60,
			animation : false
		});
	
	</script>
</body>
</html>