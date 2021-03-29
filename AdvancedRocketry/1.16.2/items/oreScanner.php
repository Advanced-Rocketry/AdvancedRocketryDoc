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
    $title = 'Ore Scanner';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The Ore Scanner is an item that when paired with a satellite can be used to detect ores near the player.</p>
    <p>The maximum detectable distance from the player is a function of the satellite\'s ability to generate energy.  The more energy the satellite generates the farther the player can see, however there is an upper (Technical) limit to the distance that can be viewed.</p>
    <p>When first crafted the Ore Scanner will not do anything.  To make it work it must be connected to a satellite.  This can be done in the <a href=../blocks/SatelliteAssemblingMachine.php>Satellite Assembling Machine</a> by using an unprogrammed Ore Scanner in the place of a satellite ID chip.</p>
    <p>If at least 3,000 data storage is availble on the satellite, then the scanner can filter by ore.</p>
    <p>If a connected Ore Scanner is placed in the Main Component slot in the <a href=../blocks/SatelliteAssemblingMachine.php>Satellite Assembling Machine</a> and another Ore Scanner is placed in the copy slot, the connection can be copied to the second ore scanner</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'oreScanner_gui.png';
    $descriptionGUI ='<p>Once the Ore Scanner is connected to a satellite then right clicking the Ore Scanner should open a GUI similar to the image above.</p>
    <p>The large middle section displays nearby ore deposits where the bright red and green indicate denser deposits of ore.</p>
    <p>The up and down arrow keys increase and decrease the zoom on the scanner (large zoom values may result in the satellite taking longer to process the data) and the WASD keys will pan the view.</p>
    <p>If the satellite is capable you can select an ore in the hotbar to set the filter to, doing this results in only deposits made from that ore display.</p>
    <p>Clicking on a square on the display will update the coordnites on the left to indicate the in-world position selected and the value of the ore at that location (higher is better).</p>'; 
    
    $sidebarImage = 'oreScanner_icon.png';

    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>