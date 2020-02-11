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
    $title = 'Electric Arc Furnace';

    $imageDemoName = 'electricArcFurnace_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Electric Arc Furnace is a multiblock machine that uses electricity to raise the internal temperatures to extreme levels in order to melt and smelt specialised materials.
    </p>
    <p>
    In Advanced Rocketry the Electric Arc Furnace is primarily used to smelt steel, titanium, silicon, and a few other alloys.  The structure itself can have multiple inputs and outputs allowing for easier automation.
    Steel takes a minute with copper coils, a silcion ingot 10 minutes. Because of the relative slow operation of silicon production, it is reccomended to build multiple EAFs, which is feasible due to the small amount of resources needed for the bricks. Silcion\'s processing power is simply 1 RF/t, allowing even a sinle solar panel to run a blast furnace making silicon. More advanced alloys, such as TiAL or TiIr, will require more time and greater RF/t to smelt, as will the production of Titanium ingots from Rutile ore, which requires a small amount of RF and a short time.
    </p>
    <p>The blast furnace is initially fairly slow, but using more advanced <a href="Coils.php">coils</a> can increase the speed at which it operates.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'electricArcFurnace_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>> 
