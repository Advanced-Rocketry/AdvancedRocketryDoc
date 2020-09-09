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
    $title = 'Hatches and Loaders';

    $imageDemoName = 'hatch_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Hatches are a way of inputting and outputting items, liquid, energy, and data from rockets and machines.</p>
    <p>There are three main different types of hatches: Fluid, Item, and Energy.</p>
    <p>Fluid hatches, when built into a machine provides the capacity for the machine to accept fluids, this is nessessary for some recpies</p>
    <p>Item Hatches are used to provide a way of getting items into and out of a machine.  Most will move an itemstack over if there is room if the output stack cannot fit in the last slot.</p>
    <p>Energy Hatches are used to accept or output energy from a machine.</p>
    <p>Hatches can be linked directly to a rocket, a rocket assembler, or Docking Pad using a <a href="/AdvancedRocketry/1.12.2/items/linker.php">Linking tool</a>.</p>
    <p>When linked to a Docking Pad or rocket assembler, any rocket that lands on the Docking Pad or on the landing pad will automatically be linked to the hatches.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='<h3>Interfacing with redstone</h3>
    <p>When connected to a rocket, hatches will output redstone signals under various circumstances:</p>
    <ul>
    <li>A rocket item loader will output a redstone signal when no more items can be loaded into the rocket</li>
    <li>A rocket fluid loader will output a redstone signal when the tanks on the rocket are completely full</li>
    <li>A rocket item unloader will output a redstone signal when there are no more items left in the rocket</li>
    <li>A rocket fluid unloader will output a redstone signal when there is no more fluid left in the rocket</li>'; 
    
    $sidebarImage = 'hatch_block.gif';

    $hardness = '3';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Teir 1</b><br />Number of slots: 4';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
