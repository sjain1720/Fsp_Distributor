<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel = "icon" href ="logo.jpg"  type = "image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="comment.css">
	<link rel="stylesheet" type="text/css" href="circle.css">
  
    </head>
    <body style="background-color: #50E3C2; ">
        <div class="container-fluid" style="position: relative;">
            <!-- Header -->
            <div class="row " style="background-color:black">
                <div class="col-sm-2 col-xs-12">
                    <img src="logo.jpg" class="img">
						<h3 style="color: white;"> BRANS<br>
						 CONSULTANTS</h3>
                </div>
                <div class="col-sm-8 col-xs-10 " style="background-color: black;">
                    <div class="row centermenu" style="background-color: black; width: 110%; margin-left: 10%;">

                        <input type="text" placeholder="Search..">
                         <?php
    session_start();

    if(isset($_SESSION['email']))
    {
        echo '<a href="dashboard.php"<button id="buttontwo" style="margin-right:10px">profile</button></a>';
        echo '<a href="logout.php?logout"<button id="buttontwo">Logout</button></a>';
    }
    else
    {
        header("location:index.html");
    }

?>
							
							
                    </div>
                    <div class="row" style="background-color: black; width: 110%; margin-left: 10%;">
                        <nav class="navbar navbar-inverse" style="background-color: black;">
                            <div class="container-fluid">
                            <nav class="navbar navbar-inverse">
                               
                          <div class="navbar-header" style="background-color: black;">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                          </button>
                          
                          </div>
                          <div class="collapse navbar-collapse" id="myNavbar" style="background-color: black;">
                              
                              <ul class="nav navbar-nav">
                              
                                <li > <a href="home.html">HOME </a>  </li>
                              
                          
                              </ul>
                              
                              <ul class="nav navbar-nav">
                                <li class="dropdown">
                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES
                                  <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="dist1.html">MANUFACTURER</a></li>
                                        <li><a href="dist1.html">DISTRIBUTOR</a></li>
                                        <li><a href="dist1.html">SUPER STOCKIST</a></li>
                                        <li><a href="dist1.html">SERVICE PROVIDER</a></li>
                                        <li><a href="dist1.html">RETAILER</a></li>
                                        <li><a href="dist1.html">BUY/SELL</a></li>
                                        <li><a href="dist1.html">OEM MANUFACTURING</a></li>                        
                                        <li><a href="dist1.html">MODERN TRADE PARTNER</a></li>
                                        <li><a href="dist1.html">INSTITUITIONAL PARTNER</a></li>
                                  </ul>
                                </li>
                              </ul>
                              
                              <ul class="nav navbar-nav">
                                <li>
                                    <a href="Overseas1.html">OVERSEAS</a></li>
                          
                              </ul>
                            
                              <ul class="nav navbar-nav">
                                <li>
                                    <a href="Directory1.html">DIRECTORY</a></li>
                          
                              </ul>
                              <ul class="nav navbar-nav">
                                <li>
                                    <a href="about1.html">ABOUT US</a></li>
                          
                              </ul>
                              
                              <ul class="nav navbar-nav">
                                <li>
                                    <a href="Works1.html">HOW IT WORKS</a></li>
                          
                              </ul>
                              <ul class="nav navbar-nav">
                                <li>
                                    <a href="blog1.html">BLOGS</a></li>
                          
                              </ul>
                             
                                  
                            </div>
                          </div>
                            
                          </nav>
                          
                          
                    </div>
                </div>
                <div class="col-sm-2 visitor" style=" margin-top: 60px;">
                    <span style="color: white; font-size: 18px;float: right; " >
                        <p><span class="glyphicon glyphicon-eye-open"></span>Visitors:0</p>    
                  
                    </span>
                  
                </div>
                
                
            </div>
            <!-- bgimage, your success, circle -->
            <div class="row bgimage">
            <!-- Your success begin with us -->
            <div class="row success" style="margin-left: 10%;">
                    <br>
			    <h1> Your Success<br>
			     Begins with Us</h1>
                </div>
                
                <!-- circle -->
                <div class="row">
                    <div class="col-sm-12 col-xs-12" style=" margin-left: 8%; margin-top: 5%;">
                        <div class="circle1">
                
                            <div class="Distributor">
                            <b><p>Distributor</p></b>
                            <a href="dist1.html">
                                <img src="images/warehouse.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
                            </a>
                            <p style="color: black; position: absolute; left: 50px;">.<br>.<br>.<br>.<br>.</p>
                            </div>
                            <div class="Manufacturer">
                            <b><p>Manufacturer</p></b>
                            <a href="dist1.html">
                                <img src="images/labourer.png" style="border-radius: 50%; width: 100px; height: 100px;">
                            </a>
                            <p style="color: black; position: absolute; left: 50px;">.<br>.<br>.<br>.<br>.</p>
                            </div>
                            <div class="retailer">
                            <b><p>Retailer</p></b>
                            <a href="dist1.html">
                                <img src="images/retailer.png" style="border-radius: 50%; width: 100px; height: 100px;">
                            </a>
                            <p style="color: black; position: absolute; left: 50px;">.<br>.<br>.<br>.<br>.</p>
                            </div>
                            <div class="OEM">
                            <b><p>OEM Manufacturing</p></b>
                            <a href="dist1.html">
                                <img src="images/brand oem.png" style="border-radius: 50%; width: 100px; height: 100px;">
                            </a>
                            <p style="color: black; position: absolute; left: 50px;">.<br>.<br>.<br>.<br>.<br></p>
                            </div>
                            <div class="Institutional">
                            <b><p>Institutional Partner</p></b>
                            <a href="dist1.html">
                                <img src="images/institutional trade.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
                            </a>
                            <p style="color: black; position: absolute; left: 50px;">.<br>.<br>.<br>.<br>.<br>.</p>
                            </div>
                            <div style="position: relative; top: 100px;">
                                <p style="color: black;">..............................................................................................................................................................................................................................................</p>
                            </div>
                            
                            <div style="position: relative; top: 80px; left: 100px;">
                                <p style="color: black; position: absolute; left: 50px; top: -15px;"><br>.<br>.<br>.<br>.<br>.</p>
                                  
                                <div class="Supermarket">
                                    <a href="dist1.html">
                                        <img src="images/super stockist.png" style="border-radius: 50%; width: 100px; height: 100px;">
                                    </a>
                                    <b><p>Modern Trade Partner</p></b>
                                
                                </div>
                                <p style="color: black; position: absolute; left: 250px; top: -15px;"><br>.<br>.<br>.<br>.<br>.</p>
                                    
                                <div class="buy_sell">
                                    <a href="dist1.html">
                                        <img src="images/buysell.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
                                    </a>
                                    <b> <p>Buy/Sell</p></b>
                                </div>
                                <p style="color: black; position: absolute; left: 450px; top: -15px;"><br>.<br>.<br>.<br>.<br>.</p>
                                    
                                <div class="super_stockist">
                                    <a href="dist1.html">
                                        <img src="images/super stockist.png" style="border-radius: 50%; width: 100px; height: 100px;">
                                    </a>
                                    <b><p>Super Stockist</p></b>
                                
                                </div>
                                <p style="color: black; position: absolute; left: 650px; top: -15px;"><br>.<br>.<br>.<br>.<br>.</p>
                                    
                                <div class="service_provider">
                                    <a href="dist1.html">
                                        <img src="images/service provider.png" style="border-radius: 50%; width: 100px; height: 100px;">
                                    </a>
                                     <b><p>Service Provider</p></b>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            
            </div>
            <!-- circle only for mobile view -->
            <div>
                <div class="row circle_content">
                    <p style="font-size: 20px; margin-left: 15%;"><b>What our website provides</b></p>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/warehouse.jpg" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 18%; font-size: 20px;" href="dist.html">Distributor</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/labourer.png" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 15%; font-size: 20px;" href="dist.html">Manufacturer</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/retailer.png" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 20%; font-size: 20px;" href="dist.html">Retailer</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/brand oem.png" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 5%; font-size: 20px;" href="dist.html">OEM Manufacturing</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/super stockist.png" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 5%; font-size: 20px;" href="dist.html">Modern Trade Partner</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/buysell.jpg" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 20%; font-size: 20px;" href="dist.html">Buy/Sell</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/super stockist.png" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 13%; font-size: 20px;" href="dist.html">Super Stocklist</a>
                    </div>
                    <br>
                    <div style="margin-left: 70px;">
                        <div>
                            <img src="images/service provider.png" style="border-radius: 50%; width: 100px; height: 100px; margin-left: 50px;" >
                        </div>
                       <a style="margin-left: 10%; font-size: 20px;" href="dist.html">Service Provider</a>
                    </div>
                    <br>
                </div>
            </div>
            <!-- what our customer say -->
            <div class="row" style="background-color: black;">
                <div class="container">
                    <div class="row">
                        <h1 style="color: blanchedalmond; text-align: center; font-size: 5vh; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">What Our Customer Say.....</h1></b><br><br><br>
	
                        <div class="col-sm-4 col-xs-12" style="padding:1%">
                            <div style=" border: solid wheat; background-color: black;">
                                <br>
                            <h2 style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; color: rgb(97, 204, 193); text-align: center; font: bold;">Maggi Kahn </h2>
                            <br><p style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; color: rgb(97, 204, 193); text-align: center; font:lighter">Marketing VP</p>
                            <div>
                                <br><br><br><br>
                            <p style="padding:inherit; text-align: center; font:lighter;font-size:15px; color: white;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.</p>
                        </div>
                        <br><br><br>
                        <div style="position: center;">
                        <img src="logo.jpg" style="height: 50px; width: 50px ;"class="centert" alt="">
                    </div>
                        </div>
                        </div>
                        <div class="col-sm-4 col-xs-12" style="padding:1%;">
                            <div style=" border: solid wheat; background-color: black;">
                                <br>
                            <h2 style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; color: rgb(97, 204, 193); text-align: center; font: bold;">Maggi Kahn </h2>
                            <br><p style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; color: rgb(97, 204, 193); text-align: center; font:lighter">Marketing VP</p>
                            <div>
                                <br><br><br><br>
                            <p style="padding:inherit; text-align: center; font:lighter;font-size:15px; color: white;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.</p>
                        </div>
                        <br><br><br>
                        <div style="position: center;">
                        <img src="logo.jpg" style="height: 50px; width: 50px ;"class="centert" alt="">
                    </div>
                        </div>
                        </div>
                        <div class="col-sm-4 col-xs-12" style="padding:1%">
                            <div  style=" border: solid wheat; background-color: black;">
                                <br>
                            <h2 style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; color: rgb(97, 204, 193); text-align: center; font: bold;">Maggi Kahn </h2>
                            <br><p style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; color: rgb(97, 204, 193); text-align: center; font:lighter">Marketing VP</p>
                            <div>
                                <br><br><br><br>
                            <p style="padding:inherit; text-align: center; font:lighter;font-size:15px; color: white;">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.</p>
                        </div>
                        <br><br><br>
                        <div style="position: center;">
                        <img src="logo.jpg" style="height: 50px; width: 50px ;"class="centert" alt="">
                    </div>
                        </div>
                        </div>
                    </div>
                    <!-- add your comment -->
                    <div class="row mobile" style="z-index: 1;">
                        <button class="open-button" onclick="openForm()">ADD YOUR COMMENTS</button>
                        <div class="form-popup" id="myForm" style="color: black;">
                            <form action="/action_page.php" class="form-container">
                              <h1>ADD YOUR COMMENTS</h1>
                          
                              <label for="user_name"><b>Name</b></label>
                              <input type="text" placeholder="Enter Name" name="user_name" required>
                          
                              <label for="Proffession"><b>Proffession</b></label>
                              <input type="text" placeholder="Enter Proffession" name="Proffession" required>
                              <label for="comment1"><b>Comments</b></label>
                          <br>
                              <textarea name="comment1" id="" cols="40" rows="10" placeholder="Share Your Views"></textarea>
                              <button type="submit" class="btn">Submit</button>
                              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                          </div>
                          
                          <script>
                          function openForm() {
                            document.getElementById("myForm").style.display = "block";
                          }
                          
                          function closeForm() {
                            document.getElementById("myForm").style.display = "none";
                          }
                          </script>
                    </div>
                   
                    <div>

                    </div>
                    
                </div>
                
            </div>
            <!-- winston churchill -->
            <div class="row" style="margin-top: 4%;">
                <p class="font_2" style="font-size:35px; text-align:center;"><span style="font-size:35px;"><span class="color_15"><b><i>“Success is not final; failure is not fatal:</i> </b </span></span></p>
                <p class="font_2" style="font-size:35px; text-align:center;"><span style="font-size:35px;"><span class="color_15"><b><i> It is the courage to continue that counts”</i></b> </span></span></p>
                <p class="font_7" style="text-align:center;"><span class="color_15"><span style="letter-spacing:0.1em;font-size: 27px;"><b><i>-Winston Churchill</i></b> </span></span>
                </p>

            </div>
        </div>
        <!-- footer -->
        <div class="row">
            <footer class="footer-distributed">
 
                <div class="footer-left">
              <img src="logo.jpg">
                    <h3>About<span> Brans Consultants</span></h3>
     
                    <p class="footer-links">
                        <a href="#">Home</a>
                        |
                        <a href="#">Blog</a>
                        |
                        <a href="#">About</a>
                        |
                        <a href="#">Contact</a>
                    </p>
     
                    <p class="footer-company-name">© 2019 Brans Consultants Pvt. Ltd.</p>
                </div>
     
                <div class="footer-center">
                    <div>
                        <i class="fa fa-map-marker"></i>
                          <p><span>309 - XYZ,
                             Bldg. No. A - 1, Sector - 1</span>
                            Mahape, Navi Mumbai - 400710</p>
                    </div>
     
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+91 22-27782183</p>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:support@bransconsultants.com">support@bransconsultants.com</a></p>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                        <span>About the company</span>
                        We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </footer>
        </div>
        <!-- chatbot and whatsapp -->
        <div class="chat">
            <div style="position: absolute; bottom: 0;">
                <img src="images/chat.jpg" id="ab" style="position: fixed;width: 75px;height: 75px;border-radius: 52%;right: 0%;;z-index: 0.9;" alt="">
	
	                <a href="https://api.whatsapp.com/">	<img src="images/WhatsApp_Logo_.png" id="cd" style="position: fixed;width: 75px;height: 75px;border-radius: 70%;right: 7%; z-index: 0.9;" alt=""></a>
	
		            <iframe src="https://news.anyapp.me/wix/newsfeed/widget.php?cacheKiller=1592036182873&amp;compId=comp-kb3jz041&amp;currency=INR&amp;deviceType=desktop&amp;height=298&amp;instance=CJ2xxH6XV08v-_xxYNZ9dvkafdulYOr5MbMnckDQlOE.eyJpbnN0YW5jZUlkIjoiOGEwZWI0NDYtNDIxMC00MTdlLTk1MDUtZTJkMGYzYzIzYTExIiwiYXBwRGVmSWQiOiIxMmQ4MjhmNy1hMjk3LTBiYzAtYTE0Ny1lODk3NjgyMzgxN2QiLCJzaWduRGF0ZSI6IjIwMjAtMDYtMTNUMTE6NTI6MDYuNjA0WiIsImRlbW9Nb2RlIjpmYWxzZSwiYWlkIjoiMjMwMjI5MzktMTk2NS00ZTMyLWE2YmEtYzE4Mjc1ODQ2OTFjIiwic2l0ZU93bmVySWQiOiI1MmI4ODExMC05YTM2LTQ5NGMtOWEzNi0wYjc2OTQ3OTc0ZjEifQ&amp;locale=en&amp;pageId=c1dmp&amp;siteRevision=253&amp;tz=Asia/Kolkata&amp;viewMode=site&amp;viewerCompId=comp-kb3jz041&amp;width=234" frameborder="0" style="padding-left: 200%;width: 234px; height: 290px; overflow: hidden;scroll-behavior: smooth;position: relative;">
			</iframe>
              
            </div>
        </div>
        <div class="chatbot" >
            <div style="position: absolute; bottom: 0;">
                <img src="images/chat.jpg" id="ab" style="position: fixed;width: 50px;height: 50px;border-radius: 52%;left: 270px;z-index: 1;margin-top: 40%;" alt="" >
	
	                <a href="https://api.whatsapp.com/">	<img src="images/WhatsApp_Logo_.png" id="cd" style="position: fixed;width: 50px;height: 50px;border-radius: 70%;left: 270px; z-index: 1;margin-top: 30%;" alt=""></a>
	
		            <iframe src="https://news.anyapp.me/wix/newsfeed/widget.php?cacheKiller=1592036182873&amp;compId=comp-kb3jz041&amp;currency=INR&amp;deviceType=desktop&amp;height=298&amp;instance=CJ2xxH6XV08v-_xxYNZ9dvkafdulYOr5MbMnckDQlOE.eyJpbnN0YW5jZUlkIjoiOGEwZWI0NDYtNDIxMC00MTdlLTk1MDUtZTJkMGYzYzIzYTExIiwiYXBwRGVmSWQiOiIxMmQ4MjhmNy1hMjk3LTBiYzAtYTE0Ny1lODk3NjgyMzgxN2QiLCJzaWduRGF0ZSI6IjIwMjAtMDYtMTNUMTE6NTI6MDYuNjA0WiIsImRlbW9Nb2RlIjpmYWxzZSwiYWlkIjoiMjMwMjI5MzktMTk2NS00ZTMyLWE2YmEtYzE4Mjc1ODQ2OTFjIiwic2l0ZU93bmVySWQiOiI1MmI4ODExMC05YTM2LTQ5NGMtOWEzNi0wYjc2OTQ3OTc0ZjEifQ&amp;locale=en&amp;pageId=c1dmp&amp;siteRevision=253&amp;tz=Asia/Kolkata&amp;viewMode=site&amp;viewerCompId=comp-kb3jz041&amp;width=234" frameborder="0" style="padding-left: 200%;width: 234px; height: 290px; overflow: hidden;scroll-behavior: smooth;position: relative;">
			</iframe>
              
            </div>
        </div>
    </body>
</html>