<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8">    
<link rel="stylesheet" href="meme.css">
         
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
  
        <input type="submit" value = "submit" name = "submit"></input>   
</form>

            
<!----- end top and bottom text------>
            
<!--------------------javascript--------------->

<script>

function txtedit()
{ 
    var for_top;
    var for_bott;
    var colorz;

    for_top = document.getElementById('top').value;
		document.getElementById("upper").innerHTML = for_top;
    for_bott = document.getElementById('bottom').value;
		document.getElementById("lower").innerHTML = for_bott;
    colorz = document.getElementById('background-color').value;
    document.getElementById("upper").style.color = colorz;
    colorz = document.getElementById('background-color').value;
		document.getElementById("lower").style.color = colorz;
}
            
</script>

<div><span id='meme_addr'></span></p></div>
            
<!-------------------end javascript------------------>
            
        
</body>
</html>