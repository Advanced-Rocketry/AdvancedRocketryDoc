<?php
    $title = 'Satellite';
    
    $mainContent = '<h1>'.$title.'</h1><hr><h2><center>Overview</center></h2>&nbsp;&nbsp;&nbsp;&nbsp;Satellites are objects you can <a href="../blocks/SatelliteAssemblingMachine.php">build</a> and launch into orbit using <a href="../blocks/SatelliteHatch.php">Satellite Bay</a> on a rocket that can perform useful actions such as collect energy and data, or even be used to (Some day) terraform a planet.</p>
    <p>Satellites are built in the Satellite Builder.  The machine will take components and a Satellite id chip and produce a satellite and a programmed Satellite id chip.</p>
    <p></p>
    
    
    <hr><h2><center>Satellite Compenents</center></h2>
    <table style="width:100%">
    <caption><h3>Satellite Types</h3></caption>
    <tr>
    <th>Item</th>
    <th>Satellite Name</th>
    <th>Satellite Type</th>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/satellitePrimaryFunction0.png"/>Optical Sensor</td>
    <td>Optical Telescope</td>
    <td>Data Collection</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/satellitePrimaryFunction1.png"/>Composition Sensor</td>
    <td>Composition Scanner</td>
    <td>Data Collection</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/satellitePrimaryFunction2.png"/>Mass Detector</td>
    <td>Mass Scanner</td>
    <td>Data Collection</td>
    </tr>
    
    <tr>
    <td><img align=left style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/satellitePrimaryFunction3.png"/>Microwave Transmitter</td>
    <td>Microwave Energy Satellite</td>
    <td>Energy Collection</td>
    </tr>
    </table>
    
    <br><br>
    <table style="width:100%">
    <caption><h3>Energy Generation</h3></caption>
    <tr>
    <th>Item</th>
    <th>Energy Generation</th>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/satellitePowerSource0.png"/>Basic Solar Panel*</td>
    <td>0.1 RF/t</td>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/satellitePowerSource1.png"/>Large Solar Panel</td>
    <td>1 RF/t</td>
    </tr>
    </table>
    <font size=2px>* Does not work with Microwave Transmitter unless it has storage</font>
    
    <br><br>
    <table style="width:100%">
    <caption><h3>Energy Storage</h3></caption>
    <tr>
    <th>Item</th>
    <th>Energy Storage</th>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/battery0.png"/>Small Battery</td>
    <td>100 RF</td>
    </tr>
    </table>
    
    <br><br>
    <table style="width:100%">
    <caption><h3>Data Storage</h3></caption>
    <tr>
    <th>Item</th>
    <th>Data Storage</th>
    </tr>
    
    <tr>
    <td><img align=left width=16px style="margin: 0px; margin-right: 10px; padding: 0px; border: none;" src="../img/dataUnit0.png"/>Data Storage Unit</td>
    <td>1,000 Data Units</td>
    </tr>
    </table>';
    
    $infoBarContent = $title.'<hr><img height=128px style="image-rendering: -webkit-optimize-contrast; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: crisp-edges;" src="/AdvancedRocketry/img/satellite_icon.png" /><hr>Has NBT: Yes';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
