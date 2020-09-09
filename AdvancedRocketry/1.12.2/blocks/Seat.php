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
    $title = 'Seat';

    $imageDemoName = 'seat_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Steve can build castles, mansions, and can even <a target="_blank" href="https://youtu.be/klHE8Q5Fc0k?t=33">compress diamond blocks with bare hands</a>.  That\'s a lot of not sitting down.  Introducing the seat; a place to sit down and not be standing.  For some reason it took trying to go to space to figure out that seats exist.  Seats are required for player space travel.  Do you really expect to blast off into space standing up?</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'seat_block.png';

    $hardness = '0.5';
    $blastResistance = '0';
    $requiresTool = 'NO';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'NO';
    $multiBlock = 'NO';
    $other ='<b>Teir 1</b><br />Comfort:<br> 10/10 Sit Again';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?> 
