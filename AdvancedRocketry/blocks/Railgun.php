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
    $title = 'Railgun';

    $imageDemoName = 'railgun_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The primary purpose of the railgun is to accelerate items to extremely high speed using a powerful magnet to essentially shoot items from one planet to its moon.  The railgun is not powerful enough to transport item stacks between planets and its range is limited to bodies within the same system (including space stations).  In order to allow cross dimensional item transfer, the railgun does act as a chunk loader and if the remote end gets unloaded somehow, the transfer will fail.</p>
    <p>The railgun requires a tremendous amount of power to accelerate items up to speed, this amount of power is proportional to the distance being fired with a maximum power consumtion of 100,000RF.  When firing between planet the energy cost is 500,000 + 10*surface distance.  The railgun can be used to transfer items from one part of the planet to another part of the planet as well at a lower energy cost of 1RF per block distance.</p>
    <p>The railgun itself is comprised of a base which contains components nessessary to function such as a power supply, input/output buffers, and a control terminal.  To function, a railgun must have a power supply, control terminal, an input hatch and/or an output hatch.  Naturally a railgun with only an input hatch can only send items, whereas a railgun with an output hatch can only recieve items and a railgun with both type can both send and recieve items.</p>
    <p>If you have the power generation to support 100,000RF/t, the Railgun can move one stack of items per tick at max speed, allowing for nearly unlimited item transfer without needing to send comparatively slow cargo rockets from planet to planet. All items sent by railgun are instantly moved from source to destination, without any visible travel time.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'railgun_gui.png';
    $descriptionGUI ='<p>Once the structure is built, the control terminal will be accessible via right click bringing up a GUI similar to the image on the left.</p>
    <p>The slot on the far left must be occupied by a <a href="../items/linker.php">Linker</a> programmed with the coordinates of the destination railgun.  If being used as reciever only, this slot may be empty.  The linker can be programmed with the coordinates of another railgun simply by shift-rightclicking the terminal of another railgun.</p>
    <br /><p>The "Min Transfer Size" box allows a player to specify the smallest stack size the railgun is allowed to send.  If no input hatch has a stack that large, the railgun will wait until a stack becomes larger than that value.</p>
    <p>The button with the redstone icon on the top right allows a player to choose under what redstone conditions the machine is allowed to operate, by default redstone control is disabled.</p>
    <p>The power swtich is to the left of the redstone control button, if the power switch is in the off position the machine will not fire, however if swtiched on, then the machine will fire assuming other conditions are met.</p>'; 
    
    $sidebarImage = 'railgun_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'YES';
    $tileEntity = 'YES';
    $multiBlock = 'YES';
    $other ='<b>Chunk Loader</b><br><b>Redstone Control</b>';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>
