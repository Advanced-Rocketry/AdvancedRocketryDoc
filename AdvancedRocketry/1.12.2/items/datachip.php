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
    $title = 'Data Storage Unit';

    $imageDemoName = 'abdp_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The data storage unit is used to store data of different types.  This is useful for transporting data from a <a href="/AdvancedRocketry/1.12.2/blocks/satelliteTerminal.php">Satellite Terminal</a> or Observetory to machines like the <a href="/AdvancedRocketry/1.12.2/blocks/Abdp.php">Astrobody Data Processor</a>.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'items/dataStorageUnit.png';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = 'YES';
    $other ='<b><h3>Teir 1</h3></b>Data Storage capacity: 500';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
