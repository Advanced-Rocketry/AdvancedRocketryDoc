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
    $title = 'Seat';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="/AdvancedRocketry/img/seat_demo.jpg" /><p>&nbsp;&nbsp;&nbsp;&nbsp;Steve can build castles, mansions, and can even <a target="_blank" href="https://youtu.be/klHE8Q5Fc0k?t=33">compress diamond blocks with bare hands</a>.  That\'s a lot of not sitting down.  Introducing the seat; a place to sit down and not be standing.  For some reason it took trying to go to space to figure out that seats exist.  Seats are required for player space travel.  Do you really expect to blast off into space standing up?
    </p>';
    
    $infoBarContent = $title.'<hr><img src="/AdvancedRocketry/img/seat_block.png" /><hr>Hardness: 0.5<br />Blast Resistance: 0<br />Requires Tool: No<br />Full Block: No<br />Sealable: No<br />Tile Entity: No<hr><center>Teir 1</center><br />Comfort: 10/10 sit again';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
