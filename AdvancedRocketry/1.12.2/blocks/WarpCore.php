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
    $title = 'Warp Core';

    $imageDemoName = 'warpCore_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p> The warp core multiblock structure is responsible for providing the fuel input for the starship as well as moving it around.  Dilithium crystals can be put into the top of the structure for fuel.  Though the warp core is a nessessary component of the starship.  The <a href="WarpController.php">warp controller</a> is repsponsible for actually choosing the destination of the starship.</p>
    <p>A warp core block placed on a rocket allows the rocket to travel to other planets in the same solar system.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'warpCore_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
