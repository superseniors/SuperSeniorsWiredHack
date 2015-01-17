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
    <link href="css/clean-blog.min.css" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php"> <img class="img-responsive" src="img/logo.svg">OneHeart</a>
            
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a>
                    </li>
                    
                    <li class="active"><a href="org.php">Get Involved</a>
                    </li>
                    <li><a href="experience.php">Experiences</a>
                    </li>
                    
                </ul>
                <form class="navbar-form navbar-right" action="authenticateuser.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
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
  								
  								<div id="para1"class="text-justified">
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
                
                	<div class="row">
                		<form action="insertorgpost.php" method="post">
                		<label>Title</label>
                		<input type="text" class="form-control" placeholder="Title" rows="3" name="title">
                		
                	</div>
                	<div class="row">
  						<div class="col-md-4"><label>Date</label><input type="text" class="form-control" placeholder="Title" value="Date" type="date" name="startDate"></div>
  						<div class="col-md-4"><label>Start Time</label><input type="text" class="form-control" placeholder="Title" value="Start Time" type="time" name="startTime"></div>
  						<div class="col-md-4"><label>End Time<label><input type="text" class="form-control" placeholder="Title" value="End Time" type="time" name="endTime"></div>
					</div>
					
                    	<label>Event Description</label>
                           <textarea class="form-control" rows="3"></textarea>
                        <div class="row">
  							<div class="col-md-3"><label>Address</label><input type="text" class="form-control" placeholder="Address" value="Address"name="streetAddress" ></div>
  							<div class="col-md-3"><label>City</label><input type="text" class="form-control" placeholder="City" value="City" name="city" ></div>
  						
							<div class="col-md-3">  <label>State</label>
							<select name="state" class="form-control" name="state">
            <option value="AL">AL</option>
            <option value="AK">AK</option>
            <option value="AZ">AZ</option>
            <option value="AR">AR</option>
            <option value="CA">CA</option>
            <option value="CO">CO</option>
            <option value="CT">CT</option>
            <option value="DE">DE</option>
            <option value="DC">DC</option>
            <option value="FL">FL</option>
            <option value="GA">GA</option>
            <option value="HI">HI</option>
            <option value="ID">ID</option>
            <option value="IL">IL</option>
            <option value="IN">IN</option>
            <option value="IA">IA</option>
            <option value="KS">KS</option>
            <option value="KY">KY</option>
            <option value="LA">LA</option>
            <option value="ME">ME</option>
            <option value="MD">MD</option>
            <option value="MA">MA</option>
            <option value="MI">MI</option>
            <option value="MN">MN</option>
            <option value="MS">MS</option>
            <option value="MO">MO</option>
            <option value="MT">MT</option>
            <option value="NE">NE</option>
            <option value="NV">NV</option>
            <option value="NH">NH</option>
            <option value="NJ">NJ</option>
            <option value="NM">NM</option>
            <option value="NY">NY</option>
            <option value="NC">NC</option>
            <option value="ND">ND</option>
            <option value="OH">OH</option>
            <option value="OK">OK</option>
            <option value="OR">OR</option>
            <option value="PA">PA</option>
            <option value="RI">RI</option>
            <option value="SC">SC</option>
            <option value="SD">SD</option>
            <option value="TN">TN</option>
            <option value="TX">TX</option>
            <option value="UT">UT</option>
            <option value="VT">VT</option>
            <option value="VA">VA</option>
            <option value="WA">WA</option>
            <option value="WV">WV</option>
            <option value="WI">WI</option>
            <option value="WY">WY</option>
        </select>
						</div>
						<div class="col-md-3"><label>Zip Code</label><input type="text" class="form-control" placeholder="Title" value="Zip Code" name="zip"></div>
					</div>
					<button type="button" onclick="location.href='insertorgpost.php'" class="btn btn-default">Submit</button>
                </form>    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
