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
<div class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img class="img-responsive" src="img/logo.svg">OneHeart</a>
            
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                 <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    
                    <li><a href="org.php">Get Involved</a>
                    </li>
                    <li><a href="experience.php">Experiences</a>
                    </li>
                    
                </ul>
                <form class="navbar-form navbar-right" action="authenticateuser.php" method="POST" >
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="button" onclick="location.href='authenticateuser.php'" class="btn btn-default">Sign In</button>
                </form>
            </div>
        </center>
    </div>
</div>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/char11.jpg')">
        <div class="container">
            <div class="row" id="topPortion" >
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
                    <div class="site-heading">
                        <h1 class="">Getting Involved</h1>
                        <hr class="small">
                        <span class="subheading"><p>Organizations on One Heart share in the goal of building a strong involved community engaged in cooperation and support.  Check out all of these groups dedicated to the enrichment and growth of Rock Hill and the surrounding area.</p>
                        <div id="button1">
                        
                        	<div id="buttonWords1">	<p><a href="experience.html"/>Take Me To Your Leader</a></p></div>
                        </div>
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
            	<div class="text-center">
            			<h1 class="color">Recent Experiences</h1>
							<p>Rock Hill's community and support network inspired the creation of One Heart.  Members of the Rock Hill community can come to One Heart to post their community activites to inspire others, and find more opportunities to support the general public.</p>
							<p>Some of the most recent support activities of members in the Rock Hill area posted on One Heart are listed below.  Go to the <a href="experiences.html">Experiences page</a> to see more and post your community activities to share with and inspire others.</p>
					</div>
  					<div class="col-md-3 col-md-offset-1" id="post1">
  						
  							<div id="leftTopTest">
  								<div id="imgControl1">
  									<img src="img/Owl.svg"/>
  								</div>
  								
  								<div id="para1"class="text-center">
  									<div>
		<h3>dannleysprocess</h3>
		<h3>Bee Day</h3>
		<h3>Boys and Girls Club</h3>
		<p>We took a group of girls and boys to a bee farms.  The kids really enjoyed it and we learned a lot too.  This event allowed us to see how the organization works and get involved.</p>
	</div>
  								</div>
  							</div>
  					</div>
  					
  					<div class="col-md-3 col-md-offset-1" id="post1">
  								<div id="imgControl1">
  									<img src="img/Owl.svg"/>
  								</div>
  								
  								<div id="para1"class="text-justified">
  									<div>
		<h3>thegreatandpowerfulolsen</h3>
		<h3>Meal Drive</h3>
		<h3>Meals on Wheels</h3>
		<p>I took meals all over Rock Hill and met a lot of lovely people.  I really liked helping people and getting to know them at the same time.  I am consdering helping out at a local soup kitchen also.  This experience helped me realize how rewarding these opportunities can be for me while helping out in the community at the same time.</p>
	</div>
  								</div>
  					</div>
  					<div class="col-md-3 col-md-offset-1" id="post1">
  								<div id="imgControl1">
  									<img src="img/Owl.svg"/>
  								</div>
  								
  								<div id="para1"class="text-center">
  									<div>
		<h3>derksendesigner</h3>
		<h3>United in Design</h3>
		<h3>United Way</h3>
		<p>We helped United Way prepare for their yearly drive.  We not only assited with material distribution, but we helped them with the design.  Then we participated in a food drive and delivered the food to a local shelter.</p>
	</div>
  								</div>
  					</div>
  					
				</div>
				<div id="button2">
                        
                        	<div id="buttonWords1">	<p><a href="experience.html"/>Take Me To Your Leader</a></p></div>
                        </div>
				
        </div>
    </div>
    </div>
    <section class="intro-header" style="background-image: url('img/souppeople.jpg')">
      
            <div class="row" id="topPortion" >
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
                    <div class="site-heading">
                        <h1>Getting Involved</h1>
                        <hr class="small">
                        <span class="subheading"><p>Organizations on One Heart share in the goal of building a strong involved community engaged in cooperation and support.  Check out all of these groups dedicated to the enrichment and growth of Rock Hill and the surrounding area.</p>
                        
                </div>
            </div>
        </div>
    </section>
     <div class="container">
    
            	<div class="row">
            		
            		<div class="slides">

    <ul> <!-- slides -->
        <li><img src="img/pic1.jpg" alt="image01" />

            <div>Red Cros</div>

        </li>

        <li><img src="img/pic2.jpg" alt="image02" />

            <div>Help Homeless</div>

        </li>

        <li><img src="img/pic3.jpg" alt="image03" />
         <div>Join Events</div>

        </li>

        

    </ul>

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
                
                	<div class="row">
                		<form method="POST" action="insertuser.php">
                		
  						<div class="col-md-4"><label>Username</label><input type="text" class="form-control"  value="Username" name="username"></div>
  						<div class="col-md-4"><label>Password</label><input class="form-control"  value="Password" type="password" name="password"></div>
						<div class="col-md-4"><label>Email</label><input type="email" class="form-control" value="Email" name="email"></div>
  						<div class="col-md-4"><button type="button" onclick="location.href='insertuser.php'" class="form-control">Sign Up</button></div>
  					</form>
					</div>
					
                    
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
