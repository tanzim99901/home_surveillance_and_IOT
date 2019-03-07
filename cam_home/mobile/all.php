<!DOCTYPE html>
<html>
<title>Tanzim's Surveillance Server</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="base.min.css"/>
<link rel="stylesheet" href="fancy.min.css"/>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="mobile.css">
<link rel="stylesheet" href="w3mobile.css">
<link rel="stylesheet" href="tools.css">
<link rel="stylesheet" href="user.css">
<link rel="stylesheet" href="me.css">
<link rel="stylesheet" href="FD_min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/lib/w3-theme-teal.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
</style>
<body style="background-image:url(dark.jpg)"> 

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-black w3-animate-left" style="display:none;z-index:5" id="mySidebar">
  <div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br>
  <div class="w3-padding w3-center">
    <a href="mobile1.php"><img class="w3-square" src="title2.png" alt="avatar" style="width:60%"/></a>
  </div>
</div>
<a class="ff1 w3-bar-item w3-button" href="mobile1.php"><b>Home</b></a>
<a class="ff1 w3-bar-item w3-button" href="bedroom.php"><b>bedroom</b></a>
<a class="ff1 w3-bar-item w3-button" href="living_room.php"><b>living room</b></a>
<a class="ff1 w3-bar-item w3-button" href="dining_room.php"><b>dining room</b></a>
<a class="ff1 w3-bar-item w3-button" href="front_door.php"><b>Front door</b></a>
</div>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
  <button class="w3-button w3-dark-grey w3-transparent w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
      <!--<a href="http://facebook.com"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 15%;width: 10%;height:8%" src="fb_new.png"/></a>
      <a href="http://mail.google.com"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 0;width: 10%;height:8%" src="gmail_new.png"/></a>-->
  </div>
  <!--<a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:80%;height:30%;bottom:40%;top:13%;" src="title2.png"/></a>
  
  
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 25%;height:10%;bottom:10%;top:46%;" src="iot.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 15%;height:10%;bottom:10%;top:56%;" src="and.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 90%;height:10%;bottom:10%;top:66%;" src="survey.png"/></a>
  <a href="/cam_home/led.php"><img style="position: absolute;left: 7%;width: 38%;height:8%;top:83%;" src="contact2.png"/></a>
  <a href="/cam_home/led.php"><img style="position: absolute;left: 11%;width: 30%;height:5%;top:84.5%;" src="control.png"/></a>
  <a href="/cam_home/led.php"><img style="position: absolute;left: 55%;width: 38%;height:8%;top:83%;" src="contact2.png"/></a>
  <a href="/cam_home/led.php"><img style="position: absolute;left: 59%;width: 30%;height:5%;top:84.5%;" src="all_cam.png"/></a>-->
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:12%;" src="bar.png"/>
  <a href="bedroom.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 35%;height:4%;bottom:10%;top:15.2%;" src="bed.png"/></a>
  <a href="http://118.179.182.5:8081"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:55%;bottom:0%;top:24%;" src="http://118.179.182.5:8081"/></a>
  <!--<a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:50%;bottom:0%;top:145%;" src="zipper.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 55%;right: 0%;width: 40%;height:22%;bottom:0%;top:145%;" src="zipper_overlap.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 60%;width: 35%;height:15%;bottom:0%;top:180%;" src="zipper_overlap_bangles.png"/></a>-->
  
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:82%;" src="bar.png"/>
  <a href="living_room.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 45%;height:4%;bottom:10%;top:85.2%;" src="liv.png"/></a>
  <a href="http://118.179.182.5:8081"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:55%;bottom:0%;top:94%;" src="http://118.179.182.5:8081"/></a>
  
  <!--<a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:50%;bottom:0%;top:198%;" src="lace.png"/></a>-->
  
  <!--<a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:50%;bottom:0%;top:251%;" src="button_slide.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:30%;bottom:0%;top:305%;" src="long_thread2.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:100%;bottom:0%;top:339%;" src="girl.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:50%;bottom:0%;top:443%;" src="band.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:50%;bottom:0%;top:497%;" src="lace2.png"/></a>-->
  
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:152%;" src="bar.png"/>
  <a href="dining_room.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 45%;height:4%;bottom:10%;top:155.2%;" src="dine.png"/></a>
  <a href="http://118.179.182.5:8081"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:55%;bottom:0%;top:164%;" src="http://118.179.182.5:8081"/></a>
  
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:222%;" src="bar.png"/>
  <a href="front_door.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 45%;height:4%;bottom:10%;top:225.2%;" src="front.png"/></a>
  <a href="http://118.179.182.5:8081"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:55%;bottom:0%;top:234%;" src="http://118.179.182.5:8081"/></a>
  
  <!--<img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:562%;" src="bar.png"/>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 35%;height:4%;bottom:10%;top:566%;" src="about_bold.png"/></a>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 80%;height:5%;bottom:10%;top:600%;" src="company_bold.png"/></a>
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:50%;bottom:0%;top:635%;" src="bar.png"/>
  <img style="position: absolute;left: 5%;right: 0%;width: 15%;height:3%;bottom:0%;top:637%;" src="china_count_bold.png"/>
  <img style="position: absolute;left: 5%;right: 0%;width: 91%;height:15%;bottom:0%;top:642%;" src="china_bold.png"/>
  <img style="position: absolute;left: 5%;right: 0%;width: 28%;height:3%;bottom:0%;top:662%;" src="bd_count_bold.png"/>
  <img style="position: absolute;left: 5%;right: 0%;width: 85%;height:10%;bottom:0%;top:668%;" src="bd_bold.png"/>-->
  
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:292%;" src="bar.png"/>
  <a href="mobile1.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 30%;width: 10%;height:7%;bottom:0%;top:293%;" src="home.png"/></a>
  <a href="mobile1.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 0%;width: 25%;height:4%;bottom:10%;top:295%;" src="home_butt.png"/></a>
  
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:304%;" src="bar.png"/>
  <a href="/cam_home/index_redirect.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 68%;width: 10%;height:7%;bottom:0%;top:306%;" src="desktop_icon.png"/></a>
  <a href="/cam_home/index_redirect.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 0%;width: 55%;height:4%;bottom:10%;top:307%;" src="desk.png"/></a>
</div>
     
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
closeSidebar();
function openSidebar() {
    document.getElementById("mySidebar").style.display = "block";
}
function closeSidebar() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
          
</body>
</html>
