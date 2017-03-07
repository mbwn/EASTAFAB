<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card</title>
    <style>
        body{
        }
        
        .artist{
            width: 300px;
            height: 400px;
            position: relative;
            background: rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }
        .artist img{
            width: 84%;
        }
        
        .artist .head{
            width: 100%;
            height: 80%;
            background-color: #d3d3d1;
            z-index: 100;
            overflow: hidden;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            
        }
        .artist .artist-name {
            position: absolute;
            left: 0px;
            bottom: 0px;
            padding: 20px;
        }
        .artist .artist-name h3{
            font-size: 20px;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .artist .artist-name span{
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            color: rgba(0,0,0,0.4);
        }
 
    </style>
    
</head>
<body>
   <div class="col-md-4 col-sm-4 animate-box">
   <div class="artist">
      <a href="">
        <div class="head" style="background-image: url('https://unsplash.it/800/400'); width:100%; height: 80%;">
          
      </div>  
          
      </a>
<div class="artist-name">
               <h3>Artist Name</h3>
               <span>Tanzania</span>
     
     </div>
           
     
           
        
   </div>
   </div>
    
</body>
</html>