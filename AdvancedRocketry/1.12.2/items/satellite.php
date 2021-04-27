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
    $title = 'Satellite';

    $imageDemoName = '';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Satellites are objects you can <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteAssemblingMachine.php">build</a> and launch into orbit using <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteHatch.php">Satellite Bay</a> on a rocket that can perform useful actions such as collect energy and data, or even be used to (Some day) terraform a planet.</p>
    <p>Satellites are built in the Satellite Builder.  The machine will take components and a Satellite id chip and produce a satellite and a programmed Satellite id chip.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI ='<h2><center>Satellite Components</center></h2>
    <table style="width:100%">
    <thead><h3>Satellite Types</h3></thead>
    <tr>
    <th>Item</th>
    <th>Satellite Name</th>
    <th>Satellite Type</th>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePrimaryFunction0.png"/>Optical Sensor</td>
    <td>Optical Telescope</td>
    <td>Data Collection</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePrimaryFunction1.png"/>Composition Sensor</td>
    <td>Composition Scanner</td>
    <td>Data Collection</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePrimaryFunction2.png"/>Mass Detector</td>
    <td>Mass Scanner</td>
    <td>Data Collection</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePrimaryFunction3.png"/>Microwave Transmitter</td>
    <td>Microwave Energy Satellite</td>
    <td>Energy Collection</td>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePrimaryFunction4.png"/>Ore Mapper*</td>
    <td>Ore Mapper</td>
    <td>Utility</td>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePrimaryFunction5.png"/>Biome Changer**</td>
    <td>Biome Changer</td>
    <td>Utility</td>
    </tr>
    </table>
    <font size=2px>*In order to construct a functioning ore scanner, an unlinked <a href="oreScanner.php">ore scanner</a> must be used instead of a satellite id chip in the <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteAssemblingMachine.php">satellite assembling machine</a></font>
    <br /><font size=2px>**In order to construct a biome changer satellite, the <a href="biomeChanger.php">Biome Changer Remote</a> must be used instead of a satellite id chip in the <a href="/AdvancedRocketry/1.12.2/blocks/SatelliteAssemblingMachine.php">satellite assembling machine</a></font>
    
    <br><br>
    <table style="width:100%">
    <thead><h3>Energy Generation</h3></thead>
    <tr>
    <th>Item</th>
    <th>Energy Generation</th>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePowerSource0.png"/>Basic Solar Panel***</td>
    <td>4 FE/t</td>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/satellitePowerSource1.png"/>Large Solar Panel</td>
    <td>40 FE/t</td>
    </tr>
    </table>
    <font size=2px>*** Does not work with Microwave Transmitter unless it has storage</font>
    
    <br><br>
    <table style="width:100%">
    <thead><h3>Energy Storage</h3></thead>
    <tr>
    <th>Item</th>
    <th>Energy Storage</th>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/battery0.png"/>Small Battery</td>
    <td>10000 FE</td>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/battery1.png"/>2x Small Battery</td>
    <td>40000 FE</td>
    </tr>
    </table>
    
    <br><br>
    <table style="width:100%">
    <thead><h3>Data Storage</h3></thead>
    <tr>
    <th>Item</th>
    <th>Data Storage</th>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/dataUnit0.png"/>Data Storage Unit</td>
    <td>1,000 Data Units</td>
    </tr>
    </table>'; 
    
    $sidebarImage = 'satellite_icon.png';

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
