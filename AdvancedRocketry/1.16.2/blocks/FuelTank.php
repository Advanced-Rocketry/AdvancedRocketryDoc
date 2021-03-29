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
    $title = 'Fuel Tank';

    $imageDemoName = 'fuelTank_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Fuel Tanks are cylindrical 
    containers used to store rocket fuel onboard rockets.  Building fuel tanks into a rocket will increase the <a href="RocketAssemblingMachine.php#rocketStats">fuel storage capacity</a> of the rocket.</p>
    <p>If a fuel tank is placed on top of or underneath another fuel tank, then the tanks will merge to become one larger tank.</p>
    <p>Fuel tanks cannot merge sideways or diagonally.</p>
    <p>If multiple fuel tanks are present on the rocket the fuel tanks will provide the same amount of storage
    as one large fuel tank.</p><p>There are no penalties for number of fuel tanks or distance between a fuel tank and an <a href="RocketEngine.php">engine</a>.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'fuelTank_block.png';
    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'NO';
    $sealable = 'NO';
    $tileEntity = 'YES';
    $multiBlock = '';
    $other ='<b>Teir 1</b><br />Fuel Storage: 500mb';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>