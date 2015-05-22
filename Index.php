<!--
    -\-                                                     
    \-- \-                                                  
     \  - -\                                                
      \      \\                                             
       \       \                                            
        \       \\                                              
         \        \\                                            
         \          \\                                        
         \           \\\                                      
          \            \\                                                 
           \            \\                                              
           \. .          \\        I'm a pterodactyl, Dangit.		   
            \    .       \\        Obey me!
             \      .    \\        GET A LIFE!                            
              \       .  \\                                 
              \         . \\                                           
              \            <=)                                         
              \            <==)                                         
              \            <=)                                           
               \           .\\                                           _-
               \         .   \\                                        _-//
               \       .     \\                                     _-_/ /
               \ . . .        \\                                 _--_/ _/
                \              \\                              _- _/ _/
                \               \\                      ___-(O) _/ _/ 
                \                \                  __--  __   /_ /   
                \                 \\          ____--__----  /    \_     
                 \                  \\       -------       /   \_  \_     
                  \                   \                  //   // \__ \_
                   \                   \\              //   //      \_ \_ 
                    \                   \\          ///   //          \__- 
                    \                -   \\/////////    //            
                    \            -         \_         //              
                    /        -                      //                
                   /     -                       ///                  
                  /   -                       //                      
             __--/                         ///
  __________/                            // |               
//-_________      ___                ////  |                
        ____\__--/                /////    |                
   -----______    -/---________////        |                
     _______/  --/    \                   |                 
   /_________-/       \                   |                 
  //                  \                   /                 
                       \.                 /                 
                       \     .            /                 
                        \       .        /                  
                       \\           .    /                  
                        \                /                  
                        \              __|                  
                        \              ==/                  
                        /              //                   
                        /          .  //                    
                        /   .  .    //                      
                       /.           /                       
                      /            //                       
                      /           /
                     /          //
                    /         //
                 --/         /
                /          //
            ////         //
         ///_________////
-->
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Windows Portfolio</title>
<link href="css/style1.css" rel="stylesheet" />
<script type="text/javascript" src="js/visibility.js"></script>
<script src="http://code.jquery.com/jquery-1.7.2.js"></script>
<link rel="icon" 
      type="image/png" 
      href="images/Favicon.png">
</head>
<body>
<img src="images/Taskbar.png" style="position: fixed; bottom: 0; left: 0; background-size: 100% auto"/>
<img src="images/TaskIcons.png" style="position: fixed; bottom: 0; left: 100; background-size: 100% auto"/>
<img src="images/Start.png" onmouseover="this.src='images/StartPressed.png'" 
onmouseout="this.src='images/Start.png'" onclick="toggle_visibility('Menu'); toggle_visibility('Navigation')" 
style="position: fixed; bottom: 0; left: 0; heigth: 100%"/>
<img src="images/Timebar.png" style="position: fixed; bottom: 0; right: 0; heigth: 100%">
<script type="text/javascript">
function GetClock(){
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes();
if(nmin<=9) nmin="0"+nmin

document.getElementById('clockbox').innerHTML="<font color='white' face='Segou UI'>"+nhour+":"+nmin+"</font>";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox" style="position: fixed; bottom: 6; right: 30;"></div>
</img>
<img src="images/Menu.png" style="position: fixed; bottom: 28; left: 0; visibility: hidden;" id="Menu">
<nav id="Navigation" style="visibility: hidden;">
	<ul>
	<li><a class="nav" href="index.php" style="position: fixed; bottom: 405; left: 8"><img src='images/folder.png' style="position:relative; bottom: -8px"/> Home</a></li>
	<li><a class="nav" href="creations.php" style="position: fixed; bottom: 360; left: 8"><img src='images/folder.png' style="position:relative; bottom: -8px"/> Iets</a></li>
	<li><a class="nav" href="about.php" style="position: fixed; bottom: 315; left: 8"><img src='images/folder.png' style="position:relative; bottom: -8px"/> Iets anders</a></li>
	<li><a class="nav" href="random.php" style="position: fixed; bottom: 270; left: 8"><img src='images/folder.png' style="position:relative; bottom: -8px"/> Nog wat anders</a></li>
	</ul>
</nav>
</img>

</div>
<script src="js/konami.js"></script>
<script>
var easter_egg = new Konami('konami.php');
</script>
</body>
</html>