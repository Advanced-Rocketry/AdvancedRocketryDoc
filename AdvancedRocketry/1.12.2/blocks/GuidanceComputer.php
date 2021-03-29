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
    $title = 'Guidance Computer';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Guidance Computer is responsible for determining the trajectory of a rocket so that it can reach its destination (hopefully in one piece).</p>
    
    ';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'guidanceComputer_gui.png';
    $descriptionGUI ='<p>A manned rocket requires exactly one guidance computer.  The guidance computer requires either a planet ID chip or a space station ID chip to successfully travel to its destination.</p><p>If a planet ID chip is used then the destination can be selected by using the "Select Planet" button in the main menu of a rocket</p>
    <p>If multiple guidance computers were built into one rocket, one would override the other, however it is impossible to know which one wins out before you arrive at your destination.</p>'; 
    
    $sidebarImage = 'guidanceComputer_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Teir 1</b><br />Destination Storage: 1';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
