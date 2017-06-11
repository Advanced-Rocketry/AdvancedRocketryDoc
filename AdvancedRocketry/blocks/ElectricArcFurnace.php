<?php
    $title = 'Electric Arc Furnace';
    
    $mainContent = '<h1>'.$title.'</h1><hr><img align="left" src="../img/electricArcFurnace_demo.jpg" /><p><center><h3>Overview</h3></center>
    The Electric Arc Furnace is a multiblock machine that uses electricity to raise the internal temperatures to extreme levels in order to melt and smelt most materials.
    </p>
    <p>
    In Advanced Rocketry the Electric Arc Furnace is primarily used to smelt steel, titanium, silicon, and a few other alloys.  The structure itself can have multiple inputs and outputs allowing for easier automation.
    </p>
    <p>The blast furnace is initially fairly slow, but using more advanced <a href="Coils.php">coils</a> can increase the speed at which it operates.</p>
    <p>Below is a table containing the coil types and speed boosts:</p>
    <table>
        <tr>
            <th>Coil Type</th>
            <th>Speed multiplier</th>
        </tr>
        <tr>
            <td>Gold</td>
            <td>111%</td>
        </tr>
        <tr>
            <td>Aluminum</td>
            <td>125%</td>
        </tr>
        <tr>
            <td>Titanium</td>
            <td>133%</td>
        </tr>
        <tr>
            <td>Iridium</td>
            <td>200%</td>
        </tr>
    </table>
    <p>Note: the modifier is multiplicative, so if an arc furnace had 3 Iridium coils the actual speed boost would be (200%/100)*(200%/100)*(200%/100)*100=800%</p>';
    
    $infoBarContent = $title.'<hr><img src="../img/electricArcFurnace_block.png" /><hr>Hardness: 2<br />Blast Resistance: 0<br />Requires Tool: Yes<br />Full Block: Yes<br />Sealable: Yes<br />Tile Entity: Yes<br />MultiBlock';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
