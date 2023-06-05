<?php 
session_start();
require_once ('assets/php/connect.php');
$idmodel = $_SESSION["idmodel"];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>


	<body class="is-preload">

 <script async src="https://ga.jspm.io/npm:es-module-shims@1.7.2/dist/es-module-shims.js"></script>

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
        var canvasHeight = 50;
        const renderer = new THREE.WebGLRenderer({antialias:true});
        renderer.setSize(window.innerWidth,window.innerHeight);
        document.getElementsByClassName('model')[0].insertBefore(renderer.domElement, document.getElementsByClassName('viewed_model')[0].firstChild);

        //scene
        const scene = new THREE.Scene();
        scene.background = new THREE.Color(0xdddddd);

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
        loader.load('models/scene.gltf', function(gltf){
          const model = gltf.scene;
          model.position.set(0,0,0);

          scene.add(model);
          renderer.render(scene,camera);
      },undefined,function(error){
            console.error(error);
          });
    </script>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">

								<div id="logo">
									<h1><a href="index.html">Escape Velocity</a></h1>
									<p>A free responsive site template by HTML5 UP</p>
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
							<h1>Generic Page</h1>
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>