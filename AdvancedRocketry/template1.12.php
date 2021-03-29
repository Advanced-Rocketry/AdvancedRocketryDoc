<!DOCTYPE html>
<html lang="en-US">
<head>
  
  <!--<meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Official Advanced Rocketry Wiki" />
  <meta name="keywords" content="advanced rocketry wiki minecraft mc rockets planets space exploration 1.12.2 mods" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="/AdvancedRocketry/style.css" media="all" />
<!--[if lt IE 6]>  <link rel="stylesheet" type="text/css" href="ie.css" />  <![endif]--><!--[if lt IE 7]>  <link rel="stylesheet" type="text/css" href="ie.css" />  <![endif]--><!--[if IE 7]>  <link rel="stylesheet" type="text/css" href="ie.css" />  <![endif]-->
  <title>Advanced Rocketry</title>
  <link rel="shortcut icon" type="image/x-icon" href="/AdvancedRocketry/favicon.ico" />
  
</head>
<body>
<div class="container-fluid">
  <div id="header">
    
  </div>
  <nav class="navbar navbar-expand-md m-0 p-0" id="navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"><img src="/AdvancedRocketry/favicon.ico" width=100%></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav menu">
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/guides/index.html">Guides</a></li>
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/blocks/index.html">Blocks </a></li>
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/items/index.html">Items</a></li>  
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/config/index.html">Configuration<br/>
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/Commands.html">Commands</a></li>
        <li class="nav-item"><a class="nav-link" href="/AdvancedRocketry/1.12.2/Biomes.html">Biomes</a></li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-md-9 col-sm-8 main">
        
        <h2><?php echo $title; ?></h2><hr>      
        <?php if (!empty($imageDemoName)){?>
          <center><h2>Overview</h2></center>
          <div class="row">
            <div class="col-md-5 col-lg-4">            
              <img  width='100%' src="/AdvancedRocketry/img/<?php echo $imageDemoName ?>" />         
            </div>          
            <div class="col-md-7 col-lg-8">                   
              <?php echo $description1 ?>
            </div>
          </div>
          <hr>
        <?php }else{?>
          <center><h2>Overview</h2></center>       
          <?php echo $description1 ?>
          <hr>
        <?php } ?>
        
        <?php if (!empty($imageGUI)){?>
          <center><h2>Usage</h2></center>
          <div class='row'>
            <div class="col-md-7 col-lg-8">
              <?php echo $descriptionGUI ?>
            </div>
            <div class="col-md-5 col-lg-4">            
              <img width='100%' src="/AdvancedRocketry/img/<?php echo $imageGUI ?>" />         
            </div>          
          </div>
          <hr>
        <?php }else if(!empty($descriptionGUI)){?>
          <center><h2>Usage</h2></center>       
          <?php echo $descriptionGUI ?>
          <hr>
        <?php } ?>
        
        <?php if (!empty($optionalSection)){?>
          <?php echo $optionalSection ?> 
          <hr>    
        <?php } ?>

      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 m-0 p-0">
        <div class="ml-2 sidebar">
          <img style="width: 100%;" alt="Advanced Rocketry Logo" src="/AdvancedRocketry/logo.png" /><hr />
          <?php echo $title ?><hr>
          <?php if (!empty($sidebarImage)){?>
            <img class="sidebarImage" src="../../img/<?php echo $sidebarImage ?>" /><hr>
          <?php } ?>
          <?php if (!empty($hardness)||($hardness === '0')){?>
            Hardness: <?php echo $hardness ?><br>
          <?php } ?>
          <?php if (!empty($blastResistance)||($blastResistance === '0')){?>
            Blast Resistance: <?php echo $blastResistance ?><br>
          <?php } ?>
          <?php if (!empty($requiresTool)){?>
            Requires Tool: <?php echo $requiresTool ?><br>
          <?php } ?>
          <?php if (!empty($fullBlock)){?>
            Full Block: <?php echo $fullBlock ?><br>
          <?php } ?>
          <?php if (!empty($sealable)){?>
            Sealable: <?php echo $sealable ?><br>
          <?php } ?>
          <?php if (!empty($tileEntity)){?>
            Tile Entity: <?php echo $tileEntity ?><br>
          <?php } ?>
          <?php if (!empty($multiBlock)){?>
            Multiblock: <?php echo $multiBlock ?><br>
          <?php } ?>
          <?php if (!empty($hasNBT)){?>
            Has NBT: <?php echo $hasNBT ?><br>
          <?php } ?>
          <hr>
          <?php if (!empty($other)){?>
            <?php echo $other ?><br>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <p></p> 
  </div>
<!-- </div> -->
</body>
</html>
