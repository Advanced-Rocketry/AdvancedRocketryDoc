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
    $title = 'Modular Space Suits';

    $imageDemoName = 'spacesuit_demo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = 'Modular Space Suits not only protect players from the vacuum of space, but also offer various components that can be used to enhance the player in other ways.</p>
    <p>The Space Suits themselves can be crafted in a crafting table, however components must be added to the suit in the <a href="/AdvancedRocketry/1.12.2/blocks/suitWorkstation.php">Suit Workstation</a>.';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = 'spacesuit_gui.png';
    $descriptionGUI ='The space suit by itself does not provide any armor, however it will also not take any damage or disintegrate.</p>
    <p>The Modular spacesuit can be used like any other set of armor, just put it on.  However without any components installed the only protection the spacesuit provides is protection against the vacuum of space.</p>
    <p>The space suit will prevent damage in space only if all the pieces are worn and there is some oxygen in the chestplate\'s tank.</p>
    <p>Unlike the hydrogen fuel required for the jetpack, the chestplate has its own internal oxygen storage tank which provides 30 minutes of oxygen by default (see "spaceSuitO2Buffer" in config file).</p>
    <br>
    <p>The internal tank can be filled with oxygen by stepping on a powered <a href="/AdvancedRocketry/1.12.2/blocks/gasCharger.php">Gas Charge Pad</a> containing Oxygen gas.  Pressure tanks mounted in the suit can be charged in a similar manner.</p>
    <p>When wearing a Chestplate an O2 bar will appear above the food bar indicating the amount of Oxygen stored in the suit.  IF a jetpack is mounted in the chestplate, a red H2 fuel bar will also appear.</p>
    <p>When wearing the modular helmet, a display indicating what components are installed on what parts of the suit in the top left corner of the screen.</p>';
    
    $optionalSection = '<h2><center>Space Suit Components</center></h2>
    <a name="headcomponents"></a>
    <table style="width:100%">
    <thead class="center"><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="/AdvancedRocketry/img/items/space_helmet.png" />Helmet Components</h3></center></thead>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/itemUpgrade0.png"/>Hover Upgrade</td>
    <td>If a jetpack is installed in the chestplate then the Hover Upgrade allows the jetpack to be switched to hover mode.  Installing more than one has no effect.</td>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/itemUpgrade1.png"/>Flight Speed Control Upgrade</td>
    <td>If a jetpack is installed in the chestplate then the Flight Speed Control Upgrade increases the speed at which the player flies by 0.4 m/s for each item installed.</td>
    </tr>
    <tr>
    <td id="atmAnalyser"><img  width=16px align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/atmosphereAnalyzer.png"/>Atmosphere Analyzer</td>
    <td>If equipped in the spacesuit, a display in the lower left hand corner of the screen displaying current atmosphere and oxygen levels will be shown.<br>The same information can be displayed if the item is right clicked in the world</td>
    </tr>
    <tr>
    <td id="foggles"><img  width=16px align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/itemUpgrade4.png"/>Anti-Fog Visor</td>
    <td>If equipped in the spacesuit, it will allow you to easily see through the fog on high pressure planets.</td>
    </tr>
    <tr>
    <td id="foggles"><img  width=16px align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/beaconFinder.png"/>Beacon Finder</td>
    <td>If equipped in the spacesuit, it will display arrows at the top of the screen pointing to active <a href="/AdvancedRocketry/1.12.2/blocks/Beacon.php">beacons</a> on the same planet.</td>
    </tr>
    </table>
    <br>
    <a name="chestcomponents"></a>
    <table style="width:100%">
    <thead><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="/AdvancedRocketry/img/items/space_chestplate.png" />Chestplate Components</h3></thead></center>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/jetpack.png"/>Jetpack</td>
    <td>Allows the player to fly in one of two modes(toggled by shift+toggle jetpack key) while consuming Hydrogen Gas during flight:<br><br>
    <i>Normal mode</i>: Accelerates the player upward when the jump key is held<br>
    <i>Hover mode</i>: Allows the player to fly in a method similar to creative mode flight, however a Hover Upgrade must be installed in the helmet.</td>
    </tr>
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/pressureTank.gif"/>Pressure Tank</td>
    <td>Adds gas/liquid storage capacity for the suit.  See the Pressure Tank <a href="pressureTank.php">page</a> for more details.</td>
    </tr>
    </table>
    <br>
    <a name="legcomponents"></a>
    <table style="width:100%">
    <thead><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="/AdvancedRocketry/img/items/space_leggings.png" />Legging Components</h3></thead></center>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/itemUpgrade2.png"/>Bionic Legs</td>
    <td>Increases the player\'s running speed by 0.5 m/s per upgrade</td>
    </tr>
    </table>
    
    <br><br>
    <a name="bootcomponents"></a>
    <table style="width:100%">
    <thead><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="/AdvancedRocketry/img/items/space_boots.png" />Boot Components</h3></thead></center>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="/AdvancedRocketry/img/items/itemUpgrade3.png"/>Padded Landing Boots</td>
    <td>Eliminates fall damage</td>
    </tr>
    </table>';
    
    $sidebarImage = 'items/spacesuit.gif';

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
