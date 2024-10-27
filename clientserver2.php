<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Mohammed Alshmayri ePortfoli; Web Hosting and Domain Names</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<?php
		include('header.php');
	?>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Client Server Computting</h1>
		</div>
	</div>
	
	<div id="overviews" class="section lb">
        <div class="container">
		
		<br>
		<br>
		<br>
	 
	 <h2>What is the Client Server Model?</h2>
	 
	 <p>The client/server computing model, or architecture, 
	 is a computer/software/network model in which some computers
	 or software act as "clients" that make "requests" for a data 
	 or a service and other computers or software act as "servers"
	 that listen for and respond to these requests. For example,a 
	 web client (e.g. a computer running the Chrome browser) makes
	 requests for web pages from a web server (another computer running
	 a web server software such as Apache).</p>
	 
	 <h2>Advantages of the client server model</h2>
	 
	 <p>Several major advantages of the client server model are:</p>
	 
	 <ol>
		<li>Centralized storage</li>
		<li>Centralized security</li>
		<li>Backup and recovery</li>
		<li>Scalable</li>
	 </ol>
	 
	 <h2>Examples of Client/Server Software</h2>
	 
	 <table>
		<tr>
			<th>Software</th>
			<th>Client</th>
			<th>Server</th>
		</tr>
		<tr>
			<td>Web</td>
			<td>Safari<br>Chrom<br>Brave</td>
			<td>Apache<br>MS IIS</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>MS Outlook<br>Thunderbird</td>
			<td>MS Exchange</td>
		</tr>
		<tr>
			<td>FTP</td>
			<td>Filezilla<br>CyberDuck<br>CuteFTP</td>
			<td>FileZilla<br>WS FTP</td>
		</tr>
		<tr>
			<td>Web Development/Coding</td>
			<td>HTML<br>CSS<br>Javascrip<br>XMLt</td>
			<td>Python<br>PHP<br>SQL</td>
		</tr>
		<tr>
			<td>Database</td>
			<td>MS Access</td>
			<td>MS SQL Server<br>Oracle<br>MySQL<br>MariaDB</td>
		</tr>
		</table>
		
		<br>
		
		<h2>Examples of TCP/IP Prrotocols</h2>
		
		<ul>
			<li>HTTP - web pages</li>
			<li>HTTPS - secure web pages</li>
			<li>FTP - upload/download files</li>
			<li>VoIP - make phones calls</li>
			<li>SMTP - Send email</li>
		</ul>
		
		<h2>Example of Network Utilities and Services</h2>
		
		<ul>
			<li>ipconfig - utiltiy that is used to manage the IP address
			assigned to the machine it is running in (source: https://www.pcmag.com)</li>
			<li>tracert - utility that you can use to trace the path that
			an Internet Protocol (IP) packet takes to its destination. (source: https://microsoft.com)</li>
			<li>ping - utility, available on virtually any operating system
			with network connectivity, that acts as a test to see if a 
			networked device is reachable. (source: https://www.paessler.com)</li>
			<li>pathping - utility allowing the user to reveal the path between two hosts. (source: https://www.techopedia.com)
			<li><a href="https://www.whois.com/whois/">whois</a> 
			- a widely used Internet record listing that identifies who owns a domain and how to get in contact with them (source: www.domaintools.com)</li>
		</ul>
		
		<h2>Examples of Relative vs. Absolute Addresses</h2>
		
		<table>
			<tr>
				<th>Relative Addresses
					(internal links)</th>
				<th>Absolute Addresses
					(external links)</th>
			</tr>
			<tr>
				<td>css/custom.css (sub-folder)<br>
					documments/school/report.docx (two sub-folders)<br>
					../custom.css (parent folder)
				</td>
				<td>
					https://www.hfcc.edu/<br>
					c:\documents\index.html
				</td>
			</tr>
		</table>
		
		<h2>Link to Three IT Professional Organizations</h2>
		
		<ul>
			<li><a href="https://www.acm.org/">ACM (Association for Computing Machinery)</a></li>
			<li><a href="https://www.awc-hq.org/home.html">AWC (Association for Women in Computing)</a></li>
			<li><a href="https://asp-software.org/www/">ASP (Association of Software Professionals</a></li>
		</ul>
			
			
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">QuickCloud</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul><!-- end links -->
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>