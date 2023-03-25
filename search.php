<!DOCTYPE html>
<html>
<head>
  <title>Distributor's Website(FSP)</title>
        <link rel='icon' type='image/png' href="img/dog_dab.jpg">
        <link rel="stylesheet" href='style1.css'>
</head>
<body>




<?php 

$q = $_POST['q'];

   

if($q == ''){
		header('Location: index.html');
    }
    else

    {
    	$con=mysqli_connect('localhost','root','','sample');
    	
        $sql = "SELECT * FROM retailer WHERE cname LIKE '%$q%' OR cinfo LIKE '%$q%' ";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


 
  // output data of each row
  
  
  
  
  ?>

        <div class="dimen">
            <img src="img/icon.jpeg" class="profile">

            <div class="name">
                <p><b><?php echo $row['cname'] ?></b> <br> <?php echo $row['cinfo'] ?></p>
                <p class="premium">Premium</p>
            </div>
            <hr class="line" />
            <ul class="social">
                <li class="li-arrange">
                    <img src="img/phone.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['phone'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/gmail.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['email'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/likedin.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">LinkedIn</a>
                </li >
                <li class="li-arrange">
                    <img src="img/facebook.jpeg" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">Facebook</a>
                </li>
            </ul>
            <div class="detail">
                <b>Interests: </b>
                 Business Intelligence or Predictive Analytics on Oracle or Microsoft platform.
                    Developing areas such as UX, Big Data Implementation tools such as SAP HANA, HADOOP )
                    Automation Engineering.
                   
            </div>
            <div class="detail">
                <b>Background: </b>
                 IT company with our corporate office based out of San Ramon, CA &amp; headquarter in India.
                    We actively pursuing possibilities of inorganic growth.    
                  
            </div>

            <div class="rating">
                <img style="width: 20px;height: 20px;" src="img/star.jpeg">
                <span style="margin-left: 5px;"> 9.8/10 </span>
                <img style="margin-left: 70px; width: 15px; height: 15px; margin-top: 5px;" src="img/link.png">
                <span style="margin-left: 5px;">Connected with <b>8 other businesses</b></span>
            </div>

            <div class="location">
                <p><span>Location:</span><span style="margin-left: 230px;"><?php echo $row['address'] ?></span></p> 
                <p><span>Industries:</span><span style="margin-left: 120px;">retailer</span></p>
                <p><span>Investment size:</span><span style="margin-left: 180px;">INR 1Cr-15Cr</span></p>
                
            </div>

            <button style="margin-left: 280px; background-color: rgb(218, 196, 4); height: 30px;">Send Proposal</button>
                
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>

  
  <?php
  

  }}
  else
  {
  	    $sql1 = "SELECT * FROM logisticpatners WHERE cname LIKE '%$q%' OR cinfo LIKE '%$q%' ";
$result1 = $con->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {


 
  // output data of each row
  
  
  

  ?>
 <div class="dimen">
            <img src="img/icon.jpeg" class="profile">

            <div class="name">
                <p><b><?php echo $row['cname'] ?></b> <br> <?php echo $row['cinfo'] ?></p>
                <p class="premium">Premium</p>
            </div>
            <hr class="line" />
            <ul class="social">
                <li class="li-arrange">
                    <img src="img/phone.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['phone'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/gmail.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['email'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/likedin.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">LinkedIn</a>
                </li >
                <li class="li-arrange">
                    <img src="img/facebook.jpeg" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">Facebook</a>
                </li>
            </ul>
            <div class="detail">
                <b>Interests: </b>
                 Business Intelligence or Predictive Analytics on Oracle or Microsoft platform.
                    Developing areas such as UX, Big Data Implementation tools such as SAP HANA, HADOOP )
                    Automation Engineering.
                   
            </div>
            <div class="detail">
                <b>Background: </b>
                 IT company with our corporate office based out of San Ramon, CA &amp; headquarter in India.
                    We actively pursuing possibilities of inorganic growth.    
                  
            </div>

            <div class="rating">
                <img style="width: 20px;height: 20px;" src="img/star.jpeg">
                <span style="margin-left: 5px;"> 9.8/10 </span>
                <img style="margin-left: 70px; width: 15px; height: 15px; margin-top: 5px;" src="img/link.png">
                <span style="margin-left: 5px;">Connected with <b>8 other businesses</b></span>
            </div>

            <div class="location">
                <p><span>Location:</span><span style="margin-left: 230px;"><?php echo $row['address'] ?></span></p> 
                <p><span>Industries:</span><span style="margin-left: 120px;">logisticpatners</span></p>
                <p><span>Investment size:</span><span style="margin-left: 180px;">INR 1Cr-15Cr</span></p>
                
            </div>

            <button style="margin-left: 280px; background-color: rgb(218, 196, 4); height: 30px;">Send Proposal</button>
                
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>

  
  <?php
  
  
  

  }}
  else
  {
  	$sql1 = "SELECT * FROM superstockiest WHERE cname LIKE '%$q%' OR cinfo LIKE '%$q%' ";
$result1 = $con->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {


 
  // output data of each row
  
  
  
  

  ?>
 <div class="dimen">
            <img src="img/icon.jpeg" class="profile">

            <div class="name">
                <p><b><?php echo $row['cname'] ?></b> <br> <?php echo $row['cinfo'] ?></p>
                <p class="premium">Premium</p>
            </div>
            <hr class="line" />
            <ul class="social">
                <li class="li-arrange">
                    <img src="img/phone.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['phone'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/gmail.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['email'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/likedin.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">LinkedIn</a>
                </li >
                <li class="li-arrange">
                    <img src="img/facebook.jpeg" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">Facebook</a>
                </li>
            </ul>
            <div class="detail">
                <b>Interests: </b>
                 Business Intelligence or Predictive Analytics on Oracle or Microsoft platform.
                    Developing areas such as UX, Big Data Implementation tools such as SAP HANA, HADOOP )
                    Automation Engineering.
                   
            </div>
            <div class="detail">
                <b>Background: </b>
                 IT company with our corporate office based out of San Ramon, CA &amp; headquarter in India.
                    We actively pursuing possibilities of inorganic growth.    
                  
            </div>

            <div class="rating">
                <img style="width: 20px;height: 20px;" src="img/star.jpeg">
                <span style="margin-left: 5px;"> 9.8/10 </span>
                <img style="margin-left: 70px; width: 15px; height: 15px; margin-top: 5px;" src="img/link.png">
                <span style="margin-left: 5px;">Connected with <b>8 other businesses</b></span>
            </div>

            <div class="location">
                <p><span>Location:</span><span style="margin-left: 230px;"><?php echo $row['address'] ?></span></p> 
                <p><span>Industries:</span><span style="margin-left: 120px;">superstockiest</span></p>
                <p><span>Investment size:</span><span style="margin-left: 180px;">INR 1Cr-15Cr</span></p>
                
            </div>

            <button style="margin-left: 280px; background-color: rgb(218, 196, 4); height: 30px;">Send Proposal</button>
                
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>

  
  <?php
  
  
  



  
  
  

  }}
  else
  {
        $sql1 = "SELECT * FROM manufacturer WHERE cname LIKE '%$q%' OR cinfo LIKE '%$q%' ";
$result1 = $con->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {


 
  // output data of each row
  
  
  
  

  ?>
 <div class="dimen">
            <img src="img/icon.jpeg" class="profile">

            <div class="name">
                <p><b><?php echo $row['cname'] ?></b> <br> <?php echo $row['cinfo'] ?></p>
                <p class="premium">Premium</p>
            </div>
            <hr class="line" />
            <ul class="social">
                <li class="li-arrange">
                    <img src="img/phone.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['phone'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/gmail.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['email'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/likedin.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">LinkedIn</a>
                </li >
                <li class="li-arrange">
                    <img src="img/facebook.jpeg" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">Facebook</a>
                </li>
            </ul>
            <div class="detail">
                <b>Interests: </b>
                 Business Intelligence or Predictive Analytics on Oracle or Microsoft platform.
                    Developing areas such as UX, Big Data Implementation tools such as SAP HANA, HADOOP )
                    Automation Engineering.
                   
            </div>
            <div class="detail">
                <b>Background: </b>
                 IT company with our corporate office based out of San Ramon, CA &amp; headquarter in India.
                    We actively pursuing possibilities of inorganic growth.    
                  
            </div>

            <div class="rating">
                <img style="width: 20px;height: 20px;" src="img/star.jpeg">
                <span style="margin-left: 5px;"> 9.8/10 </span>
                <img style="margin-left: 70px; width: 15px; height: 15px; margin-top: 5px;" src="img/link.png">
                <span style="margin-left: 5px;">Connected with <b>8 other businesses</b></span>
            </div>

            <div class="location">
                <p><span>Location:</span><span style="margin-left: 230px;"><?php echo $row['address'] ?></span></p> 
                <p><span>Industries:</span><span style="margin-left: 120px;">superstockiest</span></p>
                <p><span>Investment size:</span><span style="margin-left: 180px;">INR 1Cr-15Cr</span></p>
                
            </div>

            <button style="margin-left: 280px; background-color: rgb(218, 196, 4); height: 30px;">Send Proposal</button>
                
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>

  
  <?php
  
  
  



  
  
  

  }}
  else
  {  
     $sql1 = "SELECT * FROM distributor WHERE cname LIKE '%$q%' OR cinfo LIKE '%$q%' ";
$result1 = $con->query($sql1);
if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {


 
  // output data of each row
  
  
  
  

  ?>
 <div class="dimen">
            <img src="img/icon.jpeg" class="profile">

            <div class="name">
                <p><b><?php echo $row['cname'] ?></b> <br> <?php echo $row['cinfo'] ?></p>
                <p class="premium">Premium</p>
            </div>
            <hr class="line" />
            <ul class="social">
                <li class="li-arrange">
                    <img src="img/phone.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['phone'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/gmail.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com"><?php echo $row['email'] ?></a>
                </li>
                <li class="li-arrange">
                    <img src="img/likedin.png" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">LinkedIn</a>
                </li >
                <li class="li-arrange">
                    <img src="img/facebook.jpeg" class="profile1">
                    <a styel='text-align: center;' href="www.google.com">Facebook</a>
                </li>
            </ul>
            <div class="detail">
                <b>Interests: </b>
                 Business Intelligence or Predictive Analytics on Oracle or Microsoft platform.
                    Developing areas such as UX, Big Data Implementation tools such as SAP HANA, HADOOP )
                    Automation Engineering.
                   
            </div>
            <div class="detail">
                <b>Background: </b>
                 IT company with our corporate office based out of San Ramon, CA &amp; headquarter in India.
                    We actively pursuing possibilities of inorganic growth.    
                  
            </div>

            <div class="rating">
                <img style="width: 20px;height: 20px;" src="img/star.jpeg">
                <span style="margin-left: 5px;"> 9.8/10 </span>
                <img style="margin-left: 70px; width: 15px; height: 15px; margin-top: 5px;" src="img/link.png">
                <span style="margin-left: 5px;">Connected with <b>8 other businesses</b></span>
            </div>

            <div class="location">
                <p><span>Location:</span><span style="margin-left: 230px;"><?php echo $row['address'] ?></span></p> 
                <p><span>Industries:</span><span style="margin-left: 120px;">superstockiest</span></p>
                <p><span>Investment size:</span><span style="margin-left: 180px;">INR 1Cr-15Cr</span></p>
                
            </div>

            <button style="margin-left: 280px; background-color: rgb(218, 196, 4); height: 30px;">Send Proposal</button>
                
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>

  
  <?php
  
  
  



  
  
  

  }}
  else
  {
    echo "NO COMPANY FOUND WITH THIS NAME".$q."OR NO MATCH FOUND BY DETAILS ".$q;
  }
  }
  	
  }


  }

  }


    }
    
    	
    
	
		
    

    
    	
?>	
</body>
</html>