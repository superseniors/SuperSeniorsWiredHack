<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Heart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    
     <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
 <!-- Navigation -->
<div class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <img class="img-responsive" src="img/logo.svg">OneHeart</a>
            
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a>
                    </li>
                    
                    <li><a href="org.php">Get Involved</a>
                    </li>
                    <li class="active"><a href="experience.php">Experiences</a>
                    </li>
                    
                </ul>
                <form class="navbar-form navbar-right" action="authenticateuser.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="button" onclick="location.href='authenticateuser.php'" class="btn btn-default">Sign In</button>
                </form>
            </div>
        </center>
    </div>
</div>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Getting Involved</h1>
                        <hr class="small">
                        <span class="subheading"><p>Organizations on One Heart share in the goal of building a strong involved community engaged in cooperation and support.  Check out all of these groups dedicated to the enrichment and growth of Rock Hill and the surrounding area.</p>
            <p>This is not only an opportunity to connect with your local community, but a opportunity to help others in new ways.  Read about the involvment of other people on the <a href="experiences.html">Experiences page</a> and let their ideas inspire to get involved in new ways.  Thank you for helping make our community great!</p></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row" id="first">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	<div class="row">
  					<div class="col-md-3 col-md-offset-1" id="post1">
  							<div id="leftTopTest">
  								<div id="imgControl1">
  									<img src="img/Owl.svg"/>
  								</div>
  								
  								<div id="para1"class="text-center">
  									<p>
  										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  									</p>
  								</div>
  							</div>
  					</div>
  					
  					<div class="col-md-3 col-md-offset-1" id="post1">
  								<div id="imgControl1">
  									<img src="img/Owl.svg"/>
  								</div>
  								
  								<div id="para1"class="text-center">
  									<p>
  										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  									</p>
  								</div>
  					</div>
  					<div class="col-md-3 col-md-offset-1" id="post1">
  								<div id="imgControl1">
  									<img src="img/Owl.svg"/>
  								</div>
  								
  								<div id="para1"class="text-center">
  									<p>
  										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  									</p>
  								</div>
  					</div>
				</div>
				
				<div class="row"  id="second">
				
  					<div class="col-md-3 col-md-offset-1" id="post2">
  						<div id="imgControl2">
  							<img src="img/Lion.svg"/>
  						</div>
  						<div id="para2"class="text-center">
  							<p>
  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  							</p>
  						</div>
  					</div>
  					
  					<div class="col-md-3 col-md-offset-1" id="post2">
  						<div id="imgControl2">
  							<img src="img/Lion.svg"/>
  						</div>
  						<div id="para2"class="text-center">
  							<p>
  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  							</p>
  						</div>
  					</div>
  					
  					<div class="col-md-3 col-md-offset-1" id="post2">
  						<div id="imgControl2">
  							<img src="img/Lion.svg"/>
  						</div>
  						<div id="para2"class="text-center">
  							<p>
  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  							</p>
  						</div>
  					</div>
				</div>
				<div class="row"  id="third">
				
  					<div class="col-md-3 col-md-offset-1" id="post3">
  						<div id="imgControl3">
  							<img src="img/Lion.svg"/>
  						</div>
  						
  						<div id="para3"class="text-center">
  							<p>
  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  							</p>
  						</div>
  					</div>
  					
  					<div class="col-md-3 col-md-offset-1" id="post3">
  						<div id="imgControl3">
  							<img src="img/Lion.svg"/>
  						</div>
  						
  						<div id="para3"class="text-center">
  							<p>
  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  							</p>
  						</div>
  					</div>
  					
  					<div class="col-md-3 col-md-offset-1" id="post3" >
  						<div id="imgControl3">
  							<img src="img/Lion.svg"/>
  						</div>
  						
  						<div id="para3"class="text-center">
  							<p>
  								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan interdum eleifend. Nullam ullamcorper quis tortor eget efficitur. Donec hendrerit bibendum urna, quis maximus felis amet.
  							</p>
  						</div>
  					</div>
				</div>
           	</div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                	<form id="OrgContent" method="POST" action="insertposts.php">
                	<div class="row">
                		<div class="col-md-6"><label>Title</label><input type="text" class="form-control" placeholder="Title"></div>
  						<div class="col-md-6"><label>Organization</label><input type="text" class="form-control" placeholder="Organization" value="Organization" ></div>
  						
					</div>
					
                    	<label>Event Description</label>
                           <textarea class="form-control" rows="3"></textarea>
<button type="button" onclick="location.href='insertposts.php'" class="btn btn-default">Submit</button>
					</form>
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
