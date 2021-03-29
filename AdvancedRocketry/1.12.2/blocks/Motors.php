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
    $title = 'Motors';

    $imageDemoName = 'motors_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Motors are used in the construction of multiblock machines throughout the mod.  Motors also come in several tiers, higher tier motors being more powerful, but more expensive to make.
    </p>
    <p>In most machines, the type of motor built into the machine impacts the machine\'s speed.  The speed increase depends on the type of motor used.  Regular motors have no change in speed, however Advanced motors increase the machine\'s processing speed by 1.5x, the Enhanced motors by 2x, and the elite motors by 4x.</p>
    <br>
    <p>
    The effect of motors also stack, so in machines capable of housing multiple motors, having two elite motors can increase the processing speed of the machine by 4*4 = 16x</p>
    
    <p>
    One exception that exists is the <a href="Observatory.php">observatory</a>.  Rather than increasing the speed of the observatory, higher tier motors increase the observatory\'s observable distance.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'motor_block.png';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'NO';
    $multiBlock = 'NO';
    $other ='<b>Motor</b><br />Speed Multiplier: 1x<hr><b>Advanced Motor</b><br />Speed Multiplier: 1.5x<hr><b>Enhanced Motor</b><br />Speed Multiplier: 2x<hr><b>Elite Motor</b><br />Speed Multiplier: 4x';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
