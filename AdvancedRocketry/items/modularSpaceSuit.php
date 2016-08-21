<?php
    $title = 'Modular Space Suits';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/spacesuit_demo.jpg" /><h2><center>Overview</center></h2>&nbsp;&nbsp;&nbsp;&nbsp;Modular Space Suits not only protect players from the vacuum of space, but also offer various components that can be used to enhance the player in other ways.</p>
    <p>The Space Suits themselves can be crafted in a crafting table, however components must be added to the suit in the <a href="../blocks/suitWorkstation.php">Suit Workstation</a>.</p>
    
    
    <hr><h2><center>Usage</center></h2>
    <p><img align=left src="../img/spacesuit_gui.png" />The space suit by itself does not provide any armor, however it will also not take any damage or disintegrate.</p>
    <p>The Modular spacesuit can be used like any other set of armor, just put it on.  However without any components installed the only protection the spacesuit provides is protection against the vacuum of space.</p>
    <p>The space suit will prevent damage in space only if all the pieces are worn and there is some oxygen in the chestplate\'s tank.</p>
    <p>Unlike the hydrogen fuel required for the jetpack, the chestplate has its own internal oxygen storage tank which provides 30 minutes of oxygen by default (see "spaceSuitO2Buffer" in config file).</p>
    <br>
    <p>The internal tank can be filled with oxygen by stepping on a powered <a href="">Gas Charge Pad</a> containing Oxygen gas.  Pressure tanks mounted in the suit can be charged in a similar manner.</p>
    <p>When wearing a Chestplate an O2 bar will appear above the food bar indicating the amount of Oxygen stored in the suit.  IF a jetpack is mounted in the chestplate, a red H2 fuel bar will also appear.</p>
    <p>When wearing the modular helmet, a display indicating what components are installed on what parts of the suit in the top left corner of the screen.</p>
    
    <hr><h2><center>Space Suit Components</center></h2>
    <table style="width:100%">
    <caption><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="../img/items/space_helmet.png" /></center>Helmet Components</h3></caption>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/itemUpgrade0.png"/>Hover Upgrade</td>
    <td>If a jetpack is installed in the chestplate then the Hover Upgrade allows the jetpack to be switched to hover mode.  Installing more than one has no effect.</td>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/itemUpgrade1.png"/>Flight Speed Control Upgrade</td>
    <td>If a jetpack is installed in the chestplate then the Flight Speed Control Upgrade increases the speed at which the player flies by 0.4 m/s for each item installed.</td>
    </tr>
    </table>
    
    <br><br>
    <table style="width:100%">
    <caption><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="../img/items/space_chestplate.png" /></center>Chestplate Components</h3></caption>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/jetpack.png"/>Jetpack</td>
    <td>Allows the player to fly in one of two modes while consuming Hydrogen Gas during flight:<br><br>
    <i>Normal mode</i>: Accelerates the player upward when the jump key is held<br>
    <i>Hover mode</i>: Allows the player to fly in a method similar to creative mode flight, however a Hover Upgrade must be installed in the helmet.</td>
    </tr>
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/pressureTank.gif"/>Pressure Tank</td>
    <td>Adds gas/liquid storage capacity for the suit.  See the Pressure Tank <a href="pressureTank.php">page</a> for more details.</td>
    </tr>
    </table>
    
    <br><br>
    <table style="width:100%">
    <caption><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="../img/items/space_leggings.png" /></center>Legging Components</h3></caption>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/itemUpgrade2.png"/>Bionic Legs</td>
    <td>Increases the player\'s running speed by 0.5 m/s per upgrade</td>
    </tr>
    </table>
    
    <br><br>
    <table style="width:100%">
    <caption><h3><center><img align=center style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges; border: none" width=32px src="../img/items/space_boots.png" /></center>Boot Components</h3></caption>
    <tr>
    <th>Item</th>
    <th>Function</th>
    </tr>
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/items/itemUpgrade3.png"/>Padded Landing Boots</td>
    <td>Eliminates fall damage</td>
    </tr>
    </table>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/spacesuit.gif" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
