<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8">    
<link rel="stylesheet" href="meme.css">
         
</head>

<head>
<script src="jquery-1.12.0.min.js"></script>
</head> 
    
    <body>
        
       
<!-----------JSON pics----------------------------------->

<div id="image"><span id="show_image"></span>
    
    <p id="upper" style="position:absolute; top:30px; left:50px; font-size:50px; word-wrap: break-word; margin:auto;">
</p>
    
<br>
    
<p id="lower" style="position:absolute; top:300px; left:50px;font-size:50px;  word-wrap: break-word; margin:auto">
</p>
    
<form action = "memegen.php" method = "post">

Image Selection: <span id="images"></span>
<script src="file_list.js"></script>
<script>show_image(0); </script>           

<br>
<!----------------------------end JSON pics---------------->
            
<!-----top and bottom text------->
Top:
</div>
<input id="top" type="text" name ="top" value="" oninput="txtedit();">
<br>
Bottom:
</div>
<br>
<input id="bottom" type="text" name="bottom" value="" oninput="txtedit();" >
<br>
<input name= "color" id="background-color" type="color"/>    
<br> 
  
Font Size:                    
<input type="number" name="fontSize">
<input type="submit">  
</form>

            
<!----- end top and bottom text------>
            
<!--------------------jquery now--------------->

<script>

function txtedit()
{ 
   var $forTop = $('#top').val(); 
	    $('#upper').html = $forTop; 
    var $forBott = $('#bottom').val();
	    $('#lower').html = $forBott; 
    var $colorz = $('#background-color').val();
	    $('#upper').style.color = $colorz;
    var $colorz = $('#background-color').val();
	    $('#lower').style.color = $colorz;
}
            
</script>

<div><span id='meme_addr'></span></p></div>
            
<!-------------------end jquery------------------>
            
        
</body>
</html>