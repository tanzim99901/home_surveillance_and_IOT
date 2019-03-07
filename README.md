# Home Surveillance & IOT (Ongoing Project)

Live video feedback and electrical appliances control from anywhere in the world using a website, served from a Raspberry Pi server. (Electrical Appliance control tested using an LED)

# Components

1) Raspberry Pi Model B
2) USB Webcam (I used only one so far)
3) 5V 2A Power Source 
4) Lan Cable (RJ - 45 Cable) if WiFi is not used.
5) Minimum 8 GB Class 10 SD Card
6) An LED
7) 220 Ohm Resistor
7) Breadboard
8) Jumper Wires

# Step 1: Install Raspbian OS and establish SSH & VNC connections

Install Raspbian OS: https://www.instructables.com/id/HOW-TO-INSTALL-RASPBIAN-OS-IN-YOUR-RASPBERRY-PI/
Establish SSH & VNC connections: https://www.instructables.com/id/HOW-TO-INSTALL-RASPBIAN-OS-IN-YOUR-RASPBERRY-PI/
(Make either LAN or wifi connection)

# Step 2: Connections

1) Connect the webcam to a USB port of the Raspberry Pi.
2) Connect the LED to the Raspberry Pi according to the diagram.

# Step 3: Install Motion and webcam server

1) Type in the command 'sudo apt-get install motion' to start the installation.
2) After installation, type in the command 'lsusb' and enter. You should see the name of your camera. If not, then there is some problem with the camera or the camera is not supported in 'motion'.
3) Type in the command ' sudo nano /etc/motion/motion.conf' and press enter.
4) Make some changes some settings in the .conf file. Use 'ctrl + w' to locate the texts. 
5) Make sure 'daemon' is ON.
6) Set 'framerate' to 100.
7) Keep 'Stream_port' to 8081.
8) 'Stream_quality' should be 100.
9) 'Stream_maxrate' should be 6.
10) Change 'Stream_localhost' to OFF.
11) Change 'webcontrol_localhost' to OFF.
12) Set 'quality' to 100.
13) Set 'width' & 'height' to 640 & 480.
14) Set 'post_capture' to 5.
15) Press ctrl + x to exit. Type y to save and enter to conform.
16) Again type in the command 'sudo nano /etc/default/motion' and press enter.
17) Set 'start_motion_daemon' to yes. Save and exit.
18) Restart motion software by typing in the command 'sudo service motion restart' and press enter. Then type in the command 'sudo motion' and press enter. Now the server is ready.
19) Now open up your browser. Type in the IP address of your raspberry Pi and the port number in this way: 192.168.101.69:8081 (First there is the IP address, then a ':', then the port number). Press Enter.
20) Now you can see the Live feed coming from your webcam directly on your laptop or mobile or both at the same time.

# Step 4: Install Apache2 server on Raspberry Pi

I used an HTTP server and its PHP extension.
1) Install Apache HTTP server and its PHP extension by: sudo apt-get install apache2 php5 libapache2-mod-php5
2) Note down the Raspberry Pi's IP adddress by using the command: hostname -I
3) Test the Apache server by navigating to the browser and typing your Pi's IP address. You should see and "It works!" page.
4) Go to "/var/www" directory in the Raspberry Pi and delete the "index.html" file. 
5) Create a new "index.php" file and put the following code in it: phpinfo();
6) Save it and refresh the page in your browser. A long page with lots of information about PHP will appear. Thus the PHP extension is installed properly.

# Step 5: The Website

All the codes for the website is contained in the "cam_home" folder.
1) Copy the "cam_home" folder to the /var/www/html/" directory of the Raspberry Pi.
2) Be sure to change the video source links in all the php files in the website according to your Raspberry Pi's IP address. (See step 4, number 19)
3) Navigate to "http://raspberry_pi_IP/cam_home" (e.g, http://192.168.101.69/cam_home) to view the website from PC or mobile phone. (Optimized for mobile phones.)
