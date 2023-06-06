<?php session_start();
require_once ('assets/php/connect.php');

$sql="SELECT * FROM models";
 $result=$connect->query($sql);
 $arr=$result->fetch_all(MYSQLI_ASSOC);
   
  if (isset($_POST['idmod'])) {
    $_SESSION["idmodel"] =$_POST['idmod'];
header("Location: generic.php"); 
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
		<script type="module" src="https://www.unpkg.com/@google/model-viewer@1.4.1/dist/model-viewer.min.js"></script>

		<script nomodule src="https://www.unpkg.com/@google/model-viewer@1.4.1/dist/model-viewer-legacy.js"></script>
	</head>
	<body class="is-preload">

		<!--  <script async src="https://ga.jspm.io/npm:es-module-shims@1.7.2/dist/es-module-shims.js"></script>

    <script type="importmap">
        {
            "imports":{
                "three":"https://unpkg.com/three@0.152.2/build/three.module.js"
            }
        }
    </script>

    <script type="module">
        import * as THREE from 'three';
        import {OrbitControls} from 'https://unpkg.com/three@0.152.2/examples/jsm/controls/OrbitControls.js';
        import {GLTFLoader} from 'https://unpkg.com/three@0.152.2/examples/jsm/loaders/GLTFLoader.js';

        //renderer
    
        const renderer = new THREE.WebGLRenderer({antialias:true});
        
        renderer.setClearColor( 0xffffff, 0 );
        renderer.setSize(window.innerWidth,window.innerHeight);
        document.getElementsByClassName('model')[0].insertBefore(renderer.domElement, document.getElementsByClassName('model')[0].firstChild);

        //scene
        const scene = new THREE.Scene();
        

        //camera
        const camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,0.1,1000);
        camera.position.set(1,2,2);

        //light
        const ambientLight = new THREE.AmbientLight (0xffffff);
        scene.add(ambientLight);

        //controllers
        const controls = new OrbitControls(camera, renderer.domElement);
        controls.addEventListener('change', () => {renderer.render(scene, camera)});
        controls.target.set(0,0,0);
        controls.update();

        //model
        const loader = new GLTFLoader();
        loader.load('models/4.glb', function(glb){
          const model = glb.scene;
          model.position.set(0,0,0);

          scene.add(model);
          renderer.render(scene,camera);
      },undefined,function(error){
            console.error(error);
          });
    </script> -->

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
							<div class="head" >
								
								<div id="logo">
									<h1><a href="index.php">LIFE_SPACE</a></h1>
									<p>A free 3d models for download and introductory view</p>
								</div>

								<div class="model_container" >
								<model-viewer class="model"
								src="models/scene.gltf"
								auto-rotate

								shadow-intensity="1"
								camera-controls
								ar
								ios-src="models/scene.gltf">
									
								</model-viewer>
								
								<button  id="buttonClck" class="view">VIEW</button>
							</div>
							<div class="window_qr" id="window_qr">
								<p>
                        				Для того чтобы начать остался один шаг! Пожалуйста, отсканируйте QR-код чтобы перейти на мобильную версию сайта
                        			</p>
                        		</ul>
                        		<input type="button" class="exit" id="exitClick" value="X">
                       			<img src="assets/img/qrcode.png"> 
                    		</div>
							</div>
								

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="generic.html">Models</a></li>
							<li><a href="auth.php">Log Out</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>This is Phantom, a free, fully responsive site<br />
								template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
								<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
							</header>
							<section class="tiles">
								<?php
							foreach ($arr as $value) {

							?>
							<form method="post">
								
									
								
								<article class="col-6 col-12-xsmall work-item">

									<span class="image">
										<img src="images/<?=$value['image']?>" alt="" />
									</span>
									<button style="
									width: 70%;
								    position: absolute;
								    margin: 1%;
								    left: 50%;
								    -ms-transform: translate(-50%, -50%);
								    transform: translate(-50%, -50%);" name="idmod" value="<?=$value['id_model']?>">SEE</button>
									<a>
										<h2><?=$value['name_model']?></h2>
										<div class="content">
											<p><?=$value['discription']?></p>
										</div>
									</a>
									
								</article>
								
							

							</form>
							<?php
							}
							?> 
								<!-- <article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Lorem</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href0="generic.html">
										<h2>Feugiat</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Tempus</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Aliquam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Veroeros</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ipsum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dolor</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Nullam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ultricies</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dictum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="col-6 col-12-xsmall work-item">
									<span class="image">
										<img src="images/01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Pretium</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article> -->
							</section>
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