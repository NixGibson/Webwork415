
<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" type="text/css" href="meme.css">
    </head>
    
    <body>
        

         <img src="Blue.jpg">
      <br>
        <select name = "img">
        <option value="blue.jpg"> blue</option>
        <option value = "huey.jpg"> huey</option>
        </select>
        

        <form action = memegen.php method = "get">
            
                <div id="selection" style="display:inline-block; width:100px">
        
        <br>
              <div style="display:inline-block; width:100px">
            
            <input type = "text" name = "top"> 
           <input type = "text" name = "bottom">
            <br>
            
            <input type=submit>
        
                  
                  <input type="color" name="color" value="#FFFFFF"></input>
                    
                    
                    <!-----top and bottom text------>
        <p id = "upper" style = "position:absolute; top: 2px; left: 50px; text-align: left; word-wrap:break-word;">
            <p id = "upper" style = "position: absolute; top:2px; left: 50px; font-size:50px; word-wrap:break-word; color: <?php echo $_GET["color"]?>; text-align: left">
                <?php echo $_GET["top"];?>
            </p>
                  
                    
                    
             <br>
            
            <p id = "lower" style = "position:absolute; top: 350px; left: 65px; font-size:50px; word-wrap:break-word;
 text-align:left">
            <p id = "lower" style = "position: absolute; font-size:50px; word-wrap:break-word;
top:350px; left:65; color: <?php echo $_GET["color"]?>; text-align:left">
                <?php echo $_GET["bottom"];?>
            
                
            </p>
          <!----- end top and bottom text------>
            <ul>
            
            
            <li><a href="?http://cs1.utm.edu/~domdgibs/memegen.php?img=blue.jpg">Blue Ivy</a></li>
                
         <li><a href="?http://cs1.utm.edu/~domdgibs/memegen.php?img=huey">Huey N.</a></li>
            
        </ul>
        
    </body>

</html>
    
    
    