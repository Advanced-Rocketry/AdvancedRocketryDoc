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
    $title = 'Precision Assembler';

    $imageDemoName = 'precision_demo.png';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Precision Assembler is the workhorse of your infrastructure set-up. Many of the crafting items you need to craft the other blocks are made with this machine cheaper and more efficiently. Use the <a href="/AdvancedRocketry/1.12.2/items/holoProjector.php">Holo-Projector</a> to complete the structure, then right click the Precision Assembler machine block.</p>
    <p>You will use this machine to assemble upgrades for your space suit, assemble functional scanners for your ore mapping satellites, and create many of the circuits ubiquitous within the mod for cheaper, with often a 4x cost reduction in their main resource sink, a removal of a diamond, and the addition of a small bit of silicon.</p>
    <p>Some recipes for the machine requires 5 item inputs. You need to build it with an additional <a href="/Hatches.php">input hatch</a> or if resources are tight, add one later when needed.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='';
    
    $optionalSection='';
    
    $sidebarImage = 'precision_block.png';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = '';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $hasNBT = '';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
