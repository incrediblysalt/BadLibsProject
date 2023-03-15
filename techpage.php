<!DOCTYPE html>
<html lang="en">
<!-- Ad Libs Project: Tech Page -->
<?php include("format.php");?>
	<head>
		<meta charset="UTF-8">
		<title>Bad-Libs</title>
		<link rel="stylesheet" href="css/format.css">
		<script src="js/tech.js"></script>
	</head>
	<body>
		<?php echo logo(140, 500);?>
		
		<div class="container">
			<h1> Technologies Used </h1>
			<div class="para">
				<h3> 
				<button type="button" id="btnxhtml" onclick="showElement('xhtml')" style="background-color: #f5f2fa; border: none;">+</button>
				XHTML
				</h3>	
				<div id="xhtml" style="display: none;">
					<canvas id="xhtmlCan" width="650" height="250"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnhtml5" onclick="showElement('html5')" style="background-color: #f5f2fa; border: none;">+</button>
				HTML5
				</h3>
				<div id="html5" style="display: none;">
					<canvas id="html5Can" width="650" height="200"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btncanEl" onclick="showElement('canEl')" style="background-color: #f5f2fa; border: none;">+</button>
				HTML 5 Canvas Element
				</h3>
				<div id="canEl" style="display: none;">
					<canvas id="canCan" width="650" height="200"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnvideo"  onclick="showElement('video')" style="background-color: #f5f2fa; border: none;">+</button>
				HTML 5 Video Element
				</h3>
				<div id="video" style="display: none;">
					<canvas id="videoCan1" width="650" height="150"></canvas>
					<br>
					<canvas id="videoCan2" width="650" height="300"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btncssEl" onclick="showElement('cssEl')" style="background-color: #f5f2fa; border: none;">+</button>
				CSS
				</h3>
				<div id="cssEl" style="display: none;">
					<canvas id="cssCan" width="400" height="250"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnjsEl"  onclick="showElement('jsEl')" style="background-color: #f5f2fa; border: none;">+</button>
				JavaScript
				</h3>
				<div id="jsEl" style="display: none;">
					<canvas id="jsCan" width="650" height="250"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btndynJs" onclick="showElement('dynJs')" style="background-color: #f5f2fa; border: none;">+</button>
				Dynamic JavaScript
				</h3>
				<div id="dynJs" style="display: none;">
					<canvas id="dynCan" width="650" height="250"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnphpEl" onclick="showElement('phpEl')" style="background-color: #f5f2fa; border: none;">+</button>
				PHP
				</h3>
				<div id="phpEl" style="display: none;">
					<canvas id="phpCan" width="650" height="350"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btndbEl" onclick="showElement('dbEl')" style="background-color: #f5f2fa; border: none;">+</button>
				Database
				</h3>
				<div id="dbEl" style="display: none;">
					<canvas id="dbCan" width="650" height="100"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnsvgEl" onclick="showElement('svgEl')" style="background-color: #f5f2fa; border: none;">+</button>
				SVG Logo
				</h3>
				<div id="svgEl" style="display: none;">
					<canvas id="svgCan" width="700" height="100"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnweb" onclick="showElement('web')" style="background-color: #f5f2fa; border: none;">+</button>
				Webserver
				</h3>
				<div id="web" style="display: none;">
					<canvas id="webCan" width="650" height="500"></canvas>
				</div>
				
				<h3> 
				<button type="button" id="btnvalidation" onclick="showElement('validation')" style="background-color: #f5f2fa; border: none;">+</button>
				XHTML Page Validation
				</h3>
				<div id="validation" style="display: none;">
					<canvas id="validCanHome" width="650" height="300"></canvas>
					<br>
					<canvas id="validCanForm" width="650" height="300"></canvas>
					<br>
					<canvas id="validCanGen" width="650" height="300"></canvas>
					<br>
					<canvas id="validCanForm2" width="650" height="300"></canvas>
					<br>
					<canvas id="validCanTech" width="650" height="300"></canvas>
				</div>
			</div>
			
			<?php echo index("tech");?>
		</div>
		
		<div style="display: none;">
			<img id="xhtmlSrc" alt="XHTML" src="video/xhtml-1.png">
			<img id="html5Src" alt="HTML5" src="video/html5-1.png">
			<img id="canSrc" alt="Canvas" src="video/can-1.png">
			<img id="videoSrc1" alt="Video1" src="video/video-1.png">
			<img id="videoSrc2" alt="Video2" src="video/video-2.png">
			<img id="cssSrc" alt="CSS" src="video/css-1.png">
			<img id="jsSrc" alt="JavaScript" src="video/js-1.png">
			<img id="dynJsSrc" alt="Dynamic" src="video/dynJs-1.png">
			<img id="phpSrc" alt="PHP" src="video/php-1.png">
			<img id="dbSrc" alt="Database" src="video/db-1.png">
			<img id="svgSrc" alt="SVG" src="video/svg-1.png">
			<img id="webSrc" alt="Webserver" src="video/web-1.png">
			<img id="homeValid" alt="Home Validator" src="video/HomeValidator.png">
			<img id="formValid" alt="Form Validator" src="video/FormValidator.png">
			<img id="genValid" alt="Gen Validator" src="video/GenValidator.png">
			<img id="form2Valid" alt="Form 2 Validator" src="video/Form2Validator.png">
			<img id="techValid" alt="Tech Validator" src="video/TechValidator.png">
		</div>
	</body>
</html>