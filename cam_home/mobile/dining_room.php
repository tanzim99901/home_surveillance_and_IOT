<!DOCTYPE html>
<html>
<title>Dining Room</title>
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
  
  <a href="mobile1.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:20%;height:5%;top:4%;" src="title2.png"/></a>

  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:12%;" src="bar.png"/>
  <a href="#"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 35%;height:4%;bottom:10%;top:15.2%;" src="dine.png"/></a>
  <a href="http://118.179.182.5:8081"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width: 95%;height:55%;bottom:0%;top:24%;" src="http://118.179.182.5:8081"/></a>
  
  <form method="get" action="dining_room.php" style="position: absolute;margin-left: auto;margin-right: auto;left: 25%;top:82%;width:60%">                 
  <input type="submit" style="position: absolute;margin-left: auto;margin-right: auto; left:10%" value="OFF" name="off">
  <input type="submit" style="position: absolute;margin-left: auto;margin-right: auto; left:35%" value="ON" name="on">
  <input type="submit" style="position: absolute;margin-left: auto;margin-right: auto; left:57%" value="BLINK" name="blink">
  </form>
  <?php
        shell_exec("/usr/local/bin/gpio -g mode 17 out");
        if(isset($_GET['off']))
         {
			echo "LED is off";
			shell_exec("/usr/local/bin/gpio -g write 17 0");
         }
		else if(isset($_GET['on']))
		{
			echo "LED is on";
			shell_exec("/usr/local/bin/gpio -g write 17 1");
		}
		else if(isset($_GET['blink']))
		{
			echo "LED is blinking";
			for($x = 0;$x<=4;$x++)
			{
				shell_exec("/usr/local/bin/gpio -g write 17 1");
				sleep(1);
				shell_exec("/usr/local/bin/gpio -g write 17 0");
				sleep(1);
			}
		}
        ?>
		
  
  <img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:90%;" src="bar.png"/>
  <a href="mobile1.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 30%;width: 10%;height:7%;bottom:0%;top:91%;" src="home.png"/></a>
  <a href="mobile1.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 0%;width: 25%;height:4%;bottom:10%;top:93%;" src="home_butt.png"/></a>
  
  <!--<img style="position: absolute;margin-left: auto;margin-right: auto;left: 0%;right: 0%;width:95%;height:10%;bottom:0%;top:102%;" src="bar.png"/>
  <a href="/cam/index_redirect.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 68%;width: 10%;height:7%;bottom:0%;top:104%;" src="desktop_icon.png"/></a>
  <a href="/cam/index_redirect.php"><img style="position: absolute;margin-left: auto;margin-right: auto;left: 10%;right: 0%;width: 55%;height:4%;bottom:10%;top:105%;" src="desk.png"/></a>-->
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