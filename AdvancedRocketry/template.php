<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head>
  
  <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />
  <meta name="description" content="The Official Advanced Rocketry Wiki" />
  <meta name="keywords" content="advanced rocketry wiki minecraft mc rockets planets space exploration 1.12.2 mods" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="/AdvancedRocketry/style.css" media="all" />
<!--[if lt IE 6]>  <link rel="stylesheet" type="text/css" href="ie.css" />  <![endif]--><!--[if lt IE 7]>  <link rel="stylesheet" type="text/css" href="ie.css" />  <![endif]--><!--[if IE 7]>  <link rel="stylesheet" type="text/css" href="ie.css" />  <![endif]-->
  <title><?php echo $title; ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="/AdvancedRocketry/favicon.ico" />
  <?php
  
  
  ?>
</head>
<body>
<div id="container">
  <div id="header">
    <h1>Advanced Rocketry<br /></h1>
  </div>
  <div id="navigation">
    <ul class="menu">
      <li><a href="/AdvancedRocketry">Home</a></li>
      <li><a href="/AdvancedRocketry/guides">Guides</a></li>
      <li><a href="/AdvancedRocketry/blocks">Blocks </a></li>
      <li><a href="/AdvancedRocketry/items">Items</a></li>      
      <li><a href="/AdvancedRocketry/config">Configuration<br/>
      <li><a href="/AdvancedRocketry/Commands.php">Commands</a></li>
      <li><a href="/AdvancedRocketry/misc">Misc</a></li>
    </ul>
  </div>
  <div id="content">
    <div class="left">
      
      <h2><?php echo $title; ?></h2><hr>      
      <?php if (!empty($imageDemoName)){?>
        <center><h2>Overview</h2></center>
        <div class='row'>
          <div class='col-4'>            
            <img align="left" width='100%' src="../../img/<?php echo $imageDemoName ?>" />         
          </div>          
          <div class=col-8>                   
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
          <div class=col-8>
            <?php echo $descriptionGUI ?>
          </div>
          <div class='col-4'>            
            <img align="left" width='100%' src="../../img/<?php echo $imageGUI ?>" />         
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
    <div class="right">
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
  <div id="footer">
    <p></p> 
  </div>
</div>
</body>
</html>
