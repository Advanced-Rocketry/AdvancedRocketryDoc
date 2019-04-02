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
    $title = 'Small Plate Presser';

    $imageDemoName = 'smallPlatePresser_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The small plate presser can press a block of metal into 3 plates of the same type of metal. The machine is crafted in-world by placing a block of obsidian under a piston, positioned pointing at the obsidian, with a block of air between them. When a redstone signal is applied and a valid material is given, the piston will smash the material into plates.</p>
    <p>The name is a bit deceiving as the presser can be used to make dust from ores as well. An effective method for early game ore doubling as it can be automated with vanilla redstone mechanics and a method for sucking up the output.</p>';
    
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
    $multiBlock = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>