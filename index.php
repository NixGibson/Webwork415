<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
		<script src="functions.js"></script>
		<script src="jquery-2.2.2.min.js"></script>
		
		<script>
			$(document).ready(function() {
				//add event listeners when document is loaded 
				addTextChangeListener("inpTopText", "topText");
				addTextChangeListener("inpBottomText", "bottomText");
				
				$("#imageSelect").change(updateImage);
				buildImagesList();
				
				addColorChangeListener("inpTopColor", "topText");
				addColorChangeListener("inpBottomColor", "bottomText");
				
				addFontSizeChangeListener("inpTopFontSize", "topText");
				addFontSizeChangeListener("inpBottomFontSize", "bottomText");
			});
		</script>
		
	</head>
	
	<body>
		<?php

			require_once("mylibrary.php");
			session_start();		
			//variables to store parameters from url
			$top = "";
			$bottom = "";
			$image = "";
			$top_color = "#FFFFFF";
			$bottom_color = "#FFFFFF";
			$bottom_font_size = "";
			$top_font_size = "";
			
			//extract parameters from url (GET) or session
			if (isset($_GET["top"])) {
				$top = $_GET["top"];
				$_SESSION["top"] = $top;
			}
			else if (isset($_SESSION["top"])) {
				$top = $_SESSION["top"];
			}
			
			if (isset($_GET["bottom"])) {
				$bottom = $_GET["bottom"];
				$_SESSION["bottom"] = $bottom;
			}
			else if (isset($_SESSION["bottom"])) {
				$bottom = $_SESSION["bottom"];
			}
			
			if (isset($_GET["top_color"])) {
				$top_color = $_GET["top_color"];
				$_SESSION["top_color"] = $top_color;
			}
			else if (isset($_SESSION["top_color"])) {
				$top_color = $_SESSION["top_color"];
			}
			
			if (isset($_GET["bottom_color"])) {
				$bottom_color = $_GET["bottom_color"];
				$_SESSION["bottom_color"] = $bottom_color;
			}
			else if (isset($_SESSION["bottom_color"])) {
				$bottom_color = $_SESSION["bottom_color"];
			}
			
			if (isset($_GET["bottom_font_size"])) {
				$bottom_font_size = $_GET["bottom_font_size"];
				$_SESSION["bottom_font_size"] = $bottom_font_size;
			}
			else if (isset($_SESSION["bottom_font_size"])) {
				$bottom_font_size = $_SESSION["bottom_font_size"];
			}
			
			if (isset($_GET["top_font_size"])) {
				$top_font_size = $_GET["top_font_size"];
				$_SESSION["top_font_size"] = $top_font_size;
			}
			else if (isset($_SESSION["top_font_size"])) {
				$top_font_size = $_SESSION["top_font_size"];
			}
			
			if (isset($_GET["image"])) {
				$image = $_GET["image"];
				$_SESSION["image"] = $image;
			}
			else if (isset($_SESSION["image"])) {
				$image = $_SESSION["image"];
			}
		?>
		
		<div class='image-container'>
			<div id="image">
				<img src="<?php echo $image ?>" id="dispImage"/>
			</div>
			<div id="topText" style="color:<?php echo $top_color ?>;font-size:<?php echo $top_font_size ?>px;">
				<?php echo $top ?>
			</div>
			<div id="bottomText" style="color:<?php echo $bottom_color ?>;font-size:<?php echo $bottom_font_size ?>px;">
				<?php echo $bottom ?>
			</div>
		</div>
		<div>
			<form action="#" method="GET">
				<br/>
				<table>
					<tr>
						<td>Image:</td>
						<td>
							<!-- Keep track of image from url or session in default-image attribute -->
							<select name="image" id="imageSelect" default-image="<?php echo $image ?>"></select>
						</td>
					</tr>
					<tr>
						<td>Top:</td>
						<td><input type="text" name="top" id="inpTopText" value='<?php echo $top ?>' /></td>
						<td>Color:<span><input type='color' id='inpTopColor' name='top_color' value='<?php echo $top_color ?>' /></span></td>
						<td>Font Size(px):<span><input type='text' id='inpTopFontSize' name='top_font_size' value='<?php echo $top_font_size ?>' maxlength=2/></span></td>
					</tr>
					<tr>
						<td>Bottom:</td>
						<td><input type="text" name="bottom" id="inpBottomText" value='<?php echo $bottom ?>' /></td>
						<td>Color:<span><input type='color' id='inpBottomColor' name='bottom_color' value='<?php echo $bottom_color ?>' /></span></td>
						<td>Font Size(px):<span><input type='text' id='inpBottomFontSize' name='bottom_font_size' value='<?php echo $bottom_font_size ?>' maxlength=2 /></span></td>
					</tr>
					<tr>
						<td><input type="submit" value="Submit" /></td>
					</tr>
				</table>
			</form>
		</div>
        <div>
 
    <a href ="login.php"> Meme Crud </a>
    </div>
        
        
         <p>URL:</p>
           <script>
        {
        document.write(location.href);
        }
    </script> 
	</body>

</html>
