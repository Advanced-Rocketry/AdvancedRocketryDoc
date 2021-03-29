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
    $title = 'Data Bus';

    $imageDemoName = 'dataBus_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The data bus imports data from <a href="\AdvancedRocketry\1.12.2\items\satellite.php">satellites</a> or <a href="\AdvancedRocketry\1.12.2\items\datachip.php">data chips</a> into the <a href="Observatory.php">Observatory</a> and <a href="abdp.php">Astrobody Data Processor</a>. See <a href="\AdvancedRocketry\1.12.2\guides\Missions.php">Mission Control</a> for more information on data and its usages.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'dataHatch_block.png';
    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = '';
    $multiBlock = 'NO';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
