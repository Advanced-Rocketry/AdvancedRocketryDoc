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
    $title = 'Pressure Tank';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>The pressure tank is an item used to store liquids and gases in a manner similar to a bucket.  However depending on the material used to build the pressure tank it may be able to store much more fluid than a bucket.</p>
    <p>Pressure tanks can also be used in the <a href="modularSpaceSuit.php">modular spacesuits</a> to store extra oxygen as well as store hydrogen for the jetpacks.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $optionalSection ='<table style="width:100%">
    <thead><h2>Pressure tanks</h2></thead>
    <tr>
    <th>Item</th>
    <th>Material</th>
    <th>Storage Size</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/pressureTank0.png"/>Low Pressure Tank</td>
    <td>Iron</td>
    <td>1000Mb</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/pressureTank1.png"/>Pressure Tank</td>
    <td>Steel</td>
    <td>2000Mb</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/pressureTank2.png"/>High Pressure Tank</td>
    <td>Aluminum</td>
    <td>4000Mb</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/pressureTank3.png"/>High Pressure Tank</td>
    <td>Titanium</td>
    <td>8000Mb</td>
    </tr>
    
    </table></p>';
    
    $sidebarImage = 'items/pressureTank.gif';
    $hardness = '';
    $blastResistance = '';
    $requiresTool = '';
    $fullBlock = '';
    $sealable = '';
    $tileEntity = '';
    $multiBlock = '';
    $hasNBT = 'YES';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template1.12.php');
?>
