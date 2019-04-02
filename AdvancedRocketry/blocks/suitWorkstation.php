<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference. 

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time. 

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:
            
            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png
        
        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.
    
    */    
    
    //NAME OF BLOCK
    $title = '';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>YOUR TEXT HERE</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = '';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
<?php
    $title = 'Suit Workstation';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/suitWorkstation_demo.jpg" /><p><center><h2>Overview</h2></center>&nbsp;&nbsp;&nbsp;&nbsp;
    Due to the nature of difficult nature of working with a <a href="../items/modularSpaceSuit.php">modular spacesuit</a>, a Suit Workstation must be used to install, remove, and modify components built into the <a href="../items/modularSpaceSuit.php">modular spacesuit</a>.</p>
    <p>The Suit Workstation does not require any power or tools to operate.</p>
    <br><hr>
    <h2><center>Usage</center></h2>
    <img align="left" src="../img/suitWorkstation_gui.png" />To use the Suit Workstation a piece of the modular suit must be placed in the <font color="#009900">Armor holding slot</font>.  Once this is done the <font color="#990000">component slots</font> will show what components are installed in the piece of armor.</p>
    <p>The <font color="000099">player armor slots</font> are on the right for easy access the the currently equipped armor.</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/suitWorkstation_block.png" /><hr>Hardness: 3<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
