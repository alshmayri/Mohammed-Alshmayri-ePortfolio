<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Basic PHP Examples</title>  
    <meta name="keywords" content="Basic PHP Examples">
    <meta name="description" content="Basic PHP Examples">
    <meta name="author" content="Mohammed Alshmayri">

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
	
	<!-- prism scripts -->
	<link href="css/prism.css" rel="stylesheet">
	<script src="js/prism.js"></script>
	<!-- end prism scripts -->

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
			<h1>Basic PHP Examples</h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
		
            <h3>PHP Example #1: Basic PHP Output, Concatenation, and Built-In Functions</h3>
			
			<pre><code class="language-php">
			&lt;?php
				echo "&lt;p>Hello World!&lt;/p>";
				echo "&lt;P>\"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.\" - Linus Torvalds&lt;/p>";
				echo "&lt;p>Today is " . date("l n/j/Y") . "&lt;/p>";
				echo "&lt;p>Go to &lta href=\"https://www.w3schools.com/w3css/\">W3CSchools CSS Tutorial&lt;/a>&lt;/p>";
			?>
			</code></pre>
			
			<p><a href="ex1.php">Run it now</a></p>
			
			<h3>PHP Example #2: Simple Variables, Math and a Function</h3>
			
			<pre><code class="language-php">
			&lt;?php
				echo "&lt;p>Random times table:";
				$num1 = mt_rand(1,12);
				$num2 = mt_rand(1,12);
				$total = $num1 * $num2;
				echo "$num1 * $num2 = $total&lt;/p>";
			?>
			</code></pre>
			
			<p><a href="ex2.php">Run it now</a></p>
			
			<h3>PHP Example #3: Use of single quotes</h3>
			
			<pre><code class="language-php">
			 &lt;?php
				echo "&lt;p>Ethics and Responsibility in IT&lt;/p>";
				echo '&lt;ol>
						&lt;li>&lt;a href="https://www.acm.org/code-of-ethics">ACM Code of Ethics and Professional Conduct&lt;/a>&lt;/li>
						&lt;li>&lt;a href="https://www.ieee.org/about/corporate/governance/p7-8.html">IEEE Code of Ethics&lt;/a>&lt;/li>
						&lt;li>&lt;a href="https://www.issa.org/issa-code-of-ethics/">ISSA Code of Ethics&lt;/a>&lt;/li>
					  &lt;/ol>';
			?>
			</code></pre>
			
			<p><a href="ex3.php">Run it now</a></p>
			
			<h3>PHP Example #4: Decision IF statement</h3>
			
			<pre><code class="language-php">
			 &lt;?php
				echo "&lt;p>Grade Calculator&lt;/p>";
				$grade = 96.5;
				if ($grade > 100)
					echo "&lt;p>Your grade is an A+&lt;/p>";
				elseif ($grade >= 90)
					echo "&lt;p>Your grade is an A&lt;/p>";
				elseif ($grade >= 80)
					echo "&lt;p>Your grade is an B&lt;/p>";
				elseif ($grade >= 70)
					echo "&lt;p>Your grade is an C&lt;/p>";
				elseif ($grade >= 60)
					echo "&lt;p>Your grade is an D&lt;/p>";
				else
					echo "&lt;p>Your grade is an E&lt;/p>";
			?>
			</code></pre>
			
			<p><a href="ex4.php">Run it now</a></p>
			
			<h3>PHP Example #5: Decision IF statement</h3>
			
			<pre><code class="language-php">
			 &lt;?php
				$num = rand(1,4);
				echo "&lt;h2>Recommended Movie Web Sites (Refresh for new Recommendation)&lt;/h2>";
				if ($num == 1)
					echo "&lt;p>&lt;a href=\"https://www.netflix.com/\">https://www.netflix.com/&lt;/a>&lt;/p>";
				elseif ($num == 2)
					echo "&lt;p>&lt;a href=\"https://www.hulu.com/\">https://www.hulu.com/&lt;/a>&lt;/p>";
				elseif ($num == 3)
					echo "&lt;p>&lt;a href=\"https://www.sonypictures.com/movies\">https://www.sonypictures.com/movies&lt;/a>&lt;/p>";
				elseif ($num == 4)
					echo "&lt;p>&lt;a href=\"https://www.disneyplus.com/\">https://www.disneyplus.com/&lt;/a>&lt;/p>";
			?>
			</code></pre>
			
			<p><a href="ex5.php">Run it now</a></p>
			
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