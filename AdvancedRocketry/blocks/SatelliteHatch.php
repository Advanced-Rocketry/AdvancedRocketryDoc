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
    $title = 'Satellite Bay';

    $imageDemoName = 'satelliteHatch_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Satellite Bay is a special block for rockets that holds a satellite to be released upon reaching orbit.</p>
    <p>This block can be placed anywhere on the rocket and can be accessed once built by crouching and right clicking the rocket.</p>
    <p><h3>Future Plans:</h3></p>
    <p>Require different Teirs for larger/heavier satellites</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'satelliteHatch_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'NO';
    $other ='<b>Teir 1</b><br />Weight Capacity:<br>Unlimited<br />Maximum Size:<br> Unlimited';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
