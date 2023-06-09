<?php session_start();
require_once ('assets/php/connect.php');


$idmodel = $_SESSION["idmodel"];

$sql="SELECT * FROM models WHERE id_model ='$idmodel'";
$result=$connect->query($sql);
 $arr=$result->fetch_all(MYSQLI_ASSOC);
 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>3D Model</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
		<script type="module" src="https://www.unpkg.com/@google/model-viewer@1.4.1/dist/model-viewer.min.js"></script>

		<script nomodule src="https://www.unpkg.com/@google/model-viewer@1.4.1/dist/model-viewer-legacy.js"></script>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

								<div class="placement">
									
									<p>Select the surface on which the model will be placed</p>
									<hr size=3px align="left" width="100%" margin = 0>
									<form autofocus="autofocus">
									<select class="style2" autofocus="autofocus">
								    <option value="floor">FLOOR</option>
								    <option value="wall">WALL</option>
								  </select></form>
								  </div>

								<?php
							foreach ($arr as $value) {

							?>
							<form method="post">
						
							<div>
								<model-viewer id="model_3d"
								src="models/<?=$value['3d']?>"
								auto-rotate
								camera-controls
								ar
								touch-action="pan-y"
								shadow-intensity="1"
								ios-src="models/scene.gltf"
								alt="A 3D model carousel"
								style="width: auto;
    							height: 76vh;
						    	padding-top: 5%;
						    	left: 50%;
						    	-ms-transform: translate(-50%, -50%);
						    	transform: translate(-50%, -20%);"
								>
								<button slot="ar-button" id="ar-button">
							    View
							  </button>
							  <div id="ar-prompt">
							    <img src="assets/img/hand.png">
							  </div>	
								</model-viewer>
								
								
							</div>
						</form>
							<?php
							}
							?> 
							<button  id="buttonClck" class="view">VIEW</button>
							<div class="window_qr" id="window_qr">
								<p>
                        				Для того чтобы начать остался один шаг! Пожалуйста, отсканируйте QR-код чтобы перейти на мобильную версию сайта
                        			</p>
                        		</ul>
                        		<input type="button" class="exit" id="exitClick" value="X">
                       			<img src="assets/img/qrcode.png"> 
                    		</div>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Ipsum veroeros</a></li>
							<li><a href="generic.html">Tempus etiam</a></li>
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<?php
							foreach ($arr as $value) {

							?>
							<form method="post">
							<h1><?=$value['name_model']?></h1>
						
							</form>
							<?php
							}
							?>


							
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel venenatis mauris vehicula hendrerit.</p>
							<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>


			<style>
  /* This keeps child nodes hidden while the element loads */
  :not(:defined) > * {
    display: none;
  }

  model-viewer {
   
    overflow-x: hidden;
  }
  

  #ar-button {
    background-image: url(assets/img/cube.png);
    background-repeat: no-repeat;
    background-size: 20px 20px;
    background-position: 12px 50%;
    
    position: absolute;
    left: 80%;
    transform: translateX(-50%);
    white-space: nowrap;
    bottom: 132px;
    padding: 0px 16px 0px 40px;
   /* font-family: Roboto Regular, Helvetica Neue, sans-serif;*/
    font-size: 14px;
    color:white;
    height: 36px;
    line-height: 9px;
    border-radius: 18px;
    
  }

  #ar-button:active {
    background-color: #E8EAED;
  }

  #ar-button:focus {
    outline: none;
  }

  /*#ar-button:focus-visible {
    outline: 1px solid #4285f4;
  }*/

  @keyframes circle {
    from { transform: translateX(-50%) rotate(0deg) translateX(50px) rotate(0deg); }
    to   { transform: translateX(-50%) rotate(360deg) translateX(50px) rotate(-360deg); }
  }

  @keyframes elongate {
    from { transform: translateX(100px); }
    to   { transform: translateX(-100px); }
  }

  model-viewer > #ar-prompt {
    position: absolute;
    left: 50%;
    bottom: 175px;
    animation: elongate 2s infinite ease-in-out alternate;
    display: none;
  }

  model-viewer[ar-status="session-started"] > #ar-prompt {
    display: block;
  }

  model-viewer > #ar-prompt > img {
    animation: circle 4s linear infinite;
  }

  model-viewer > #ar-failure {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 175px;
    display: none;
  }

  model-viewer[ar-tracking="not-tracking"] > #ar-failure {
    display: block;
  }


</style>
<script type="module">
        if (navigator.userAgentData.mobile){
				 	document.getElementById("buttonClck").style.visibility = "hidden";
				 }
				 

				    buttonClck.onclick = function() {
            		if (navigator.userAgentData.mobile) {

            		document.getElementById("buttonClck").style.visibility = "hidden";

        			}

            		else{
                	document.getElementById("window_qr").style.visibility = "visible";
                
            		}
        		}
            
        
    
        exitClick.onclick = function(){
            document.getElementById("window_qr").style.visibility = "hidden";
        }
     </script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>