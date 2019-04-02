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
    $title = 'Small Plate Presser';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/launchPadDemo.png" /><p>&nbsp;&nbsp;&nbsp;&nbsp; A concrete block that serves as the base for the
    rocket assembly platform, which is constructed from Launch Pad blocks, <a href="StructureTower.php">Structure Tower Blocks</a>, and a <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>.</p>
    <p>When placed down next to another launch pad block, the textures will rearrange themselves to make the connection appear seamless.</p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/launchPad_block.png" /><hr>Hardness: 2<br />Blast Resistance: 10<br />Requires Tool: Yes<br />Full Block: yes<br />Sealable: Yes<br />Tile Entity: No';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
