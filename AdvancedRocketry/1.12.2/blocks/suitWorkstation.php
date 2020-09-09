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
    $title = 'Suit Workstation';

    $imageDemoName = 'suitWorkstation_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Due to the nature of difficult nature of working with a <a href="/AdvancedRocketry/1.12.2/items/modularSpaceSuit.php">modular spacesuit</a>, a Suit Workstation must be used to install, remove, and modify components built into the <a href="/AdvancedRocketry/1.12.2/items/modularSpaceSuit.php">modular spacesuit</a>.</p>
    <p>The Suit Workstation does not require any power or tools to operate.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'suitWorkstation_gui.png';
    $descriptionGUI ='<p>To use the Suit Workstation a piece of the modular suit must be placed in the <font color="#009900">Armor holding slot</font>.  Once this is done the <font color="#990000">component slots</font> will show what components are installed in the piece of armor.</p>
    <p>The <font color="000099">player armor slots</font> are on the right for easy access the the currently equipped armor.</p>'; 
    
    $sidebarImage = 'suitWorkstation_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
