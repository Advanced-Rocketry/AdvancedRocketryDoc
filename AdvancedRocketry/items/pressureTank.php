<?php
    $title = 'Pressure Tank';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>
    <p>The pressure tank is an item used to store liquids and gases in a manner similar to a bucket.  However depending on the material used to build the pressure tank it may be able to store much more fluid than a bucket.</p>
    <p>Pressure tanks can also be used in the <a href="modularSpaceSuit.php">modular spacesuits</a> to store extra oxygen as well as store hydrogen for the jetpacks.</p>
    <hr>
    <table style="width:100%">
    <caption><h2>Pressure tanks</h2></caption>
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
    
    </table>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="../img/items/pressureTank.gif" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
